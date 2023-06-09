<?php
// Assuming you have established a database connection
include 'connection.php';
$image = $_POST['image'];
$title = $_POST['title'];
$price = $_POST['price'];

// Insert the data into the wishlist table
$insertQuery = "INSERT INTO addcart (book_img, book_title, book_price) VALUES ('$image', '$title', '$price')";
mysqli_query($connection, $insertQuery);

// Close the database connection
mysqli_close($connection);
header('Location: books.php');
?>