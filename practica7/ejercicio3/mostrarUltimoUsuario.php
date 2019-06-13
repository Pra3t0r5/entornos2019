<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimo Usuario</title>

    <?php
    if (!isset($_COOKIE['nombreUltimoUsuario'])) {
        $nombreUltimoUsuario = 'Nadie';
    } else {
        $nombreUltimoUsuario = $_COOKIE['nombreUltimoUsuario'];
    }
    if (!isset($_COOKIE['color'])) {
        $color = '#ffffff';
    } else {
        $color = $_COOKIE['color'];
    }

    if (isset($_POST['registrarUltimoUsuario'])) {
        $nombreUltimoUsuario = (empty($_POST['nombreUsuario'])) ? $nombreUltimoUsuario : $_POST['nombreUsuario'];
        $color = (empty($_POST['color'])) ? $color : $_POST['color'];
        setcookie('nombreUltimoUsuario', $nombreUltimoUsuario, time() + 10);
        setcookie('color', $color, time() + 10);
    }
    ?>
</head>

<body <?php echo (' style="background-color: ' . $color . ';"') ?>>
    <div style="text-align: center; margin-top: 300px;">
        <h3><i style="color: blue;"><?= $nombreUltimoUsuario ?></i> accedio en los ultimos 10 segundos.</h3>
        <form action="" method="post">
            <label for="nombreUsuario">Nombre de Usuario</label>
            <input type="text" name="nombreUsuario" id="nombreUsuario" autofocus>
            <input type="color" name="color" id="color" value="#ffffff" required>
            <input type="submit" name="registrarUltimoUsuario">
        </form>
    </div>
</body>

</html>