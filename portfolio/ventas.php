<?php
if (file_exists("clientes.txt")){
	$jsonClientes = file_get_contents("clientes.txt");
	$aClientes = json_decode($jsonClientes, true);
}else{
	$aClientes = array();
}	
$pos = isset($_GET["pos"])? $_GET["pos"] : "";

if($_POST){ /* postback*/
	$dni =$_POST["txtDni"];
	$nombre =$_POST["txtNombre"];
	$telefono =$_POST["txtTelefono"];
	$correo =$_POST["txtCorreo"];

    if(isset ($_GET["do"]) && $_GET["do"] == "editar"){
        //Modificar la posicion del cliente a editar
        $aClientes[$pos] = array("dni" =>$dni,
                            "nombre" =>$nombre,
                            "telefono" =>$telefono,
                            "correo"=>$correo);}



	else{// (isset($_POST["btnInsertar"])) {
		//convertir los datos del formilario en un array
		$aClientes[]= array("dni" =>$dni,
							"nombre" =>$nombre,
							"telefono" =>$telefono,
							"correo"=>$correo);}

	//Convertir el array en un json
	$jsonClientes = json_encode($aClientes);

	//guardar en el archivo la variable json (json online.fr)
	file_put_contents("clientes.txt", $jsonClientes);
}
if(isset ($_GET["do"]) && $_GET["do"] == "eliminar"){
    unset($aClientes[$pos]);
    //Convertir array a json 
    $jsonClientes = json_encode($aClientes);
    file_put_contents("clientes.txt", $jsonClientes);
}
if(isset ($_GET["do"]) && $_GET["do"] == "new"){
    header('Location: ventas.php');
}



?>

<!DOCTYPE html>
<html lang="es">
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
    <title>Ventas</title>
</head>
<body>
<form action="" method="POST">  
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form >
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="txtDni">DNI:</label>
                            <input type="text" id="txtDni" name="txtDni" class="form-control" required value="<?php  if (isset($aClientes[$pos]["dni"])){ echo($aClientes[$pos]["dni"]);}  ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtNombre">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php if (isset($aClientes[$pos]["nombre"])){ echo($aClientes[$pos]["nombre"]);} ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtTelefono">Teléfono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" required value="<?php if (isset($aClientes[$pos]["telefono"])){ echo($aClientes[$pos]["telefono"]);} ?>"> 
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtCorreo">Correo:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required value="<?php if (isset($aClientes[$pos]["correo"])){ echo($aClientes[$pos]["correo"]);}?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <div class="row">
                    
                </div>
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                    </tr>
                    <?php
                        foreach ($aClientes as $pos => $cliente) {
                            ?> 
                    <tr>
                        <td><?php echo $cliente["dni"]; ?></td>
                        <td><?php echo $cliente["nombre"]; ?></td>
                        <td><?php echo $cliente["correo"]; ?></td>
                        <td style="width: 110px;">
                            <a href="?pos=<?php echo $pos; ?>&do=editar"><i class="fas fa-edit" style="border: 1px solid #17a2b8; border-radius: 40px;font-size: 16px;background-color: #17a2b8;color: white;padding: 11px 10px;"></i></a>
                            <a href="?pos=<?php echo $pos; ?>&do=eliminar"><i class="fas fa-trash-alt" style="border: 1px solid #dc3545;border-radius: 40px;font-size: 16px;background-color: #dc3545;color: white;padding: 11px 12px;}"></i></a>    
                        </td>
                    </tr>
                    <?php } ?>    
                    <a href="?pos=<?php echo $pos; ?>& do=new"><i class="fas fa-user-plus" style="border: 1px solid #
                    07BFF;border-radius: 40px;font-size: 25px;background-color: #007bff;color: white;padding: 13px 10px;position: fixed;bottom: 20px;right: 20px;" ></i></a>
                </table>      
            </div>
        </div>
    </div>
</form>      
</body>
</html>