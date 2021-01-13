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

	// Comprovacion si el usuario esta logeado

    if (isset($_SESSION['nick'])) {

		$nickname=$_SESSION["nick"];

    } else {

        echo '<script type="text/JavaScript">  
			 alert("No estas logeado");
			 window.location.replace("/tienda/log-register/login.html");
		 </script>';

        die();

    }