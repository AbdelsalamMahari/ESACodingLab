<?php
// Include the connection file
require_once 'connection.php';
session_start();

// Check if the form is submitted
if (isset($_POST['password_update'])) {
  // Retrieve the form data
  $newPassword = $_POST['newPassword'];
  $confirmPassword = $_POST['confirmPassword'];
  $token = $_POST['password_token'];
  $email = $_POST['email'];

  // Perform token existence check in the database
  $query = "SELECT * FROM register WHERE verification_token = '$token'";
  $result = mysqli_query($connection, $query);

  // Check if a row with the given token exists
  if (mysqli_num_rows($result) > 0) {
    // Token exists, check if new password matches confirm password
    if ($newPassword === $confirmPassword) {
      // Update the password in the database
      $updateQuery = "UPDATE register SET db_password = '$newPassword' WHERE verification_token = '$token' LIMIT 1";
      mysqli_query($connection, $updateQuery);

      // Password updated successfully
      $_SESSION['msg'] = "Password updated successfully!";
      header("Location: password_change.php?token=$token&email=$email");
    } else {
      // New password and confirm password do not match
      $_SESSION['msg1'] = "Please confirm your password.";
      header("Location: password_change.php?token=$token&email=$email");
    }
  } else {
    // Token does not exist in the database
    $_SESSION['msg1'] = "Invalid or expired token.";
    header("Location: password_change.php?token=$token&email=$email");
  }
}
?>
