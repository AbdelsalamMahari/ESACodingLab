<?php
include 'connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM register WHERE db_email='$email' AND db_password='$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["email"] = $email;
        header("location:index.php");
    } else {
        echo "Invalid email or password";
    }
    
    mysqli_close($connection);
}

?>