<?php
session_start();
if (isset($_POST['login'])) {
    $mail = $_POST['mail'];
    $host = "localhost";
    $database = "ejercicio6";
    $username = "root";
    $pass = "";
    $conn = mysqli_connect($host, $username, $pass, $database) or die("Connect failed: %s\n" . $conn->error);
    var_dump($conn);
    echo ("<br>");
    $sql = "SELECT nombre FROM alumnos WHERE mail LIKE $mail";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo ("<br>");
    if (mysqli_num_rows($result) > 0) {
        var_dump($row);
        echo ("<br>");
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nombre'] = $row["nombre"];
    }
    mysqli_close($conn);
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
    <a href="resultado.php">Verificar resultado de carga.</a>
</body>

</html>