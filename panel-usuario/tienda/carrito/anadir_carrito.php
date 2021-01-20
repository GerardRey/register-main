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
        $resultado1 = mysqli_query($con, "select count(*) as cuantos from $nombre_tabla where id_personaje = '$id'");
        $datos2 = mysqli_fetch_assoc($resultado1);
        if(!$resultado1) {
            die("Error en introduccir los datos2");
        } else {
            if($datos2['cuantos'] == 0) {

                $resultado = mysqli_query($con, "insert into $nombre_tabla values(NULL,'$id',1,'$datos[nombre]','$datos[precio]')");
    
                if(!$resultado) {
                    die("Error en introduccir los datos3");
                } else {
                    echo "<script type='text/JavaScript'>  
                            alert('Se a añadido el articulo al Carrito'); 
                        
                            window.location.replace('./../tienda.php?ordenar=id')
                            </script>";
                }
    
            } else {

                $resultado = mysqli_query($con, "UPDATE $nombre_tabla SET cantidad = cantidad+1 WHERE id_personaje = $id");

                if(!$resultado) {
                    die("Error en introduccir los datos4");
                } else {
                    echo "<script type='text/JavaScript'>  
                            alert('Se a añadido el articulo al Carrito'); 
                        
                            window.location.replace('./../tienda.php?ordenar=id')
                            </script>";
                }
    
            }
        }
        
    }

    
?>