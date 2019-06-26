<?php
session_start();
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
    <?php
    if (!isset($_SESSION['usuario'])) {
        echo ('<div class="contenedor bordeado">
    <div class="formulario bordeado">
        <h4>Nueva Mascota</h4>
        <form action="menu.php" method="post">
            <div class="input-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="input-group">
                <label for="raza">Raza</label>
                <input type="text" name="raza" id="raza">
            </div>
            <div class="input-group">
                <button name="guardar" type="submit">Guardar</button>
            </div>
        </form>
    </div>
    <div class="foto">
        <img src="perro.jpg" alt="">
    </div>
</div>');
    } else {
        echo ('Usted no puede estar aqui.');
    } ?>


</body>

</html>