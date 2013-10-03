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

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <label class="rotulo-contact">Nombre</label>
     
      <p><input name="nombre" type="text" class="campo-contacto" required autofocus></p>
     
     <label class="rotulo-contact">Email</label>
     <p><input name="email" type="email" class="campo-contacto" required autofocus></p>
     
     <label class="rotulo-contact">Telefono</label>
     <p><input name="telefono" type="text" class="campo-contacto"></p>
     
     <label class="rotulo-contact">labelrograma</p>
     
     <p>
       <label>
         <input type="checkbox" name="programa" value="Peruvian Universities" id="programa_0">
         Peruvian Universities</label>
       
       <label>
         <input type="checkbox" name="programa" value="Opinion Aenu" id="programa_1">
         Opinion Aenu</label>
       
       <label>
         <input type="checkbox" name="programa" value="Accion Aenu" id="programa_2">
         Accion Aenu</label>
      
     </p>
     
         <p class="rotulo-contact">Mensaje</p>
     <p><textarea name="mensaje" cols="" rows="" class="mensaje"></textarea></p>
<p><input name="enviar" type="submit" value="Enviar" class="botonenviar2"></p>
     
     
     </form>

?>