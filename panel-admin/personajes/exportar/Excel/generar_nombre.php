<?php

require("./../../../../comprovacion/compro_logeado_a.php");

 // realizamos la conexión

 echo "<table border='1' width='25%'>";

 $instruccion = "SELECT nombre FROM personajes WHERE 1";
 $resultado = mysqli_query($con, $instruccion);

 echo "<tr>";
 echo "<th> Nombre </th>";
 echo "</tr>";

 while ($fila = $resultado->fetch_assoc()) {
     $nombre = $fila["nombre"];
     echo "<tr>";
     echo "<td>" . $nombre . "</td>";
     echo "</tr>";
 }

 echo "</table>";

 header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
 header('Content-disposition: attachment; filename=nombre-personajes.xls');
            
            

?>