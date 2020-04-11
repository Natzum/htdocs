<?php
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
		$this->aProductos=[];
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
		echo "CLiente: ". $this->cliente->nombre . "<br>";
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
}
//------------------------------------------------------------------------------------------------------
$total = 0.0;
$pos = isset($_GET["pos"])? $_GET["pos"] : "";
$producto1 = new Producto();
$producto2 = new Producto();
if(isset ($_GET["do"]) && $_GET["do"] == "iniciar1"){
    $producto1->cod = "AB8767";
	$producto1->nombre = "Notebook 15\" HP";
	$producto1->descripcion = "Esta es una computadora HP";
	$producto1->precio = 30000;
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
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito de compras</h5>
							</div>
							<div class="col-xs-6">
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
						 <a href="?pos=<?php echo $pos; ?>& do=iniciar1"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="border: 1px solid #17a2b8; border-radius: 40px;font-size: 16px;background-color: #17a2b8;color: white;padding: 11px 10px;"></i></a>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $producto1->nombre; ?> </strong></h4><h4><small><?php echo $producto1->descripcion; ?> </small></h4>
							<h4 class="product-code"><small><?php echo $producto1->cod; ?> </small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo $producto1->precio; ?> <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="0">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Actualizar precio
								</button>
							</div>
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
				<h4 class="text-right">Total <strong><?php echo"$$total";?></strong></h4>
			</div>
		</div>	
		<div class="col-xs-3">
			<button type="button" class="btn btn-success btn-block">
								Comprar</button>
		</div>
	</div>
</footer>
</body>
</html>