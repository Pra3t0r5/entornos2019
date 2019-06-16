<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="periodico.css">
    <title>Periodico</title>

    <?php if (!isset($_COOKIE['idTitularSeleccionado'])) {
        $mostrarTitularID = 0;
    } else {
        $mostrarTitularID = $_COOKIE['idTitularSeleccionado'];
    }
    if (!isset($_GET['filtro'])) {
        setcookie($_COOKIE['idTitularSeleccionado'] = 0);
    } else {
        if (condition) {
            setcookie($_COOKIE['idTitularSeleccionado'] = $_GET['politica']);
        }
        if (condition) {
            setcookie($_COOKIE['idTitularSeleccionado'] = $_GET['economia']);
        }
        if (condition) {
            setcookie($_COOKIE['idTitularSeleccionado'] = $_GET['deportes']);
        }
    }
    ?>
</head>

<body>
    <div class="container filter">
        <h2>Filtro</h2>
        <form name="filtro" action="" method="get">
            <label for="politica">Politica</label>
            <input type="radio" name="politica" id="1" value="1">
            <label for="economia">Economia</label>
            <input type="radio" name="economia" id="2" value="2">
            <label for="deportes">Deportes</label>
            <input type="radio" name="deportes" id="3" value="3">
            <input type="submit" value="Filtrar">
        </form>
    </div>

    <?php if ($mostrarTitularID != 0) {
        # mostrar elegido
    } else {
        # mostrar todo
    }
    ?>
    <!--mostrar en base a la cookie seteada por el form-->
    <div class="container content">
        <h2 class="title">Noticias</h2>
        <div>
            <h3>Politica</h3>
        </div>
        <div>
            <h3>Economia</h3>
        </div>
        <div>
            <h3>Deportes</h3>
        </div>
    </div>
</body>

</html>