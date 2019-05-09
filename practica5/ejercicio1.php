<?php
$destinatario = "ejemplo@gmail.com ";
$asunto = "Prueba";
$cuerpo = "Esto es una prueba de envío de correo a través del servidor";
mail($destinatario, $asunto, $cuerpo);
