<?php

require("./../../../../comprovacion/compro_logeado_a.php");

 // realizamos la conexión

 echo "<table border='1' width='25%'>";

 $instruccion = "SELECT combo FROM personajes WHERE 1";
 $resultado = mysqli_query($con, $instruccion);

 echo "<tr>";
 echo "<th> Combo </th>";
 echo "</tr>";

 while ($fila = $resultado->fetch_assoc()) {
     $combo = $fila["combo"];
     echo "<tr>";
     echo "<td>" . $combo . "</td>";
     echo "</tr>";
 }

 echo "</table>";

 header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
 header('Content-disposition: attachment; filename=combo-personajes.xls');
            
            

?>