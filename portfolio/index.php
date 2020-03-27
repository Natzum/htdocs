<?php
$url = "index"; 


?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="ha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script> <!-- para el menu de navegacion -->
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
    <title>Index</title>
</head>
<style type="text/css">
	body {
	background-image: url('images/fondo.png');
	background-repeat: repeat;
    background-size: 110%;
    min-height: 550px;
	}
	@media (max-width: 700px) {
		body{
			background-image: url('images/fondo_2.png')!important;}
		h1{
			font-size: 40px;
		}	
	}
</style>
<body>
	<header>
		<?php include_once("menu.php");?>
	</header>
	
	<section class="index" id="index" style="padding-bottom: 200px; margin-top: 15px;">
		<div class="container">
			<div class="row">
				<div class="col-10">
					<h1>Hola! <br>Soy Natalia Flores</h1>
					<h2>Desarrolladora Full stack.</h2>
					<a href="proyectos.php" class="btn btn-md" target="_blank">Ver mis proyectos</a>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<?php include_once("footer.php");?>
	</footer>
</body>
</html>