<?php

$s = "";
if (!empty($_GET["s"])) {
    $s = (string)$_GET["s"]; //$_GET es una de varias variables globales
}

include "funciones.php"; //inlcude_once se asegura que al incluir no se este incluyendo algo ya incluido (dat defineiyon)
echo "$a";
?>

<form action="" method="GET">
    <input type="text" name="nombre" value="<?php echo $s; ?>" required />
    <input type="submit" value="Buscar" />
</form>

<?php

$usuarios = consultaSql("SELECT * FROM usuarios", 20, $s);
if (!empty($usuarios) && mysqli_num_rows($usuarios) > 0) {
    echo "<table>";
    echo "<tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td> - </td>
        </tr>
        ";
    while ($usuario = mysqli_fetch_array($usuarios)) {
        echo "<tr>
            <td>" . $usuario['apellido'] . "</td>
            <td>" . $usuario['apellido'] . "</td>
            <td><a href=eliminar.php?id=" . $usuario['id'] . "'Eliminar</a> </td>
        </tr>
        ";
    }
    echo "</table>";
}
?>