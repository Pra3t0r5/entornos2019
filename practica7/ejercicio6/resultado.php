<?php
session_start();
if (isset($_SESSION['nombre'])) {
    $mensaje = "Bienvenido " . $_SESSION['nombre'];
} else {
    $mensaje = "Usted no puede estar aqui.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
</head>

<body>
    <h1><?= $mensaje ?></h1>
    <a href="login.php">Volver al login.</a>
</body>

</html>