<?php
include 'connection.php';
session_start();
$title = $_POST['title'];
$review = $_POST['review'];
$email = $_SESSION['email'];
$bookId = $_POST['idd'];

$stmt = $connection->prepare("INSERT INTO feedback (feedback_title, feedback_desc ,book_id ,user_email) VALUES (?, ? ,? ,?)");
$stmt->bind_param("ssss", $title, $review,$bookId,$email);
$stmt->execute();

$stmt->close();
$connection->close();

header("Location: bookinfo.php?bookid=".$bookId);
exit();
?>