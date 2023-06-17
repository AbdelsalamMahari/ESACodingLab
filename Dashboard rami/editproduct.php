<?php
include 'C:\xampp\htdocs\Signup\connection.php';


  $ID=$_POST['bookID'];
  $book = $_POST['book_name'];
  $author = $_POST['author_name'];
  $price = $_POST['price'];
  $dprice=$_POST['discount_price'];
  $category = $_POST['category'];
  $imageName = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  
  $sql = "UPDATE product SET db_book = '$book', db_price = '$price', db_dprice = '$dprice', db_category = '$category', db_image='$imageName' WHERE id = '$ID'";
  mysqli_query($con, $sql);
  move_uploaded_file($image_tmp, "images/" . $imageName);

  header("location: product.php");
  exit;
