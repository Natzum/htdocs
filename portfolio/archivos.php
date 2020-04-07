<?php

class Archivo
{	private $nombre;
	private $aDatos;
	
	public function importar($nom_archivo)
	{}
	public function exportar($nom_archivo)
	{}
	public function __get($propiedad){return $this->$propiedad;}

	public function __set($propiedad, $valor){$this->$propiedad = $valor;return $this;}
}
/**
 * 
 */
class Json extends Archivo
{	private $strJson;
	
	
	public function importar($nom_archivo)
	{
		$this->strJson = file_get_contents($nom_archivo);
		$this->aDatos = json_decode($this->strJson, true);
	}
	public function exportar($nom_archivo){
		$this->strJson = json_encode($this->aDatos);
		file_put_contents($nom_archivo, $this->strJson);
	}
	public function imprimir(){
		print_r($this->aDatos);
	}

}

/**
 * 
 */
class Csv extends Archivo
{	private $aDatos;
	
	public function importar ($nom_archivo){

	}
	public function exportar($nom_archivo){

	}
}



//Programa
$obj1 = new Json();
$obj1->importar ("clientes.txt");
$obj1->imprimir();

$obj2 = new Csv();
$obj2->aDatos = $obj1->aDatos();
$obj2exportar("clientes.csv");


?>