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
                    <a class="navbar-brand" class="nav-link" href="#" >Panel Usuario</a>
                    <a class="navbar-brand" class="nav-link" href="./../personajes/personajes.php" >Panel Personajes</a>
                    <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <br>

    <div class="mx-5">

    <div class="row">

        <?php

            echo "<div class='table-responsive tabla'>";

                echo "<table class='table table-striped bg-light'>";
                $instruccion = "SELECT * FROM usuarios";
                $resultado = mysqli_query($con, $instruccion);

                echo "<thead class='thead-light'>";

                    echo "<tr>";

                        echo "<th scope='col'> Nickname </th>";
                        echo "<th scope='col'> Nombre </th>";
                        echo "<th scope='col'> Apellido </th>";
                        echo "<th scope='col'> Edad </th>";
                        echo "<th scope='col'> Correo </th>";
                        echo "<th scope='col'> Modificar </th>";
                        echo "<th scope='col'> Eliminar </th>";

                    echo "</tr>";

                echo "</thead>";

                while ($fila = $resultado->fetch_assoc()) {

                    $nick = $fila["nick"];
                    $nombre = $fila["nombre"];
                    $apellidos = $fila["apellido"];
                    $edad = $fila["edad"];
                    $correo = $fila["mail"];

                    echo "<tr >";

                        echo "<td>" . $nick . "</td>";
                        echo "<td>" . $nombre . "</td>";
                        echo "<td>" . $apellidos . "</td>";
                        echo "<td>" . $edad . "</td>";
                        echo "<td>" . $correo . "</td>";
                        echo "<td><a class='bi bi bi-pencil' href='./modificar/modificar-usuario.php?nick=$nick'></a></td>";
                        echo "<td><a class='bi bi-trash' href='./eliminar/eliminar-usuario.php?nick=$nick'></a></td>";
                        
                    echo "</tr>";
                    
                }

                echo "</table>";

            echo "</div>";

            ?>

		<div class=" btn btn-lg btn-block">

            <a class="btn btn-info container" href="./alta/alta-usuario.php" type="button">Registrar un usuario</a>

		</div>

    </div>
    </div>

</body>

</html>