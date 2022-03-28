<?php

$para = "adribirra@gmail.com";

$asunto = "Mensaje desde la pagina!!";

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset = utf-8 \r\n";

$MESSAGE_BODY = "\n<br>Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("El envio de mail falló!!!");

header('Location: index.html');

?>