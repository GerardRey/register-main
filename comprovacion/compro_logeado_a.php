<?php

session_start();

    $servidor="localhost";
	$usuario_bd="root";
	$contrasena="";
	$bd="tienda";

    //Realizamos la conexión
	$con=mysqli_connect($servidor,$usuario_bd,$contrasena,$bd);
	
	if (!$con) {
		
		die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
		
	} else {
		
		mysqli_set_charset ($con, "utf8");
		//echo "Se ha conectado a la base de datos" . "<br>";
		
	}

	$nickname=$_SESSION["nick"];

	$instruccion = "SELECT admin FROM usuarios WHERE nick = '$nickname'";
	$resultado = mysqli_query($con, $instruccion);

    // Comprovacion si el usuario esta logeado
    
    $tipo = $resultado->fetch_assoc();

    if (isset($_SESSION['nick']) && $tipo['admin'] == 1) {

		$nickname=$_SESSION["nick"];

    } else {

        echo '<script type="text/JavaScript">  
			 alert("No estas logeado como admin");
			 window.location.replace("/php/tienda/log-register/login.html");
		 </script>';

        die();

    }