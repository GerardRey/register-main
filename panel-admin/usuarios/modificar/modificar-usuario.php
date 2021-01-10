<?php

require("./../../../comprovacion/compro_logeado_a.php");

?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="./../../../alertaout.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<header>

</header>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./../../admin.php">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" class="nav-link" href="./../usuarios.php" >Panel Usuario</a>
                    <a class="navbar-brand" class="nav-link" href="./../../personajes/personajes.php" >Panel Personajes</a>
                    <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

	<?php 
	
		$instruccion = "select * from usuarios where nick = '$_GET[nick]'";
		$res = mysqli_query($con, $instruccion);
		$datos = mysqli_fetch_assoc($res);
	
	?>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card card-body">
					<h3 class="text-center mb-4">Modificar Usuario</h3>
					<form action="general.php?nick=<?php echo $_GET['nick'] ?>" method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="nick" placeholder="nick" value="<?php echo $datos['nick'] ?>" />
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Contraseña" name="pass" value=""
								type="password">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="dni" placeholder="DNI" value="<?php echo $datos['dni'] ?>">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Nombre" type="text" name="nombre" value="<?php echo $datos['nombre'] ?>" />
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="apellido" placeholder="Apellidos" value="<?php echo $datos['apellido'] ?>" />
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Edad" type="number" name="edad" max="99" min="18" value="<?php echo $datos['edad'] ?>" />
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="mail" type="email" value="<?php echo $datos['mail'] ?>">
						</div>
						<p><button class="btn btn-primary btn-block" type="submit"><b>Modificar el Usuario</b></button> 
					</form>
					
				</div>
			</div>
		</div>
    </div>
    <br>
    <br>
</body>

</html>