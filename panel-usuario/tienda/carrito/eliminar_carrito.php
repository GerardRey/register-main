<?php

require("./../../../comprovacion/compro_logeado_u.php");

$nombre_tabla = "carrito_".$_SESSION['nick'];
$instruccion = "delete from $nombre_tabla where id_fila = '$_GET[id_fila]'";
$res = mysqli_query($con, $instruccion);


if (!$res) {

    die("Error en eliminar los datos");

} else {

    echo "<script type='text/JavaScript'>  
    alert('Se a eliminado el personaje del carrito correctamente'); 	
    window.location.replace('./carrito.php')
    </script>";

}

?>