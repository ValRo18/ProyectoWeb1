<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                  // Enable SMTP authentication
  	$mail->Username   = 'valeria.rojas.chacon@gmail.com';                     // SMTP username
  	$mail->Password   = '181920valeria';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('valeria.rojas.chacon@gmail.com');
    $mail->addAddress('lsegurab@est.utn.ac.cr');     // Add a recipient

    // Attachments
    //$mail->addAttachment('./curriculum.pdf');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Curriculum Vitae';
    $mail->Body    = 'Tu Curriculum se a generado de manera exitosa!';

    $mail->send();
    header('Location: ../crear.php');
} catch (Exception $e) {
   echo ("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}