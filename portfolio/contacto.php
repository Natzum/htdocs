<?php
$url = "contacto"; 
include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");
if($_POST){ /* es postback */
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if($nombre != "" && $correo != ""){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com"; // SMTP a utilizar
        $mail->Username = "natalia.i.flores@gmail.com"; // Correo completo a utilizar
        $mail->Password = "siempre1vegan";
        $mail->Port = 465;
        $mail->From = "natalia.i.flores@gmail.com"; //Desde la cuenta donde enviamos
        $mail->FromName = "Natalia Flores";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        //Destinatarios
        $mail->addAddress($correo);
        $mail->addBCC("natalia.i.flores@gmail.com"); //Copia oculta
        $mail->Subject = utf8_decode("Contacto página Web");
        $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
        if(!$mail->Send()){
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Envía ahora un correo a nosotros con los datos de la persona
        $mail->addAddress("natalia.i.flores@gmail.com");
        $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
        $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
       
        if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
            header('Location: envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }    
    } else {
        $msg = "Complete todos los campos";
    }

}

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
<form action="" method="POST"> 	
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
								<input type="text" name="txtNombre" id="nombre" placeholder="NOMBRE" required="nombre" size="42">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<input type="Email" name="txtCorreo" id="mail" placeholder="correo" required="Email" size="42">	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<input type="text" name="txtAsunto" id="asunto" placeholder="asunto" size="90">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea name="txtMensaje" id="mensaje" cols="91" rows="10" placeholder="mensaje" required="mensaje" ></textarea> 
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
</form>	
</body>
</html>