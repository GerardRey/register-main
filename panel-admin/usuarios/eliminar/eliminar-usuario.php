<?php

require("./../../../comprovacion/compro_logeado_a.php");

$instruccion = "delete from usuarios where nick = '$_GET[nick]'";
$res = mysqli_query($con, $instruccion);


if (!$res) {

    die("Error en eliminar los datos");

} else {

    echo "<script type='text/JavaScript'>  
    alert('Se a eliminado el usuario correctamente'); 	
    window.location.replace('./../usuarios.php')
    </script>";

}

?>