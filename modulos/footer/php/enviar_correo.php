<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';

foreach($_POST as $variable => $valor){
  $$variable=$valor;
}

$mail = new PHPMailer();

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP

    $mail->Host = 'smtp.live.com;smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cristian_castro112@hotmail.com';                 // SMTP username
    $mail->Password = 'granja11';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('cristian_castro112@hotmail.com', 'Mailer');
    $mail->addAddress('cristiancastroalarcon@gmail.com', 'Joe User');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje de '.$correo_cliente;
    $mail->Body    = $mensaje_cliente;

    if (!$mail->send()) {
        echo "Ha ocurrido un error al enviar el correo.";
    } else {
        echo "Mensaje enviado correctamente.";
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }

?>
