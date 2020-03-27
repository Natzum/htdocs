<?php
$url = "sobre-mi"; 


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
    <title>Sobre mi</title>
</head>

<body>
	<header>
		<?php include_once("menu.php");?>
	</header>
	<section class="sobre-mi" id="sobre-mi">
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-7 col-12">
					<h1>Sobre mí</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis nisi nec diam tristique maximus. Nam rutrum nec nunc mollis dapibus. Vestibulum sagittis, nisl elementum consectetur cursus.</p>
					<a href="curriculum.pdf" class="btn btn-md" target="_blank">Descargar CV</a>
				</div>
				<div class="col-sm-3 col-9 mx-5">
					<img src="images/foto.png" alt="Natalia FLores" title="Natalia Flores" class="img-fluid img-circle">
				</div>
			</div>
		</div>
	</section>
	<section class="cualidades" id="cualidades">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12 pr 4">
					<div class="bg-white p 16">
					<div class="col-sm-6 col-12" style="padding: 16px;" >	
					<i class="fas fa-code"></i></div>
					<h3>LENGUAJES DE PROGRAMACIÓN</h3>
					<h4>PHP, Laravel, HTML, CSS, Bootstrap,<br>Javascript, jQuery, React.js,<br>MySQL/MariaDB</h4>
				</div>
				</div>
				<div class="col-sm-6 col-12 pl 4">
					<div class="bg-white p 16">
					<div class="col-sm-6 col-12" style="padding: 16px;" >	
					<i class="fas fa-database"></i>	</div>
					<h3>BASE DE DATOS</h3>
					<h4>MySQL/MariaDB, MS SQL Server, PostgreSQL, LDAP, Mongo DB.<br> <br> </h4>
				</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col 12 pr 4" >
					<div class="bg-white">
					<div class="col-sm-6 col 12" style="padding: 16px;" >	
					<i class="fas fa-server"></i></div>
					<h3>SERVIDORES</h3>
					<h4>VMware ESXi 6.5, HTTP Apache, Bind9, ProFTPd, IIS, XAMPP, SSL certbot, migraciones y upgrades.</h4>
				</div>
				</div>
				<div class="col-sm-6 col 12 pl 4">
					<div class="bg-white">
					<div class="col-sm-6 col 12" style="padding: 16px;" >	
					<i class="fas fa-language"></i></div>
					<h3>IDIOMAS</h3>
					<h4>INGLES - Intermediate B2<br>ESPAÑOL - Nativo<br>FRANCÉS - Avanzado</h4>
				</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="padding-bottom: 40px;">
				<div class="col-sm-6 col 12 pr 4">
					<div class="bg-white">
					<div class="col-sm-6 col 12" style="padding: 16px;" >	
					<i class="fas fa-window-restore"></i></div>	
					<h3>SOFTWARE</h3>
					<h4>GIT, GitHub, Visual Code, Sublime, WinSCP/Filezilla, SSH Putty, Navicat, MySQL Workbench, Heidi SQL, Adobe Illustrator, Balsamiq mockups, MS Office, Google Docs. Redmine, MS Project, Trello. MS Windows, Debian GNU/Linux y macOS.</h4>
				</div>
				</div>
				<div class="col-sm-6 col 12 pl 4">
					<div class="bg-white">
					<div class="col-sm-6 col 12" style="padding: 16px;" >	
					<i class="fas fa-puzzle-piece"></i></div>	
					<h3>HOBBIES</h3>
					<h4>CROSSFIT, SWING DANCE, MUSICA, FOTOGRAFIA<br> <br> <br> <br> <br> <br> </h4>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="experiencia" id="experiencia">
		<div class="container-fluid " style="background-color: #2d2d2d; padding-top: 50px; padding-bottom: 50px; padding-left: 40px; padding-right: 10px;">
			<div class="container">
				<div class="row">
				<div class="col-12">
					<h2 >Experiencia laboral</h2>
				</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-2" >
						<h3>2017-Presente</h3>
					</div>
					<div class="col-12 col-sm-2" >
						<h3>Clases canto</h3>
					</div>
					<div class="col-12 col-sm-8" >
						<h3 >-Educación auditiva, postural, técnica.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-2" >
						<h3>2013-2016</h3>
					</div>
					<div class="col-12 col-sm-2">
						<h3>BUGALLO EXPRESS</h3>
					</div>
					<div class="col-12 col-sm-8" >
						<h3 >-Fotógrafa, edición foto & video. Digitalización.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-2" >
						<h3>2010-2011</h3>
					</div>
					<div class="col-12 col-sm-2" >
						<h3>Kiosco "SANTINO"</h3>
					</div>
					<div class="col-12 col-sm-8" >
						<h3 >-Atención al cliente, cajera.</h3>
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