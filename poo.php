<?php

class Persona{
	protected $documento;
	protected $nombre;
	protected $edad;
	protected $nacionalidad;
	protected $promedio;

	public function setNombre($nom){$this->nombre = $nom;}
	public function getNombre(){return $this->nombre;}

	public function setDocumento($doc){$this->documento = $doc;}
	public function getDocumento(){return $this->documento;}
}

class Docente extends Persona{
	public $especialidad;
	const ESPECIALIDAD_FS = "Programador Full Stack";
	const ESPECIALIDAD_BBDD = "Base de Datos"
	const ESPECIALIDAD_MKT = "Marketing digital"

	public function imprimir(){

	}
	public function imprimirESpecialidadesHabilitadas(){
		echo self :: ESPECIALIDAD_FS;
	}
}

/**
 * 
 */
class Alumno extends Persona{
	private $legajo;
	private $nota_portfolio;
	private $nota_php;
	private $nota_proyecto;
	private $promedio;

	public function __get($propiedad){
		return $this->$propiedad;
	}

	public function __set($propiedad, $valor){
		$this->$propiedad = $valor;
		return $this;
	}

	function __construct(){
		$this->legajo = 0;
		$this->nota_portfolio = 0.0;
		$this->nota_php = 0.0;
		$this->nota_proyecto = 0.0;
	}
	public function calcularPromedio(){
		$suma = ($this->nota_portfolio + $this->nota_php + $this->nota_proyecto);
		$resultado = $suma / 3;
		$this->promedio = round($resultado, 2);
	}
	public function imprimir(){
		echo "Nombre: ". $this->nombre . "<br>";
		echo "Nombre: ". $this->nota_portfolio . "<br>";
		echo "Nombre: ". $this->nota_php . "<br>";
		echo "Nombre: ". $this->nota_proyecto . "<br>";
		echo "El promedio es: " . $this->promedio;
		echo "<br><br>";
	}
	function __destruct(){
		print "Destruyendo el objeto " . $this->nombre . "<br>"
	}
}

$alumno1 = new Alumno();
//$alumno1 ->nombre="Luciano";
$alumno1 ->
$alumno1 ->edad=24;
$alumno1 ->nota_portfolio=10;
$alumno1 ->nota_php=8.5;
$alumno1 ->nota_proyecto=9;
$alumno1 ->calcularPromedio();
$alumno1 ->imprimir();

$alumno2 = new Alumno();
$alumno2 ->nombre="Natalia";
$alumno2 ->edad=30;
$alumno2 ->nota_portfolio=9;
$alumno2 ->nota_php=9;
$alumno2 ->nota_proyecto=10;
$alumno2 ->calcularPromedio();
$alumno2 ->imprimir();

$docente = new Docente();
$docente->especialidad = Docente::ESPECIALIDAD_FS;

print_r($docente);


?>