<?php
session_start();
session_destroy();
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
            <h4>Ingresar</h4>
            <form action="menu.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="input-group">
                    <button name="login" type="submit">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="foto">
            <img src="login.png" alt="">
        </div>
    </div>
</body>

</html>