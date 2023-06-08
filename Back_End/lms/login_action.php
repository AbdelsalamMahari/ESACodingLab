<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signup WHERE firstname='$username' AND password='$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("location:index.php");
    } else {
        echo "Invalid username or password";
    }
    
    mysqli_close($connection);
}

?>