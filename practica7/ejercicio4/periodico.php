<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="periodico.css">
    <title>Periodico</title>

    <?php if (!isset($_COOKIE['idTitularSeleccionado'])) {
        $mostrarTitularID = "0";
    } else {
        $mostrarTitularID = $_COOKIE['idTitularSeleccionado'];
    }
    if (isset($_GET['filtro'])) {
        setcookie('idTitularSeleccionado', $_GET['categoria']);
    }
    ?>
</head>

<body>
    <div class="container title">
        <h1>Periodico</h1>
    </div>
    <div class="container">
        <div class="filter">
            <h2>Filtro</h2>
            <form  action="" method="GET">
                <label for="categoria"><strong>Categoria:</strong> </label> <br>
                <input type="radio" name="categoria" id="1" value="1">Politica <br>
                <input type="radio" name="categoria" id="2" value="2">Economia <br>
                <input type="radio" name="categoria" id="3" value="3">Deportes <br>
                <input type="submit" name="filtro">
            </form>
        </div>

        <div class="content">
            <h2 class="">Noticias</h2>
            <?php switch ($mostrarTitularID) {
                case "1":
                    echo ("<div id='1'><h3>Politica</h3><p>kajsdfhkjsdhfkasdhfkjsfdhkjsagfkljasdglkjfasfasfasjfasgfkjasgfagsfjas</p></div>");
                    break;
                case "2":
                    echo ("<div id='2'><h3>Economia</h3><p>128748912364892176498127648712648921648917264192846826482164782163478126498</p></div>");
                    break;
                case "3":
                    echo ("<div id='3'><h3>Deportes</h3><p>j1hg4jh23g4hj12gk12hj4gjh12g4hj12g4hj23g4h24jk12g4jhg12j4gh122g4hj</p></div>");
                    break;
                default:
                    echo ("<div id='1'><h3>Politica</h3></div>
                        <div id='2'><h3>Economia</h3></div>
                        <div id='3'><h3>Deportes</h3></div>");
                    break;
            }
            ?>
        </div>
    </div>
    <!--mostrar en base a la cookie seteada por el form-->



</body>

</html>