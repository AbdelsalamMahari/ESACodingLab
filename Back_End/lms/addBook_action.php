<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $price = $_POST["price"];
    $priceAfter = $_POST["priceAfter"];
    $category = $_POST["category"];
    $bookDesc = $_POST["bookDesc"];
    $bookImg = $_FILES['bookImg']['name'];
    $Img_tmp = $_FILES['bookImg']['tmp_name'];
    
    // Check if the author already exists in the authors table
    $authorQuery = "SELECT author_id FROM authors WHERE author_name = '$authorName'";
    $authorResult = mysqli_query($connection, $authorQuery);
    
    if (mysqli_num_rows($authorResult) > 0) {
        // Author already exists, retrieve the author_id
        $authorRow = mysqli_fetch_assoc($authorResult);
        $authorId = $authorRow['author_id'];
    } else {
        // Author doesn't exist, insert the author into the authors table
        $authorSql = "INSERT INTO authors (author_name) VALUES ('$authorName')";
        if (mysqli_query($connection, $authorSql)) {
            // Retrieve the generated author_id
            $authorId = mysqli_insert_id($connection);
        } else {
            echo "Error: " . mysqli_error($connection);
            // Handle the error and return an appropriate response
            return;
        }
    }
    
    // Insert the book into the books table
    $bookSql = "INSERT INTO books (book_name, book_price, book_price_dis, category, book_desc, book_img) 
                VALUES ('$bookName', '$price', '$priceAfter', '$category', '$bookDesc', '$bookImg')";
    move_uploaded_file($Img_tmp, "uploads/" . $bookImg);
    
    if (mysqli_query($connection, $bookSql)) {
        // Retrieve the generated book_id
        $bookId = mysqli_insert_id($connection);
        
        // Insert the author-book relationship into the Author_Books table
        $authorBookSql = "INSERT INTO Author_Books (author_id, book_id) VALUES ('$authorId', '$bookId')";
        if (mysqli_query($connection, $authorBookSql)) {
            header('Location: addproduct.php');
            echo "Success!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

?>
