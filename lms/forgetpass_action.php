<?php
include "connection.php";
require 'vendor/autoload.php'; // Path to your autoloader file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

session_start();

// Get the submitted email from the form
$email = $_POST['email'];

// Sanitize and validate the email input
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit();
}

// Prepare and execute a query to check if the email exists in the database
$stmt = $connection->prepare("SELECT * FROM register WHERE db_email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email exists in the database, send the password reset link
    $token = bin2hex(random_bytes(16));
    $resetLink = "http://localhost/lms/password_change.php?email=$email&token=$token";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true); // Enable exceptions

    try {
        // Set up SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'bookstore979@gmail.com'; // Set your SMTP username
        $mail->Password = 'ykzp lmai jwzn vuup'; // Set your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Set the encryption type
        $mail->Port = 465; // Set the SMTP port

        // Set sender and recipient
        $mail->setFrom('bookstore979@gmail.com', 'bookStore'); // Set the sender's email and name
        $mail->addAddress($email); // Add the recipient's email
        $mail->addReplyTo('bookstore979@gmail.com', 'bookStore'); // Add a Reply-To address

        // Set email content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body = "Click the following link to reset your password:<br><a href='$resetLink'>Click Me</a>";
        $mail->AltBody = 'Click the following link to reset your password: ' . $resetLink;

        // Disable SMTP debug output
        $mail->SMTPDebug = false;

        // Send the email
        $mail->send();

        // Store the token in the database
        $stmt = $connection->prepare("UPDATE register SET verification_token = ? WHERE db_email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();
        $stmt->close();

        $_SESSION["msg"] = "Email sent successfully. Please check your inbox.";
        header('Location: forgetpass.php');
        exit();

    } catch (Exception $e) {
        // Error sending the email
        echo "Failed to send the email. Error: " . $mail->ErrorInfo;
    }
} else {
    // Email does not exist in the database
    $_SESSION["msg1"] = "Email does not exist.";
    header('Location: forgetpass.php');
    exit();
}

$connection->close();
?>
