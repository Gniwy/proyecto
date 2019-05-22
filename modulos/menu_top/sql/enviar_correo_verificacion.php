<?php

require_once "../../../conexion/conexion.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_usuario="SELECT * FROM usuario WHERE id_cliente=".$idcliente;
$aux_usuario=mysqli_query($link,$sql_usuario);
$ex_usuario=mysqli_fetch_assoc($aux_usuario);
$id_usuario=$ex_usuario['id_cliente'];
$correo_cliente=$ex_usuario['email'];

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
    $mail->addAddress($correo_cliente, 'Ireferences.es');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verifica tu correo';
    $mail->Body    = 'Link de verificacion:<br><br><a href="http://ireferences.es/verificar_usuario.php?id='.$id_usuario.'">Link</a>';

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
