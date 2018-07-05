<?php
$toEmail = "raulupdate@gmail.com";
$subject = "Mensaje enviado desde Plexus";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje = "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombres"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Mensaje		:".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert-message'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert-error'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>