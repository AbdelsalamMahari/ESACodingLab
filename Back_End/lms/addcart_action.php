<?php
// Assuming you have established a database connection

include 'connection.php';
session_start(); 

if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit();
}
$bookId = $_POST['id'];
$email=$_SESSION['email'];
// Insert the data into the wishlist table
$insertQuery = "INSERT INTO addcart (cart_book_id, cart_user_email) VALUES ('$bookId','$email')";
mysqli_query($connection, $insertQuery);

// Close the database connection
mysqli_close($connection);
header('Location: books.php');
?>

