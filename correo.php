<?php




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer/src/Exception.php';
require 'phpmailer/PHPMailer/src/PHPMailer.php';
require 'phpmailer/PHPMailer/src/SMTP.php';

enviarEmail();

function enviarEmail(){
  if(isset($_POST['id_orden']) && isset($_POST['identificacion_cliente']) 
  && isset($_POST['email']) && isset($_POST['asunto']) && isset($_POST['cod_orden'])){
     //mandar correo
     $id_orden=$_POST['id_orden'];
     $identificacion_cliente=$_POST['identificacion_cliente'];
     $cod_orden=$_POST['cod_orden'];

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
         $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
         <html xmlns:v="urn:schemas-microsoft-com:vml">
         
         <head>
             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
             <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
           
             
             <title>Remito Online</title>
         
             <style type="text/css">
                 body {
                     width: 100%;
                     background-color: #ffffff;
                     margin: 0;
                     padding: 0;
                     -webkit-font-smoothing: antialiased;
                     mso-margin-top-alt: 0px;
                     mso-margin-bottom-alt: 0px;
                     mso-padding-alt: 0px 0px 0px 0px;
                 }
                 
                 p,
                 h1,
                 h2,
                 h3,
                 h4 {
                     margin-top: 0;
                     margin-bottom: 0;
                     padding-top: 0;
                     padding-bottom: 0;
                 }
                 
                 span.preheader {
                     display: none;
                     font-size: 1px;
                 }
                 
                 html {
                     width: 100%;
                 }
                 
                 table {
                     font-size: 14px;
                     border: 0;
                 }
               
                 
                 @media only screen and (max-width: 640px) {
                     
                     .main-header {
                         font-size: 20px !important;
                     }
                     .main-section-header {
                         font-size: 28px !important;
                     }
                     .show {
                         display: block !important;
                     }
                     .hide {
                         display: none !important;
                     }
                     .align-center {
                         text-align: center !important;
                     }
                     .no-bg {
                         background: none !important;
                     }
                     
                     .main-image img {
                         width: 440px !important;
                         height: auto !important;
                     }
                    
                     .divider img {
                         width: 440px !important;
                     }
                  
                     .container590 {
                         width: 440px !important;
                     }
                     .container580 {
                         width: 400px !important;
                     }
                     .main-button {
                         width: 220px !important;
                     }
                    
                     .section-img img {
                         width: 320px !important;
                         height: auto !important;
                     }
                     .team-img img {
                         width: 100% !important;
                         height: auto !important;
                     }
                 }
                 
                 @media only screen and (max-width: 479px) {
                     
                     .main-header {
                         font-size: 18px !important;
                     }
                     .main-section-header {
                         font-size: 26px !important;
                     }
                     
                     .divider img {
                         width: 280px !important;
                     }
                     
                     .container590 {
                         width: 280px !important;
                     }
                     .container590 {
                         width: 280px !important;
                     }
                     .container580 {
                         width: 260px !important;
                     }
                     
                     .section-img img {
                         width: 280px !important;
                         height: auto !important;
                     }
                 }
             </style>
           
         </head>
         
         
         <body class="respond" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
           
             <table style="display:none!important;">
                 <tr>
                     <td>
                         <div style="overflow:hidden;display:none;font-size:1px;color:#ffffff;line-height:1px;font-family:Arial;maxheight:0px;max-width:0px;opacity:0;">
                             Descargar Remito Online 
                         </div>
                     </td>
                 </tr>
             </table>
            
             <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff">
         
                 <tr>
                     <td align="center">
                         <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
         
                             <tr>
                                 <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                             </tr>
         
                             <tr>
                                 <td align="center">
         
                                     <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
         
                                         <tr>
                                             <td align="center" height="70" style="height:70px;">
                                                 <a href="" style="display: block; border-style: none !important; border: 0 !important;"><img width="100" border="0" style="display: block; width: 100px;" src="http://postalmarketing.com.ar/img/logo.png" alt="" /></a>
                                             </td>
                                         </tr>
                                     </table>
                                 </td>
                             </tr>
         
                             <tr>
                                 <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                             </tr>
         
                         </table>
                     </td>
                 </tr>
             </table>
             
         
             <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">
         
                 <tr>
                     <td align="center">
                         <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                             <tr>
         
                                 <td align="center" class="section-img">
                                     <a href="" style=" border-style: none !important; display: block; border: 0 !important;"><img src="http://postalmarketing.com.ar/img/recibido.jpg" style="height: 300px;
                                         width: 300px;
                                         
                                         background-repeat: no-repeat;
                                         background-position: 50%;
                                         border-radius: 50%;
                                         background-size: 100% auto;alt=" /></a>
         
                                 </td>
                             </tr>
                             <tr>
                                 <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                             </tr>
                             <tr>
                                 <td align="center" style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;" class="main-header">
         
         
                                     <div style="line-height: 35px">
         
                                         Gracias! <span style="color: #5caad2;"></span>
         
                                     </div>
                                 </td>
                             </tr>
         
                             <tr>
                                 <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                             </tr>
         
                             <tr>
                                 <td align="center">
                                     <table border="0" width="40" align="center" cellpadding="0" cellspacing="0" bgcolor="eeeeee">
                                         <tr>
                                             <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
                                         </tr>
                                     </table>
                                 </td>
                             </tr>
         
                             <tr>
                                 <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                             </tr>
         
                             <tr>
                                 <td align="center">
                                     <table border="0" width="400" align="center" cellpadding="0" cellspacing="0" class="container590">
                                         <tr>
                                             <td align="center" style="color: #888888; font-size: 16px; font-family: Calibri, sans-serif; line-height: 24px;";
         
         
                                                 <div style="line-height: 24px">
         
                                                     Descarga tu remito online.
                                                 </div>
                                             </td>
                                         </tr>
                                     </table>
                                 </td>
                             </tr>
         
                             <tr>
                                 <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                             </tr>
         
                             <tr>
                                 <td align="center">
                                     <table border="0" align="center" width="160" cellpadding="0" cellspacing="0" bgcolor="5caad2" style="">
         
                                         <tr>
                                             <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                                         </tr>
         
                                         <tr>
                                             <td align="center" style="color: #ffffff; font-size: 14px; font-family:Calibri, sans-serif; line-height: 26px;">
         
         
                                                 <div style="line-height: 26px;">
                                                     <a href="http://localhost/postalup/pdfsend/pdfpowerconfirmar.php?cod_orden=' .$cod_orden. '&submit=send" style="#ffffff; text-decoration: none;">DESCARGAR</a>
                                                 </div>
                                             </td>
                                         </tr>
         
                                         <tr>
                                             <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                                         </tr>
         
                                     </table>
                                 </td>
                             </tr>
         
         
                         </table>
         
                     </td>
                 </tr>
         
             </table>
         
           
             
         
         </body>
         
         </html>';
         
     
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