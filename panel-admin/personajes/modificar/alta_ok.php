<?php

class Alta_ok
{

	//Parámetros que vienen del POST
	private $fallos = 0;
	private $nombre = null;
	private $combo = null;
	private $origen = null;

	private $textoserr = null;

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getCombo()
	{
		return $this->combo;
	}

	public function setCombo($combo)
	{
		$this->combo = $combo;
	}

	public function getOrigen()
	{
		return $this->origen;
	}

	public function setOrigen($origen)
	{
		$this->origen = $origen;
	}

	public function validarNombre($nombre)
	{
		$this->nombre = $nombre;

		if (strlen($this->nombre) > 20 || strlen($this->nombre) < 2 ) {
			$this->textoserr = $this->textoserr . "Error Nombre: El limite es entre 2 y 20.\\n";
			
			$this->fallos++;

		} 

	}

	public function validarCombo($combo) {

		$this->combo = $combo;

		if (strlen($this->combo) > 20 || strlen($this->combo) < 2 ) {
			$this->textoserr = $this->textoserr . "Error Combo: El limite es entre 2 y 20.\\n";
			
			$this->fallos++;

		} 
	}

	public function validarOrigen($origen) {

		$this->origen = $origen;

		if (strlen($this->origen) > 20 || strlen($this->origen) < 2 ) {
			$this->textoserr = $this->textoserr . "Error Origen: El limite es entre 2 y 20.\\n";
			
			$this->fallos++;

		} 
	}

	public function fallos() {
		
		if ($this->fallos != 0) {
			$this->jscript();
		}

	}

	public function jscript() {
		echo "<script type='text/JavaScript'>  
			 alert('$this->textoserr');
			 window.location.replace('./../personajes.php);
		 </script>";
		die;
	}
	
	public function insertsql($id)
	{

		//Parámetros de conexión
		$servidor = "localhost";
		$usuario = "root";
		$contraseña = "";
		$bd = "tienda";

		//realizamos la conexión
		$con = mysqli_connect($servidor, $usuario, $contraseña, $bd);
		if (!$con) {
			die("Con se ha podido realizar la conexión: " . mysqli_connect_error() . "<br>");
		} else {
			mysqli_set_charset($con, "utf8");
			//echo "Felicidades ".$this->nombre."! te has conectado a la BD <br>";
			$_SESSION["con"] = $con;
		}
		/////
	
		$consulta = mysqli_query($con, "UPDATE personajes SET nombre = '$this->nombre', combo = '$this->combo', origen = '$this->origen' where id = '$id'");

			if (!$consulta) {
				die("Error en introduccir los datos");
			} else {
				echo "<script type='text/JavaScript'>  
				alert('Se a realizado correctamente el Registro'); 
				
				window.location.replace('./../personajes.php')
				</script>";
			}
		}
}


?>