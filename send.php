<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';
require 'constantes.php';

$mail = new PHPMailer('true');

try{
    $mail->SMTPDebug = 2;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'alvaroamav96@gmail.com';
    $mail->Password = EMAIL_PASSWORD;

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    ##mensaje a enviar

    $mail->setFrom ('alvaroamav96@gmail.com');
    $mail->addAddress('alvaroamav96@gmail.com');

    $mail->isHTML(true);
    $mail->Subject= 'esta es una prueba de mail';
    $mail->Body = 'hola mundo desde <b>phpmaile</b>';

    $mail->send();

} catch (Exception $exception){
    echo 'algo salio mal', $exception->getMessage();
}



?>