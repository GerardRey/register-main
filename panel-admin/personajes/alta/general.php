<?php

require_once("alta_ok.php");

$objUsuario = new Alta_ok;
$objUsuario->validarNombre($_POST["nombre"]);
$objUsuario->validarCombo($_POST["combo"]);
$objUsuario->validarOrigen($_POST["origen"]);
$objUsuario->fallos();
$objUsuario->insertsql();

?>