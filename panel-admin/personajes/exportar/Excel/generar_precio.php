<?php

require("./../../../../comprovacion/compro_logeado_a.php");

 // realizamos la conexión

 echo "<table border='1' width='25%'>";

 $instruccion = "SELECT precio FROM personajes WHERE 1";
 $resultado = mysqli_query($con, $instruccion);

 echo "<tr>";
 echo "<th> Precio </th>";
 echo "</tr>";

 while ($fila = $resultado->fetch_assoc()) {
     $precio = $fila["precio"];
     echo "<tr>";
     echo "<td>" . $precio . "</td>";
     echo "</tr>";
 }

 echo "</table>";

 header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
 header('Content-disposition: attachment; filename=precio-personajes.xls');
            
            

?>