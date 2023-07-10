<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    $name = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'randyortonalinaamaani2001@gmail.com'; // Replace with your actual Gmail address
        $mail->Password = 'hodxmpzgrrmnfadr'; // Replace with your actual Gmail password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('randyortonalinaamaani2001@gmail.com'); // Replace with your actual Gmail address
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = $_POST["message"];
        $mail->send();
        echo "<p class='success'>Thank you for contacting us. Your message has been sent.</p>";
    } catch (Exception $e) {
        echo "<p class='error'>Oops! An error occurred while sending the message. Please try again later.</p>";
    }
}
?>
