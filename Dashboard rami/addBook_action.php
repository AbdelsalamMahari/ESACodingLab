<?php
include 'C:\xampp\htdocs\Signup\connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $bookName = $_POST["book_name"];
    $authorName = $_POST["author_name"];
    $price = $_POST["price"];
    $priceAfter = $_POST["discount_price"];
    $category= $_POST["category"];
    $bookDesc= $_POST["description"];
    $bookImg= $_FILES['image']['name'];
    $Img_tmp= $_FILES['image']['tmp_name'];
    
    $checkQuery = "SELECT * FROM product WHERE db_book = '$bookName'";
    $result = mysqli_query($con, $checkQuery);
    
    if (mysqli_num_rows($result) > 0) {
        header("location:addproduct.php?error=exists");
        exit();
    }

    $sql = "INSERT INTO product (db_book, db_author, db_price, db_dprice, db_category, db_description, db_image) 
    VALUES ('$bookName', '$authorName', '$price', '$priceAfter', '$category', '$bookDesc', '$bookImg')";
    mysqli_query($con, $sql);
    move_uploaded_file($Img_tmp,"images/".$bookImg);
        
        header("location:addproduct.php");
    }
    
    ?>