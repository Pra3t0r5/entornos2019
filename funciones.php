<?php
function consultaSql($sql, $limite = null, $nombre)
{
    $enlace = mysqli_connect("localhost", "root", "pass", "nombreDB");
    if (!empty($nombre))
        $sql .= "WHERE nombre LIKE '%" . $nombre . "%' ";


    if (!empty($limite) and is_numeric($limite)) {
        //AND espera a que se ejecute todo para evaluar, && sale al primer incumplimiento
        // $sql = $sql."LIMIT ".$limite;
        $sql .= "LIMIT " . $limite;
    }

    $respuesta = mysqli_query($enlace, $sql);
    mysqli_close($enlace);
    return $respuesta;
}

$a = 4;

//consultaSql("SELECT * FROM usuarios");
consultaSql("SELECT * FROM usuarios", 20);
?>