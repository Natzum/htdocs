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
        $mail->Host = "smtp.sendgrid.net"; // SMTP a utilizar
        $mail->SMTPSecure = 'tls';
        $mail->Username = "apikey"; // Correo completo a utilizar
        $mail->Password = "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";
        $mail->Port = 587;
        $mail->From = "info.nataliaflores@gmail.com";//Desde la cuenta donde enviamos
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
        $mail->addBCC("info.nataliaflores@gmail.com"); //Copia oculta
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="ha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
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
			<div class="col-sm-10 col-12">
				<p>Para más detalles sobre mi trabajo podés ver mi <a href="https://www.linkedin.com/in/natalia-in%C3%A9s-flores-8a192b176/" target="blank">Linkedin</a>, <br>descargar mi<a href="curriculum.pdf" class="btn btn-md" target="_blank">CV</a> o mandarme <br>un mensaje.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-12">
				<form action="" method="POST">
					<div class="row">
						<div class="col-sm-6 col-12">
							<div class="form-group">
								<input type="text" name="txtNombre" id="nombre" placeholder="NOMBRE" required="nombre" size="42">
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="form-group">
								<input type="Email" name="txtCorreo" id="mail" placeholder="CORREO" required="Email" size="42">	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<input type="text" name="txtAsunto" id="asunto" placeholder="ASUNTO" size="90">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea name="txtMensaje" id="mensaje" cols="91" rows="10" placeholder="MENSAJE" required="mensaje" ></textarea> 
							</div>
						</div>
					</div>	
					<?php if (isset($msj)):?>
                    <div class="p-3 mb-2 bg-danger text-white"> <?php echo"$msj"?></div><?php endif; ?>
					<div class="row">
						<div class="col-12 text-center">									
               				<input type="submit" value="ENVIAR" id="btnEnviar" name="btnEnviar" class="boton"></input>
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