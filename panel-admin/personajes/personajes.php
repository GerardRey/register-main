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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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

    <br>

    <div class="row mx-5">

        <div>

            <div class='col container mx-5'>

                <div class='input-group mb-3'>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Generar Excel
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="./exportar/Excel/generar_nombre.php">Nombre</a>
                            <a class="dropdown-item" href="./exportar/Excel/generar_combo.php">Combo</a>
                            <a class="dropdown-item" href="./exportar/Excel/generar_origen.php">Origen</a>
                            <a class="dropdown-item" href="./exportar/Excel/generar_precio.php">Precio</a>
                            <a class="dropdown-item" href="./exportar/Excel/generar_todo.php">Todo</a>
                        </div>
                    </div>

            </div>

        </div>

        </div>

        <div>

        <div class='col container mx-5'>


					<div class='input-group mb-3'>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Generar XML
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="./exportar/XML/generar_nombre.php">Nombre</a>
                            <a class="dropdown-item" href="./exportar/XML/generar_combo.php">Combo</a>
                            <a class="dropdown-item" href="./exportar/XML/generar_origen.php">Origen</a>
                            <a class="dropdown-item" href="./exportar/XML/generar_precio.php">Precio</a>
                            <a class="dropdown-item" href="./exportar/XML/generar_todo.php">Todo</a>
                        </div>
                    </div>

				</div>

			</div>

        </div>
        </div>

        <div class="mx-5">

<div class="row">

    <?php

        echo "<div class='table-responsive tabla'>";

            echo "<table class='table table-striped bg-light'>";
            $instruccion = "SELECT * FROM personajes";
            $resultado = mysqli_query($con, $instruccion);

            echo "<thead class='thead-light'>";

                echo "<tr>";

                    echo "<th scope='col'> Id </th>";
                    echo "<th scope='col'> Nombre </th>";
                    echo "<th scope='col'> Combo </th>";
                    echo "<th scope='col'> Origen </th>";
                    echo "<th scope='col'> Precio </th>";
                    echo "<th scope='col'> Modificar </th>";
                    echo "<th scope='col'> Eliminar </th>";

                echo "</tr>";

            echo "</thead>";

            while ($fila = $resultado->fetch_assoc()) {

                $id = $fila["id"];
                $nombre = $fila["nombre"];
                $combo = $fila["combo"];
                $origen = $fila["origen"];
                $precio = $fila["precio"];

                echo "<tr >";

                    echo "<td>" . $id . "</td>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $combo . "</td>";
                    echo "<td>" . $origen . "</td>";
                    echo "<td>" . $precio . "</td>";
                    echo "<td><a class='bi bi bi-pencil' href='./modificar/modificar-personaje.php?id=$id'></a></td>";
                    echo "<td><a class='bi bi-trash' href='./eliminar/eliminar-personaje.php?id=$id'></a></td>";
                    
                echo "</tr>";
                
            }

            echo "</table>";

        echo "</div>";

        ?>

    <div class=" btn btn-lg btn-block">

        <a class="btn btn-info container" href="./alta/alta-personajes.php" type="button">Registrar un personajes</a>

    </div>

</div>

    </div>

</body>