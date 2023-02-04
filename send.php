<?php
session_start();
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
}
if(isset($_POST['mensaje'])){
    $mensaje = $_POST['mensaje'];
    $_SESSION['mensaje'] = $mensaje;
}


//Envio del correo

$body = 'El usuario con los datos:' .$nombre. '<br>' .$email. '<br>' . 'ha dejado el siguiete comentario'. '<br>'. $mensaje;

//Importar PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Verificacion

$mail = new PHPMailer(true);
try {
    $mail->SMTPOptions = array(
        'ssl'=> array(
            'veryft_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );

        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'developez.eu@gmail.com';
        $mail->Password = 'pmvm bgtv lwao xgfu';
        // $mail->tsl;
        $mail->Port = 587;

    //Envio
    $mail->setFrom('developez.eu@gmail.com', 'Developez');
    $mail->addAddress('jen1992lo@gmail.com');
    $mail->isHTML(true);

    //Formato HTML del mensaje
    $mail->Subject = 'Enviado desde la web. Información';
    $mail->Body = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
        header("Location: feedback.php");
    }
    
    catch(Exception $e) {
        echo "El mensaje no se ha podido enviar. Error:
        {$mail->ErrorInfo}";

    } 
?>
