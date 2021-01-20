<?php

require("./../comprovacion/compro_logeado_u.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./../alertaout.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Panel Usuari</title>
    </head>
    <header>

    </header>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" class="nav-link" href="./tienda/tienda.php?ordenar=id" >Tienda</a>
                        <a class="navbar-brand" class="nav-link" href="./tienda/carrito/carrito.php" >Carrito</a>
                        <a class="navbar-brand" class="nav-link" href="./perfil/perfil.php" >Perfil</a>
                        <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row mt-4">
            <div class="col text-white">
                <a href="./tienda/tienda.php?ordenar=id"><img id="imagen" src="./tienda.png" alt="imagen tienda"></a>
            </div>
            <div class="col text-white">
                <p>Haz click en la imagen para poder ir a la pagina donde esta toda la tienda y comprar tus campeones. </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laborum nihil nisi ex earum, totam quibusdam ipsam mollitia illum perferendis fugiat modi voluptatibus dignissimos voluptas eos omnis quia fugit doloribus adipisci amet architecto voluptate quas doloremque beatae.</p>
            </div>
            </div>
            <div class="row mt-4">
                <div class="col text-white">
                    <p>Haz click en la imagen para poder ir a la pagina donde se listan el carrito. </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laborum nihil nisi ex earum, totam quibusdam ipsam mollitia illum perferendis fugiat modi voluptatibus dignissimos voluptas eos omnis quia fugit doloribus adipisci amet architecto voluptate quas doloremque beatae.</p>
                </div>
                <div class="col text-white">
                    <a href="./tienda/carrito/carrito.php"><img id="imagen" src="./carrito.png" alt="imagen carrito"></a>
                </div>
            </div>
            <div class="row mt-4">
            <div class="col text-white">
                <a href="./perfil/perfil.php"><img id="imagen" src="./User_icon_2.svg.png" alt="imagen eventos"></a>
            </div>
            <div class="col text-white">
                <p>Haz click en la imagen para poder ir a la pagina donde puedes modificar los datos de tu cuenta. </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laborum nihil nisi ex earum, totam quibusdam ipsam mollitia illum perferendis fugiat modi voluptatibus dignissimos voluptas eos omnis quia fugit doloribus adipisci amet architecto voluptate quas doloremque beatae.</p>
            </div>
            </div>
        </div>

    </body>
</html>