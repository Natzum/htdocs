<?php
session_start();
include_once "config.php";
include_once "usuario.php";

$usuario = new Usuario();
$usComparativo = new Usuario();
$usuario->cargarFormulario($_REQUEST);
$usComparativo->nom_usuario = $usuario->nom_usuario;
if($_POST){
    if(isset($_POST["btnRegistrar"])){
            $usComparativo->obtenerPorNom();
            if ($usComparativo->idusuario <> "") {
              //cartel de nombre de usuario ya existente
              $msj2= "Nombre de usuario existente, busque otro";
            }else{
              $usuario->insertar();
              //cartel de confirmacion de registro, con el ok sigue a login.php');
              $msj= "Su usuario ha sido registrado, puede ir al login";
            }         
        }
} 

?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registro de Usuarios</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <form action="" method="POST">
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta!</h1>
              </div>
              <form class="user">
                <?php if (isset($msj)):?>
                        <div class="p-3 mb-2 bg-info text-white"> <?php echo"$msj"?>
                    </div><?php endif; ?>
                <div class="form-group row">
                  <?php if (isset($msj2)):?>
                    <div class="p-3 mb-2 bg-danger text-white"> <?php echo"$msj2"?></div><?php endif; ?>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="txtNombre" name="txtNombre" placeholder="Nombre">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="txtApellido" name="txtApellido" placeholder="Apellido">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="txtCorreo" name="txtCorreo" placeholder="Dirección de email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="txtUsuario" name="txtUsuario" placeholder="Nombre de Usuario">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="txtClave" name="txtClave" placeholder="Clave">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" style="height: 40px; width: 530px;">Registrar Cuenta</button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Registrarme con Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Registrarme con Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Olvidaste la contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Tenés una cuenta? Logueate!</a>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>