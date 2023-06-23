<?php
// Assuming you have established a database connection

include 'connection.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("location:login.php");
    exit();
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $bookId = $_POST['id'];
    $email = $_SESSION['email'];
    $purchaseOption = $_POST['purchase_option'];

    // Prepare the SQL statement
    $insertQuery = "INSERT INTO addcart (cart_book_id, cart_user_email, purchase_option) VALUES (?, ?, ?)";
    $statement = mysqli_prepare($connection, $insertQuery);

    // Bind the parameters
    mysqli_stmt_bind_param($statement, "iss", $bookId, $email, $purchaseOption);

    // Execute the statement
    mysqli_stmt_execute($statement);

    // Close the statement
    mysqli_stmt_close($statement);

    // Close the database connection
    mysqli_close($connection);
    header('Location: books.php');
    exit();
}
?>
