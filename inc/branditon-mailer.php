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

$errors = array();

if (trim($service) !== '') {
    array_push($errors, "Ocurrió un error, intenta de nuevo.");
}

if (trim($subject) == '' || trim($name) == '' || trim($phone) == '' || trim($email) == '' || trim($message) == '') {
    array_push($errors, "Verifica que todos los campos estén llenos");
}

if (empty($errors)) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        $mail->isSMTP();   
        $mail->Host = 'smtp.zoho.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'fernanda@branditon.com.mx';
        $mail->Password = 'Branditon_2020';
        // Branditon_2020
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->setFrom('fernanda@branditon.com.mx', 'Brand it on'); 
        $mail->addAddress('fernanda@branditon.com.mx', 'Brand it on'); 
        $mail->addReplyTo($email, $name);
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = '<strong>Nombre:</strong> ' . $name . '<br>' .
                      '<strong>Teléfono:</strong> ' . $phone . '<br>' .
                      '<strong>Email:</strong> ' . $email . '<br>' .
                      '<strong>Mensaje:</strong> ' . $message;
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'success';
        }
    } catch (Exception $e) {
        echo 'error';
    }
} else {
    echo $errors[0];
}
