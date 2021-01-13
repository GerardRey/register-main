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

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card card-body">
					<h3 class="text-center mb-4">Alta Personaje</h3>
					<form action="general.php" method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="nombre" placeholder="Nombre" />
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Combo" name="combo" value=""
								type="text">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="origen" placeholder="Origen">
						</div>
						<p><button class="btn btn-primary btn-block" type="submit"><b>Dar de alta al Personaje</b></button> 
					</form>
					
				</div>
			</div>
		</div>
    </div>
    <br>
    <br>
</body>

</html>