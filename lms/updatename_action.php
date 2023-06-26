<?php
session_start();
include "connection.php";

$newfname = $_POST['newfname'];
$newlname = $_POST['newlname'];
$email = $_SESSION['email'];

// Validate input
if (!empty($newfname) && !empty($newlname)) {
    // Update query
    $query = "UPDATE register SET db_fname = '$newfname', db_lname = '$newlname' WHERE db_email = '$email'";

    // Execute the query
    $result = mysqli_query($connection, $query);

    if ($result) {
      $msg1 = "Username updated successfully!";
    } else {
        echo "Error updating data: " . mysqli_error($connection);
    }
} else {
     $msg = "First name and last name cannot be empty.";
}
include 'edit_profile.php';
// Close the database connection
mysqli_close($connection);
?>
