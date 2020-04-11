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

/**
 * 
 */
class Carrito
{
	protected $cliente;
	protected $aProductos;
	protected $total;
	
	public function __construct()
	{
		$this->cliente = new Cliente();
		$this->aProductos = array();
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
	public function setProducto($producto){
		$this->aProductos[] = $producto;
		$this->total += $producto->precio;
	}
}

/**
 * 
 */
class Producto 
{
	protected $cod;
	protected $nombre;
	protected $precio;
	protected $descripcion;

	public function __construct()
	{
		$this->precio = 0.0;
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


//programa
$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre="Bernabe";
$cliente1->correo="bernabe@gmail.com";
$cliente1->telefono="+541188598686";
$cliente1->imprimir();

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "ESta es una computadora HP";
$producto1->precio = 30000;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirpool";
$producto2->descripcion = "Esta es una heladera";
$producto2->precio = 76000;
$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente = $cliente1;
//$carrito->aProductos = [$producto1,$producto2];
$carrito->setProducto($producto1);
$carrito->setProducto($producto2);
//$carrito->aProductos[0] = $producto2;

//array_push($carrito->aProductos, $producto2); 
$carrito->imprimir();

?>