<?php


// Const
$recibe = 'experienciasenpatagonia@gmail.com';
$manda=$_POST['email'];
$message=$_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPBlock = false;
$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;

if($_SERVER['HTTP_HOST'] === "localhost:8000"){

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = "patagoniaexperiencias@gmail.com";
$mail->Password = "patagonia123";
} else {

$mail->Host = 'ca8.toservers.com';
$mail->Port = 25;
$mail->SMTPSecure = 'none';
$mail->Username = "nosotros@experienciasenpatagonia.com";
$mail->Password = "patagonia123";

}


$mail->setFrom($manda, $manda);
$mail->addAddress($recibe, $manda);
$mail->addCustomHeader('Reply-To', $email);

$mail->Subject = 'Consulta';
$mail->Body = $message;

$mail->AltBody = 'This is a plain-text message body';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'success';
}

