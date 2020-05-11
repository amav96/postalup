<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer/src/Exception.php';
require 'phpmailer/PHPMailer/src/PHPMailer.php';
require 'phpmailer/PHPMailer/src/SMTP.php';

enviarEmail();

function enviarEmail(){
  if(isset($_POST['id_orden']) && isset($_POST['identificacion_cliente']) 
  && isset($_POST['email']) && isset($_POST['asunto'])){
     //mandar correo
     $id_orden=$_POST['id_orden'];
     $identificacion_cliente=$_POST['identificacion_cliente'];
     $email=$_POST['email'];
     $asunto=$_POST['asunto'];

     $mail = new PHPMailer(true);

     try {
         //Server settings

         $mail->SMTPDebug = false; 
         $mail->do_debug = 0; 
                               // Enable verbose debug output
         $mail->isSMTP();                                            // Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = 'informes@postalmarketing.com.ar';                     // SMTP username
         $mail->Password   = 'informes';                               // SMTP password
         $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
         $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
     
         //Recipients
         $mail->setFrom('alvaroamav96@gmail.com', 'Informes-Express');
         $mail->addAddress($_POST['email']);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
         //$mail->addCC('cc@example.com');
         //$mail->addBCC('bcc@example.com');
     
         // Attachments
         //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     
         // Content
         $mail->isHTML(true); 
         $mail->CharSet = 'UTF-8';                                 // Set email format to HTML
         $mail->Subject = ($_POST['asunto']);
         $mail->Body    =  'Ingrese a www.postalmarketing.com.ar/descargacupon.php' .'<br/>Accediendo con su Nro. Cliente'.' ' . $identificacion_cliente . ' ,luego' . '<br/>Para obtener su cupón ingrese Nro. Orden'.' ' . $id_orden . ' Seguidamente su Nro. Cliente.';
         //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     
         $mail->send();
         header('location:enviado.php');
     } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }

  }else{
    return;

  }
}


?>