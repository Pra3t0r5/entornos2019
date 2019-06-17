<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="carga.php" method="post">
        <label for="nombreUsuario">Usuario</label>
        <input type="text" name="nombreUsuario" id="">
        <input type="password" name="claveCliente" id="">
        <input type="submit" name="login">Login
    </form>
</body>

</html>