<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $price = $_POST["price"];
    $priceAfter = $_POST["priceAfter"];
    $category= $_POST["category"];
    $bookDesc= $_POST["bookDesc"];
    $bookImg= $_FILES['bookImg']['name'];
    $Img_tmp= $_FILES['bookImg']['tmp_name'];
    


    $sql = "INSERT INTO books (book_name, author_name, book_price, book_price_dis, category, book_desc, book_img) 
    VALUES ('$bookName', '$authorName', '$price', '$priceAfter', '$category', '$bookDesc', '$bookImg')";
    move_uploaded_file($Img_tmp,"uploads/".$bookImg);
        if (mysqli_query($connection, $sql)) {
            echo "Success!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    
    }
    
    ?>