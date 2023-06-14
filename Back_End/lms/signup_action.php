<?php
session_start();
include "connection.php";
$fname=$_POST['fistname'];
$lname=$_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cp = $_POST['confirmpassword'];

$s = "SELECT * FROM register WHERE db_email='$email'";
$result = mysqli_query($connection, $s);

if (mysqli_fetch_array($result) == 0) {
    if ($password == $cp) {
        
        $verificationCode = sha1(uniqid(rand(), true));
        $smtpApiKey = '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';

        $url = 'https://api.sendinblue.com/v3/smtp/email';
        $data = array(
            'sender' => array(
                'name' => 'Rami',
                'email' => 'rkaeen54@gmail.com'
            ),
            'to' => array(
                array('email' => $email)
            ),
            'subject' => 'Email Verification',
            'htmlContent' => 'Click the link below to verify your email: <a href="http://localhost/lms/verify.php?code=' . $verificationCode . '">Verification Link</a>'
        );
        
        $headers = array(
            'Content-Type: application/json',
            'api-key: ' . $smtpApiKey
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);

        $sql = "INSERT INTO register (db_fnam,db_lname,db_email, db_password, verification_code) VALUES ('$fname','$lname','$email', '$password', '$verificationCode')";
        mysqli_query($connection, $sql);

        $_SESSION['Email'] = $email;
        $done = "Registration successful! Please check your email to verify your account.";
    } else {
        $error_message = "Please make sure to confirm the password.";
    }
} else {
    $error_message = "Email already exists.";
}

include 'signup.php';
?>
