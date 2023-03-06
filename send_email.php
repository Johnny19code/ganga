<?php
// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
require_once './vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'saichandanvanam@gmail.com';
$mail->Password = 'Radha@123';
$mail->SMTPSecure = 'tls';
$mail->Port = 528;

$mail->setFrom('saichandanvanam@gmail.com', 'Your Hotel');
$mail->addAddress('saichandanvanam@gmail.com', 'Me');
$mail->Subject = 'Thanks for choosing Our Hotel!';
// Set HTML 
$mail->isHTML(TRUE);
$mail->Body = '<html>Hi there, we are happy to <br>confirm your booking.</br> Please check the document in the attachment.</html>';
$mail->AltBody = 'Hi there, we are happy to confirm your booking. Please check the document in the attachment.';
// add attachment // just add the '/path/to/file.pdf', 'filename.pdf'
$mail->addAttachment('//confirmations/yourbooking.pdf', 'yourbooking.pdf');
// send the message
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
