<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$service = $_POST['service'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = [];

if (trim($service) !== '') {
    array_push($errors, "Ocurrió un error, intenta de nuevo.");
}

if (trim($subject) == '' || trim($name) == '' || trim($phone) == '' || trim($email) == '' || trim($message) == '') {
    array_push($error, "Verifica que todos los campos estén llenos");
}

if (empty($errors)) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        $mail->isSMTP();   
        $mail->Host = 'smtp.zoho.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'oswaldo@somosbloom.com';
        $mail->Password = 'Awesome2';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465;
        $mail->setFrom('oswaldo@somosbloom.com', 'Brand it on'); 
        $mail->addAddress('oswaldo@somosbloom.com', 'Brand it on'); 
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = '<strong>Nombre:</strong> ' . $name . '<br>' .
                      '<strong>Teléfono:</strong> ' . $phone . '<br>' .
                      '<strong>Email:</strong> ' . $email . '<br>' .
                      '<strong>Mensaje:</strong> ' . $message;
        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo 'error';
    }
} else {
    echo $errors[0];
}

$mail = new PHPMailer(true);

