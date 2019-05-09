<?php
$to = "fernando.albertengo@gmail.com";
$subject = "Hola";
$message = "contenido del email";
#----------------------------------------------------------------
#ejemplo headers
$headers = "From: noreply@example.com\r\n";
$headers .= "Reply-To" . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "BCC: susan.copiaoculta@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "X-Priority: 1\r\n";
#----------------------------------------------------------------
$enviado;

#ejemplo mail simple
$enviado = mail($to, $subject, $message);

#ejemplo mail con manejo de resultado
if (mail($to, $subject, $message, $headers)) {
    echo "enviado";
} else {
    echo "no enviado";
}
#----------------------------------------------------------------
#Ejemplo sesion
#apertura
session_start(); #debe ser llamada antes que cualquier salida porque envia cabeceras
#llenado
$_SESSION["usuario"] = "Juan"; #variable superglobal que vincula la session a la pagina
$_SESSION["contador"]++;
$_SESSION["valido"] = true;
$_SESSION["USR"] = new User("a", "b", 23);
$_SESSION["codigo"] = $_SESSION["usuario"] . rand(10, 99);
$_SESSION["ciudades"] = ["San Juan", "Rosario"];
$_SESSION["id_paises"] = array(2, 4, 7);

#muestreo
echo $_SESSION["usuario"];
echo "<pre>";
    print_r($_SESSION);
    var_dump($_SESSION);
echo "</pre>";

#cierre session usuario (log out)
unset($_SESSION); #deja sesion vacia, igualar campos por vacios, o un array vacio a la sesion tambien sirve
session_destroy(); #destruye soko si tiene permisos
header('Location: index.php'); #lo manda a index
exit(); #mata proceso, es decir, no pasa de esta linea. No importa anidacion, no se continua ejecutando codigo de esta pagina