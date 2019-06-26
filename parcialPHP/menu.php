<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $link = mysqli_connect('localhost', 'root', '', 'veterinaria') or die("no se ha podido establecer una conexion con la base de datos");
    $sql_getID = "SELECT id FROM clientes WHERE email = $mail LIMIT 1";
    $resultado = mysqli_query($link, $sql_getID);
    $_SESSION['usuario']  = mysqli_fetch_assoc($resultado);
    mysqli_close($link);
}
if (isset($_SESSION['usuario']) and isset($_POST['guardar'])) {
    $nom = $_POST['nombre'];
    $raz = $_POST['raza'];
    $us = $_SESSION['usuario'];
    $link = mysqli_connect('localhost', 'root', '', 'veterinaria') or die("no se ha podido establecer una conexion con la base de datos");
    $sql_saveOne = "INSERT INTO mascotas (nombre, raza, cliente_id) VALUES ($nom, $raz, $us)";
    mysqli_query($link, $sql_saveOne);
    mysqli_close($link);
}
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $link = mysqli_connect('localhost', 'root', '', 'veterinaria') or die("no se ha podido establecer una conexion con la base de datos");
    $sql_getall = "SELECT m.nombre 'nombre', m.raza 'raza' FROM clientes c INNER JOIN mascotas m ON c.id = m.cliente_id WHERE c.id = $usuario";
    $result = mysqli_query($link, $sql_getall);
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contenedor bordeado">
        <div class="formulario bordeado">
            <h4>Listado de mascotas</h4>
            <table>
                <tr>
                    <td>Nombre Mascota</td>
                    <td>Raza Mascota</td>
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($columna = mysqli_fetch_array($result)) {
                        echo ('<tr>');
                        echo ('<td>' . $columna["nombre"] . '</td>');
                        echo ('<td>' . $columna["raza"] . '</td>');
                        echo ('</tr>');
                    }
                } else {
                    echo ("Ninguna mascota registrada");
                }
                ?>
        </div>
        <div class="foto">
            <div class="formulario">
                <form action="historial.php" method="get">
                    <label for="nombreMascota">Nombre Mascota</label>
                    <input type="text" name="nombreMascota" id="nombreMascota">
                    <button name="historial" type="submit">Ver Historiales</button>
                </form>
                <div class="formulario">
                    <a href="guardar.php">Cargar una Mascota</a>
                </div>
                <div class="formulario">
                    <a href="index.php">Salir</a>
                </div>
            </div>
        </div>
</body>

</html>