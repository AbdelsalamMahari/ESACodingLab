<?php
include 'connection.php';

if (isset($_POST['bookName']) && isset($_POST['authorName']) && isset($_POST['price']) && isset($_POST['category']) && isset($_POST['description']) && isset($_POST['qty']) && isset($_FILES['image'])) {

    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $bookDesc = $_POST["description"];
    $qty = $_POST["qty"];
    $bookImg = $_FILES['image']['name'];
    $Img_tmp = $_FILES['image']['tmp_name'];

    // Check if the author already exists in the authors table
    $authorQuery = "SELECT author_id FROM authors WHERE author_name = ?";
    $authorStatement = mysqli_prepare($connection, $authorQuery);
    mysqli_stmt_bind_param($authorStatement, "s", $authorName);
    mysqli_stmt_execute($authorStatement);
    $authorResult = mysqli_stmt_get_result($authorStatement);

    if (mysqli_num_rows($authorResult) > 0) {
        // Author already exists, retrieve the author_id
        $authorRow = mysqli_fetch_assoc($authorResult);
        $authorId = $authorRow['author_id'];
    } else {
        // Author doesn't exist, insert the author into the authors table
        $authorSql = "INSERT INTO authors (author_name) VALUES (?)";
        $authorStatement = mysqli_prepare($connection, $authorSql);
        mysqli_stmt_bind_param($authorStatement, "s", $authorName);

        if (mysqli_stmt_execute($authorStatement)) {
            // Retrieve the generated author_id
            $authorId = mysqli_insert_id($connection);
        } else {
            echo "Error: " . mysqli_error($connection);
            // Handle the error and return an appropriate response
            return;
        }
    }

    // Calculate borrow price
    $borrowPrice = $price * 0.1;

    // Insert the book into the books table
    $bookSql = "INSERT INTO books (book_name, book_price, borrow_price, category, book_desc, quantity, book_img) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
    $bookStatement = mysqli_prepare($connection, $bookSql);
    mysqli_stmt_bind_param($bookStatement, "sssssss", $bookName, $price, $borrowPrice, $category, $bookDesc, $qty, $bookImg);
    move_uploaded_file($Img_tmp, "uploads/" . $bookImg);

    if (mysqli_stmt_execute($bookStatement)) {
        // Retrieve the generated book_id
        $bookId = mysqli_insert_id($connection);

        // Insert the author-book relationship into the Author_Books table
        $authorBookSql = "INSERT INTO Author_Books (author_id, book_id) VALUES (?, ?)";
        $authorBookStatement = mysqli_prepare($connection, $authorBookSql);
        mysqli_stmt_bind_param($authorBookStatement, "ii", $authorId, $bookId);

        if (mysqli_stmt_execute($authorBookStatement)) {
            echo "Success!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "Incomplete form data. Please fill in all the required fields.";
}
?>
