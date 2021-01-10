<?php

require_once("alta_ok.php");



$objUsuario = new Alta_ok;
$objUsuario->validarNick($_POST["nick"]);
$objUsuario->validarPass($_POST["pass"]);
$objUsuario->validarDni($_POST["dni"]);
$objUsuario->validarNombre($_POST["nombre"]);
$objUsuario->validarApellidos($_POST["apellido"]);
$objUsuario->validarEdad($_POST["edad"]);
$objUsuario->validarMail($_POST["mail"]);
$objUsuario->fallos();
$objUsuario->insertsql($_GET["nick"]);

?>