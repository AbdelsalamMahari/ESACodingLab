<?php
// Assuming you have established a database connection
include 'connection.php';
$bookId = $_POST['id'];

session_start(); 

if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit();
}
$email=$_SESSION['email'];
// Insert the data into the favorite table
$insertQuery = "INSERT INTO favorite (fav_user_email, fav_book_id) VALUES ('$email', '$bookId')";
mysqli_query($connection, $insertQuery);

// Close the database connection
mysqli_close($connection);
header('Location: books.php');
?>
