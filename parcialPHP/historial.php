<?php
session_start();
if (isset($_SESSION['usuario']) and isset($_GET['historial'])) {
    $usuario = $_SESSION['usuario'];
    $nombreMascota = $_GET['nombreMascota'];
    $link = mysqli_connect('localhost', 'root', '', 'veterinaria') or die("no se ha podido establecer una conexion con la base de datos");
    $sql_getall = "SELECT h.fecha 'fecha', h.comentario 'comentario' FROM mascotas m INNER JOIN historiales h ON m.id = h.mascota_id WHERE m.nombre = $nombreMascota";
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
            <h4>Historial de visitas</h4>
            <table>
                <tr>
                    <td>Dia Revision</td>
                    <td>Comentarios</td>
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($columna = mysqli_fetch_array($result)) {
                        echo ('<tr>');
                        echo ('<td>' . $columna["fecha"] . '</td>');
                        echo ('<td>' . $columna["comentario"] . '</td>');
                        echo ('</tr>');
                    }
                } else {
                    echo ("Ninguna visita registrada");
                }
                ?>
        </div>
        <div class="foto">
            <div class="formulario">
                <form action="historial.php" method="get">
                    <label for="nombreMascota">Nombre Mascota</label>
                    <input type="text" name="nombreMascota" id="nombreMascota">
                    <button type="submit">Ver Historiales</button>
                </form>
                <div class="formulario">
                    <a href="guardar.php">Cargar una Mascota</a>
                </div>
                <div class="formulario">
                    <a href="menu.php">Volver</a>
                </div>
            </div>
        </div>
</body>

</html>