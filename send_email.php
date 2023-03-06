<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'kalyan.k@skilltechnologies.in'; // SMTP username
    $mail->Password = 'dfeybuhgewtodznm'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->setFrom('kalyan.k@skilltechnologies.in', 'Your Name');
    $mail->addAddress('kalyan.k@skilltechnologies.in', 'Recipient Name'); // Add a recipient
    $mail->addReplyTo('kalyan.k@skilltechnologies.in', 'Your Name');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Test email';
    $mail->Body    = 'This is a test email sent from PHPMailer using Gmail.';

    if($mail->Send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed. Error message: '.$mail->ErrorInfo;
}
} catch (Exception $e) {
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}




?>