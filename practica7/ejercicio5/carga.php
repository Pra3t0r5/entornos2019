<?php session_start();
if (isset($_POST['login'])) {
    $_SESSION['nombreUsuario'] = $_POST['nombreUsuario'];
    $_SESSION['claveCliente'] = $_POST['claveCliente'];
} else {
    $login = "login.php";
    header('Location: ' . $login);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carga</title>
</head>

<body>
    <h1>Datos cargados en sesion, por favor click <a href="recuperacion.php">aqui</a> para continuar.</h1>

</body>

</html>