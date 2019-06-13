<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador</title>

    <?php
    if (!isset($_COOKIE['contador'])) {
        $count = 1;
        setcookie('contador', $count);
    } else {
        $count = ++$_COOKIE['contador'];
        setcookie('contador', $count);
    }
    ?>
</head>

<body>

    <?php if ($_COOKIE['contador'] != 0) {
        echo ('<h1>cantidad de ingresos: ' . $_COOKIE['contador'] . '</h1>');
    } else {
        echo ('<h1>bienvenido a la pagina contador!');
    }
    ?>
    Cantidad de visitas <?= $_COOKIE['contador'] ?>

</body>

</html>