<?php

require("./../../comprovacion/compro_logeado_u.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./../../alertaout.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Panel Usuari</title>
    </head>
    <header>

    </header>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./../usuario.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" class="nav-link" href="./../tienda/tienda.php" >Tienda</a>
                        <a class="navbar-brand" class="nav-link" href="./../tienda/carrito/carrito.php" >Carrito</a>
                        <a class="navbar-brand" class="nav-link" href="#" >Perfil</a>
                        <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        </body>
</html>