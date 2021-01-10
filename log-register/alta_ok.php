<?php

session_start();

$password = "";
$admin = 0;

//Parámetros de conexión
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "tienda";

$nick = $_POST["nick"];
$pass = $_POST["pass"];

$con = mysqli_connect($servidor, $usuario, $contraseña, $bd);
if (!$con) {
	die("Con se ha podido realizar la conexión: " . mysqli_connect_error() . "<br>");
} else {
	mysqli_set_charset($con, "utf8");
	echo "Se ha conectado a la base de datos" . "<br>";
}

$instruccion = "select count(*) as cuantos from usuarios where nick = '$nick'";
$resultado = mysqli_query($con, $instruccion);
while ($fila = $resultado->fetch_assoc()) {
	$numero = $fila["cuantos"];
}
if ($numero == 0) {
	echo "<script type='text/JavaScript'>  
			 alert('El usuario no existe');
			 window.location.replace('./login.html');
		 </script>";
} else {
	$instruccion = "select pass, admin from usuarios where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password = $fila["pass"];
		$admin = $fila["admin"];
	}

	/////////////////

	if (!password_verify($pass, $password)) {
		echo password_verify($pass, $password);
		echo "<script type='text/JavaScript'>  
			 alert('La contraseña es incorrecta');
			 window.location.replace('./login.html');
		 </script>";
	} else {

		$_SESSION["nick"] = $nick;

		if ($admin == 1) {

			header("Location: ./../panel-admin/admin.php");

		}
		else {

			header("Location: ./../panel-usuario/usuario.php");
			
		}

	}
}
?>