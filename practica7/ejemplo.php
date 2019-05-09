<?php session_start(); ?>
<?php
if (!empty($_GET["e"])) {
    if ($_GET["e"] == "azul")
        $_SESSION["estilo"] = "azul";
}
?>
<html>

<head>
    <?php
    if ($_SESSION["estilo"] == "azul")
        echo '<link ref="azul.css" bla />';
    elseif ($_SESSION["estilo"] == "rojo")
        echo '<link ref="rojo.css" blassd />';
    else
        echo 'link ref="generico.css" blaaasd />';
    ?>
</head>

<body>
    asdasdas
    qewqwer
    adfasfasf
    <a href='ejemplo.php?e=azul&m=Mensaje&variable2=valor4'>Cambiar a Azul</a>
    <a href='<?php echo $_SERVER['PHP_SELF']; ?>?e=azul&m=Mensaje&variable2=valor4'>Cambiar a Azul</a>
    <!-- otra forma -->
    <form action="" method="get">
        <input type="hidden" name="e" value="azul" />
        <input type="submit" value="Cambiar a azul" />
    </form>

    <a href="?e=rojo">Rojo</a> <!-- va al archivo actual con esta ruta -->
    <a href="?e=g">Generico</a>

    <?php
    echo "el usuario utiliza:" . $_SERVER['HTTP_USER_AGENT'];
    print_r($_SERVER); #muestra info de server
    #hay una superglobal que muestra de que pagina venis
    ?>

</body>

</html>