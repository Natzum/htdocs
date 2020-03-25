<?php
$url = "contacto"; 


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
    <title>Contacto</title>
</head>
<body>
	<header>
	 	<?php include_once("menu.php");?>
		
	</header>
	<section id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-12 my-5">
				<h1>¡Trabajemos juntos!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<p>Para más detalles sobre mi trabajo podés ver mi <a href="https://www.linkedin.com/in/natalia-in%C3%A9s-flores-8a192b176/" target="blank">Linkedin</a>, <br>descargar mi<a href="curriculum.pdf" class="btn btn-md" target="_blank">CV</a> o mandarme <br>un mensaje.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-10">
				<form action="" method="POST">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<input type="text" name="form-control" id="nombre" placeholder="NOMBRE" required="nombre" size="42">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<input type="Email" name="form-control" id="txtEmail" placeholder="correo" required="Email" size="42">	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<input type="text" name="form-control" id="asunto" placeholder="asunto" size="90">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea name="form-control" id="mensaje" cols="91" rows="10" placeholder="mensaje" required="mensaje" ></textarea> 
							</div>
						</div>
					</div>	
					<div class="row">
						<div>									
               				<input type="submit" value="Enviar" id="btnEnviar" name="btnEnviar" class="boton"></input>
               			</div>																		
					</div>
				</form>
			</div>
	   </div>
	</div>	
	</section>
	<footer>
		<?php include_once("footer.php");?>
		
	</footer>
	
</body>
</html>