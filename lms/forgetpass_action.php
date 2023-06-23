<?php
include "connection.php";
$email = $_POST['email'];

$sql = "SELECT * FROM register WHERE db_email='$email'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 1) {
    echo 'exist';
}else{
    echo 'email not exist';
}
?>
