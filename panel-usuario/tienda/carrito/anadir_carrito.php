<?php

    require("./../../../comprovacion/compro_logeado_u.php");

    $id = $_GET['id'];

    $instruccion = "select * from personajes where id = '$id'";
    $res = mysqli_query($con, $instruccion);

    if (!$res) {
        die("Error en introduccir los datos1");
    } else {
        $datos = mysqli_fetch_assoc($res);
        $nombre_tabla = "carrito_".$_SESSION['nick'];
        $resultado = mysqli_query($con, "insert into $nombre_tabla values(NULL,'$id',1,'$datos[nombre]','$datos[precio]')");

        if(!$resultado) {
            die("Error en introduccir los datos2");
        } else {
            echo "<script type='text/JavaScript'>  
			        alert('Se a realizado correctamente el Registro'); 
				
					window.location.replace('./../tienda.php')
					</script>";
        }
    }

    
?>