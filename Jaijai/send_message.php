<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jahairaampaso7@gmail.com';
    $mail->Password = 'pyde xezm wafz oiag';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('jahairaampaso7@gmail.com');
    $mail->Subject = "New Message from $name";
    $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    echo "Thank you <strong>$name</strong>, your message has been sent!";
  } catch (Exception $e) {
    echo "Error: Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
  }
}
?>
