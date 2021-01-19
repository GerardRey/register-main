<?php

require("./../../../comprovacion/compro_logeado_u.php");

$nombre_tabla = "carrito_".$_SESSION['nick'];
$instruccion = "TRUNCATE TABLE $nombre_tabla";
$res = mysqli_query($con, $instruccion);


if (!$res) {

    die("Error en eliminar los datos");

} else {

    echo "<script type='text/JavaScript'>  
    alert('Se a finalizado el pedido'); 	
    window.location.replace('./../tienda.php')
    </script>";

}

?>