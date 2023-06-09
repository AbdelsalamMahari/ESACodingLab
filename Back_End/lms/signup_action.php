<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $date = $_POST["date"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO signup (firstname, lastname, date, email, password) 
    VALUES ('$firstname', '$lastname', '$date', '$email', '$password')";

    if (mysqli_query($connection, $sql)) {
        header("location:login.php");
    } else {
        echo "Error: " . mysqli_error($connection);
    }

}

?>