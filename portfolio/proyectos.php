<?php
$url = "proyectos"; 


?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script> <!-- para el menu de navegacion -->
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
    <title>Proyectos</title>
</head>
<body>
	<header>
	    <?php include_once("menu.php");?>
	</header>
	<section class="proyectos" id="proyectos">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-10">
					<h1>Mis Proyectos</h1>
					<h2>Estos son algunos de los trabajos que he realizado:</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-12 pr-sm-4 pb-sm-15 mt-4 mt-sm-0">
					<div class="bg-white">
					<img src="images/1.png" alt="ABM Ventas" class="img-fluid">
					<h3>ABM Clientes</h3>
					<p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
					<div class="container pb-sm-15">
						<div class="row justify-content-between mb-sm-15">
							<a href="ventas.php" class="btn btn-md mb-3 ml-3" target="_blank">Ver online</a>						
							<a href="https://github.com/Natzum/htdocs/blob/master/portfolio/ventas.php" class="btn" target="_blank">Código fuente</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-12 pl-sm-4 pb-sm-15 mt-4 mt-sm-0" >
					<div class="bg-white">
					<img src="images/2.png" alt="Sistema de gestion" class="img-fluid">
					<h3>ABM Ventas</h3>
					<p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
					<div class="container pb-sm-15">
						<div class="row justify-content-between mb-sm-30">
							<a href="#" class="btn btn-md mb-3 ml-3" target="_blank">Ver online</a>						
							<a href="#" class="btn" target="_blank">Código fuente</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-12 pl-sm-4 pb-sm-15 mt-4 mt-sm-0" >
					<div class="bg-white">
					<img src="images/3.png" alt="Sistema de gestion" class="img-fluid">
					<h3>Sistema de gestión</h3>
					<p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
					<div class="container pb-sm-15">
						<div class="row justify-content-between mb-sm-30">
							<a href="#" target="blank" class="btn btn-md mb-3 ml-3" >Ver online</a>						
							<a href="#" class="btn" target="blank">Código fuente</a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-12 pl-sm-4 pb-sm-15 mt-4 mt-sm-0" >
					<div class="bg-white">
					<img src="images/4.png" alt="Sistema de gestion" class="img-fluid">
					<h3>Login</h3>
					<p>Login, sesión, usuarios. <br> <br> <br> </p>
					<div class="container pb-sm-15">
						<div class="row justify-content-between mb-sm-30">
							<a href="../portfolio/login/login.php" target="blank" class="btn btn-md mb-3 ml-3" >Ver online</a>						
							<a href="https://github.com/Natzum/htdocs/tree/master/portfolio/login" class="btn" target="blank">Código fuente</a>
						</div>
					</div>
					</div>
				</div>
			</div>

		</div>	
	</section>
	<footer>
		<?php include_once("footer.php");?>
	</footer>
	
</body>
</html>