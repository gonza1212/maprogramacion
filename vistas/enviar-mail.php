<?php

$destinatario = "sorawi@youzend.net";
$asunto = 'prueba de mail';
$mensaje = 'este es un mensaje de prueba';

$exito = mail($destinatario, $asunto, $mensaje);

if($exito) {
	echo 'mensaje enviado';
} else {
	echo 'error de envio';
}