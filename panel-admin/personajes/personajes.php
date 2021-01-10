<?php

require("./../../comprovacion/compro_logeado_a.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./../../alertaout.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Panel Admin</title>
</head>
<header>

</header>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./../admin.php">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" class="nav-link" href="./../usuarios/usuarios.php" >Panel Usuario</a>
                    <a class="navbar-brand" class="nav-link" href="#" >Panel Personajes</a>
                    <a class="navbar-brand" class="nav-link" onclick="logout()">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>