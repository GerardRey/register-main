<?php

class Alta_ok
{

	//Parámetros que vienen del POST
	private $fallos = 0;
	private $nick = null;
	private $pass = null;
	private $dni = null;
	private $nombre = null;
	private $apellido = null;
	private $edad = null;
	private $mail = null;

	private $textoserr = null;

	public function getNick()
	{
		return $this->nick;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
	}

	public function getDni()
	{
		return $this->dni;
	}

	public function setDni($dni)
	{
		$this->dni = $dni;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getEdad()
	{
		return $this->edad;
	}

	public function setEdad($edad)
	{
		$this->edad = $edad;
	}

	public function getMail()
	{
		return $this->mail;
	}

	public function setMail($mail)
	{
		$this->mail = $mail;
	}

	public function validarNick($nick) {

		$this->nick = $nick;

		if (strlen($this->nick) > 20 || strlen($this->nick) < 2) {
			$this->textoserr = "Error Nickname: El limite es entre 2 y 20.\\n";

			$this->fallos++;
		}

	}

	public function validarPass($pass) {

		$this->pass = $pass;

		if (strlen($this->pass) > 15 || strlen($this->pass) < 3) {
			$this->textoserr = $this->textoserr . "Error Password: El limite es entre 3 y 15.\\n";

			$this->fallos++;
		}
	}

	public function validarDni($dni) {

		$this->dni = $dni;
		$letra = substr($this->dni, -1);
		$numeros = substr($this->dni, 0, -1);


		  
		if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) != $letra || strlen($letra) != 1 || strlen ($numeros) != 8 ) {
			
			$this->textoserr = $this->textoserr . "Error DNI: El Dni que se ha dado no es valido.\\n";
			
			$this->fallos++;

		}
	}

	public function validarNombre($nombre)
	{
		$this->nombre = $nombre;

		if (strlen($this->nombre) > 20 || strlen($this->nombre) < 2 ) {
			$this->textoserr = $this->textoserr . "Error Nombre: El limite es entre 2 y 20.\\n";
			
			$this->fallos++;

		} 

	}

	public function validarApellidos($apellido) {

		$this->apellido = $apellido;

		if (strlen($this->apellido) > 30 || strlen($this->apellido) < 2) {
			$this->textoserr = $this->textoserr . "Error Apellido: El limite es entre 2 y 30.\\n";

			$this->fallos++;
		}
	}

	public function validarEdad($edad) {

		$this->edad = $edad;

		if ($this->edad < 18 || $this->edad > 99) {

			$this->textoserr = $this->textoserr . "Edad erronea tiene que ser entre 18 y 99 ";

			$this->fallos++;
		}
	}

	public function validarMail($mail) {
		
		$this->mail = $mail;

	}

	public function fallos() {
		
		if ($this->fallos != 0) {
			$this->jscript();
		}

	}

	public function jscript() {
		echo "<script type='text/JavaScript'>  
			 alert('$this->textoserr');
			 window.location.replace('./alta-usuario.php);
		 </script>";
		die;
	}
	
	public function insertsql()
	{

		$this->pass = password_hash($this->pass, PASSWORD_DEFAULT);

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

		$instruccion = "select count(*) as cuantos from usuarios where nick = '$this->nick'";
		$res = mysqli_query($con, $instruccion);
		$datos = mysqli_fetch_assoc($res);

		if ($datos['cuantos'] == 0){
	
		$consulta = mysqli_query($con, "insert into usuarios values ('$this->nick','$this->pass','$this->dni','$this->nombre','$this->apellido','$this->edad','$this->mail',0)");

			if (!$consulta) {
				die("Error en introduccir los datos");
			} else {
				echo "<script type='text/JavaScript'>  
				alert('Se a realizado correctamente el Registro'); 
				
				window.location.replace('./../usuarios.php')
				</script>";
			}
		}
		else {
			echo "<script type='text/JavaScript'>  
			alert('El nick $this->nick no está disponible'); 
			
			window.location.replace('./alta-usuario.php')
			</script>";

		}
}

	
}


?>