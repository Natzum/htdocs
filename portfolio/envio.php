<?php


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
    <title>Index</title>
</head>
<style type="text/css">
	body {
	background-image: url('images/fondo.png');
	background-repeat: repeat;
    background-size: 110%;
    min-height: 550px;
	}
	h1{
		padding-top: 200px;
		padding-left: 100px;
	} 
	h2{
		padding-left: 150px;
	}
	@media (max-width: 700px) {
		body{
			background-image: url('images/fondo_2.png')!important;}
		h1{
			padding-top: 20px;
			padding-left: 10px;
		}
		h2{
			padding-left: 15px;
		}
	}
</style>
<body>
	<div class="container">
		<h1>Su consulta ha sido enviada</h1>
		<h2>Revise su correo electrónico</h2>
	</div>
	<form action="index.php"> s
	<div class="row">
        <div class="col-12">
            <input type="submit" value="Volver" class="btn btn-primary" style="position: fixed;bottom: 100px;right: 40px;" >
        </div>
    </div>
    </form>
</body>
</html>