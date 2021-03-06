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
//algo



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://nelsontarche.com.ar/css/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://nelsontarche.com.ar/css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="txtDni">DNI:</label>
                            <input type="text" id="txtDni" name="txtDni" class="form-control" required value="<?php echo isset($aCLientes[$pos]["dni"])? $aClientes[$pos]["dni"] : "" ; ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtNombre">Nombre:</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" required value="<?php echo isset($aCLientes[$pos]["nombre"])? $aClientes[$pos]["nombre"] : "" ; ?>">
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtTelefono">Teléfono:</label>
                            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" required value="<?php echo isset($aCLientes[$pos]["telefono"])? $aClientes[$pos]["telefono"] : "" ; ?>"> 
                        </div>
                        <div class="col-12 form-group">
                            <label for="txtCorreo">Correo:</label>
                            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" required value="<?php echo isset($aCLientes[$pos]["correo"])? $aClientes[$pos]["correo"] : "" ; ?>">
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
                    <div class="col-12">
                        <a href="index.php?do=new"><i class="fas fa-user-plus"></i></a>
                    </div>
                </div>
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                        foreach ($aClientes as $pos => $cliente) {
                            ?> 
                    <tr>
                        <td><?php echo $cliente["dni"]; ?></td>
                        <td><?php echo $cliente["correo"]; ?></td>
                        <td><?php echo $cliente["nombre"]; ?></td>
                        <td style="width: 110px;">
                            <a href="?pos=<?php echo $pos; ?>&do=editar"><i class="fas fa-edit"></i></a>
                            <a href="?pos=<?php echo $pos; ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>    
                        </td>
                    </tr>
                    <?php } ?>    
                </table>      
            </div>
        </div>
    </div>   
</body>
</html>