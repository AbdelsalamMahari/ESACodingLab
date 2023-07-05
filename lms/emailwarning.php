<?php
include "connection.php";
$currentDate = date("Y-m-d");

$sql = "SELECT * FROM borrows WHERE status = 1 AND db_borrowto >= DATE_ADD('$currentDate', INTERVAL 3 DAY)";
$result = mysqli_query($connection, $sql);
if (isset($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $borrowerEmail = $row['db_email'];
        $emailMessage = "This is a reminder that your borrowing period is ending soon. Please return the book to the library.\n\nThank you.";
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
            'subject' => 'Reminder!!!',
            'htmlContent' => $emailMessage
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
    }
}

?>