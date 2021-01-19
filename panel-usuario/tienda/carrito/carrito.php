<?php

require("./../../../comprovacion/compro_logeado_u.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./../../../alertaout.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <title>Panel Usuari</title>
    </head>
    <header>

    </header>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./../../usuario.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" class="nav-link" href="./../tienda.php" >Tienda</a>
                        <a class="navbar-brand" class="nav-link" href="#" >Carrito</a>
                        <a class="navbar-brand" class="nav-link" href="./../../perfil/perfil.php" >Perfil</a>
                        <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mx-5 mt-4">

        <div class="row">

<?php

    echo "<div class='table-responsive tabla'>";

        echo "<table class='table table-striped bg-light'>";
        $nombre_tabla = "carrito_".$_SESSION['nick'];
        $instruccion = "SELECT * FROM $nombre_tabla";
        $resultado = mysqli_query($con, $instruccion);

        echo "<thead class='thead-light'>";

            echo "<tr>";

                echo "<th scope='col'> Id </th>";
                echo "<th scope='col'> Nombre </th>";
                echo "<th scope='col'> Cantitat </th>";
                echo "<th scope='col'> Precio </th>";
                echo "<th scope='col'> Eliminar del Carrito </th>";

            echo "</tr>";

        echo "</thead>";

        while ($fila = $resultado->fetch_assoc()) {

            $id = $fila["id_fila"];
            $nombre = $fila["nombre"];
            $cantidad = $fila["cantidad"];
            $precio = $fila["precio"];

            echo "<tr >";

                echo "<td>" . $id . "</td>";
                echo "<td>" . $nombre . "</td>";
                echo "<td>" . $cantidad . "</td>";
                echo "<td>" . ($precio*$cantidad) . "</td>";
                echo "<td><a class='bi bi-bag-dash' href='./eliminar_carrito.php?id_fila=$id'></a></td>";
                
            echo "</tr>";
            
        }

        echo "</table>";

    echo "</div>";

    ?>


    <div class=" btn btn-lg btn-block">

    <a class="btn btn-info container" href="./finalizar.php" type="button">Finalizar pedido</a>

    </div>
    </div>

        </body>
</html>