<?php

$nombre = 'BOT-email LA ACADEMIA';
$mail = $_POST['email'];
$empresa = 'LA ACADEMIA';

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 para " . $empresa . ". Nuevo suscriptor! \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
/*$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";*/
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'josecarlos.2682@hotmail.com';
$asunto = 'LA ACADEMIA - nuevo suscriptor';


if(mail($para, $asunto, utf8_decode($mensaje), $header)) {
			
			echo '¡Tu email fue enviado con éxito!';

			} 
		else {
			echo 'Hubo un problema al enviar tu email. :(';
			}


?>