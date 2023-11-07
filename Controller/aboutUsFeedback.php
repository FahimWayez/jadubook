<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 'urojahaj465@gmail.com'; 
            $mail->Password = '465urojahaj!!!';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->setFrom($email);
            $mail->addAddress('urojahaj465@gmail.com');  

            $mail->isHTML(false);
            $mail->Subject = "From: $name <$email>";
            $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message\n\nRegards,\n$name";

            $mail->send();
            echo "Your message has been sent";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo "Email and message field are required!";
}
?>