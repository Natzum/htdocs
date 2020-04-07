<?php
session_start();
class Cliente{
	protected $dni;
	protected $nombre;
	protected $correo;
	protected $telefono;


	public function __get($propiedad)
	{
		return $this->$propiedad;
	}

	public function __set($propiedad, $valor)
	{
		$this->$propiedad = $valor;
		return $this;
	}
	
	public function imprimir(){
		echo "Nombre: ". $this->nombre . "<br>";
		echo "DNI: ". $this->dni . "<br>";
		echo "Correo: ". $this->correo . "<br>";
		echo "Telefono: ". $this->telefono . "<br>";
		echo "<br><br>";
	}


}

class Producto 
{
	protected $cod;
	protected $nombre;
	protected $precio;
	protected $descripcion;

	public function __construct()
	{
		$this->precio = 0.0;
		$this->nombre = "None";
		$this->cod = 0;
		$this->descripcion = "None";

	}
	public function __get($propiedad){
		return $this->$propiedad;
	}

	public function __set($propiedad, $valor){
		$this->$propiedad = $valor;
		return $this;
	}
	public function imprimir(){
		echo "Nombre: ". $this->nombre . "<br>";
		echo "Codigo: ". $this->cod . "<br>";
		echo "Precio: ". $this->precio . "<br>";
		echo "Descripcion: ". $this->descripcion . "<br>";
		echo "<br><br>";
	}
}

class Carrito
{
	protected $cliente;
	protected $aProductos;
	protected $total;
	
	public function __construct()
	{
		$this->cliente = new Cliente();
		$this->aProductos=array();
		$this->total = 0.0;
	}
	public function __get($propiedad){
		return $this->$propiedad;
	}

	public function __set($propiedad, $valor){
		$this->$propiedad = $valor;
		return $this;
	}	


	public function imprimir(){
		echo "Cliente: ". $this->cliente->nombre . "<br>";
		echo "Precio: ". $this->total . "<br>";
		echo "<br><br>";
	}
	public function sumarizarTotal(){
		$sumador = 0.0;
		foreach ($this->aProductos as $producto) {
			$sumador = $sumador + $producto->precio;
		}
		$this->total = $sumador;
	}
	public function setProducto($producto){
		$this->aProductos[] = $producto;
		$this->total += $producto->precio;
	}
}
//------------------------------------------------------------------------------------------------------
$carrito =  new Carrito;
$pos = isset($_GET["pos"])? $_GET["pos"] : "";
$producto1 = new Producto();
$producto2 = new Producto();
if(isset ($_GET["do"]) && $_GET["do"] == "iniciar"){
  	$producto1->cod = "AB8767";
	$producto1->nombre = "Notebook 15\" HP";
	$producto1->descripcion = "Esta es una computadora HP";
	$producto1->precio = 30000;
	$producto2->cod = "QWR579";
	$producto2->nombre = "Heladera Whirpool";
	$producto2->descripcion = "Esta es una heladera";
	$producto2->precio = 76000;
}
if(isset ($_GET["do"]) && $_GET["do"] == "reset"){
		header('Location: carrito.php');
}
if ($_POST) {
	$cantProd1 = $_POST["cant1"];
	$cantProd2 = $_POST["cant2"];


	for ($i=0; $i < $cantProd1 ; $i++) { 
			  $carrito->setProducto($producto1);
		}
	for ($i=0; $i < $cantProd2 ; $i++) { 
			  $carrito->setProducto($producto2); 
		}
}

?>

<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
	<title>Compras</title>
</head>
<body>
<form action="" method="POST"> 	
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-4">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito de compras</h5>
							</div>
							<div class="col-xs-4">
								<h3><?php echo"Usuario: Bernabé"?></h3>
							</div>	
							<div class="col-xs-4">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Cambiar Usuario
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>						
						<div class="col-xs-4">	
							<h4 class="product-name"><strong><?php echo $producto1->nombre; ?> </strong></h4><h4><small><?php echo $producto1->descripcion; ?> </small></h4>
							<h4 class="product-code"><small><?php echo $producto1->cod; ?> </small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo " $ $producto1->precio"; ?> <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="number" id="cant1" name="cant1"class="form-control input-sm" value="0">
							</div>
						</div>
					</div>					
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $producto2->nombre; ?></strong></h4><h4><small><?php echo $producto2->descripcion; ?></small></h4>
							<h4 class="product-code"><small><?php echo $producto2->cod; ?> </small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo " $ $producto2->precio"; ?><span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="number" id="cant2" name="cant2" class="form-control input-sm" value="0">
							</div>							
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-3">
								<button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-primary">Actualizar precio</button>
							</div>
						</div>
						<div class="col-xs-1" style="position: absolute; right: 15px; top: 340px; ">
							<a href="?& do=iniciar"><i class="fas fa-file-export" style="font-size: 20px;"></i></a>
							<br>
							<a href="?& do=reset"><i class="fas fa-times-circle" style="font-size: 20px;"></i></a>
						</div>
					</div>					
				</div>
				<form action="carrito.php"> 
				<div class="row">
     			   <div class="col-12">
      			      <input type="submit" value="Volver" class="btn btn-primary" style="position: fixed;bottom: 100px;right: 40px;" >
      			  </div>
 			   </div>
 				</form>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="panel-footer">
		<div class="row text-center">
			<div class="col-xs-9">
				<h4 class="text-right">Total <strong><?php echo "$ $carrito->total";?></strong></h4>
			</div>
		</div>	
		<div class="col-xs-3">
			<button type="button" class="btn btn-success btn-block">
								Comprar</button>
		</div>
	</div>
</footer>
</form>
</body>
</html>