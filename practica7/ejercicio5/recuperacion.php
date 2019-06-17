<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperacion</title>
</head>

<body>
    Usuario Ingresado: <?= $_SESSION['nombreUsuario']; ?><br>
    Clave ingresada: <?= $_SESSION['claveCliente']; ?><br>
    <h5>Volver al <a href="login.php">inicio</a></h5>
</body>

</html>