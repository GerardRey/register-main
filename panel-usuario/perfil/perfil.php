<?php

require("./../../comprovacion/compro_logeado_u.php");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./../../alertaout.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Panel Usuari</title>
    </head>
    <header>

    </header>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./../usuario.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" class="nav-link" href="./../tienda/tienda.php?ordenar=id" >Tienda</a>
                        <a class="navbar-brand" class="nav-link" href="./../tienda/carrito/carrito.php" >Carrito</a>
                        <a class="navbar-brand" class="nav-link" href="#" >Perfil</a>
                        <a class="navbar-brand" class="nav-link" type="button" onclick="logout()">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php 
	
	$instruccion = "select * from usuarios where nick = '$_SESSION[nick]'";
	$res = mysqli_query($con, $instruccion);
	$datos = mysqli_fetch_assoc($res);

?>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card card-body">
					<h3 class="text-center mb-4">Modificación tu cuenta <?php echo $_SESSION['nick'] ?></h3>
					<form action="general.php?nick=<?php echo $_SESSION['nick'] ?>" method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="nick" placeholder="nick" disabled value="<?php echo $datos['nick'] ?>" />
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
						<p><button class="btn btn-primary btn-block" type="submit"><b>Modificar</b></button> 
					</form>
					
				</div>
			</div>
		</div>
    </div>
    <br>
    <br>

    </body>
</html>