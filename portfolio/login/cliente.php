<?php

class Cliente {
    private $idcliente;
    private $nombre;
    private $cuit;
    private $telefono;
    private $correo;
    private $fecha_nac;

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }

    public function cargarFormulario($request){
        $this->idcliente = isset($request["id"])? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"])? $request["txtNombre"] : "";
        $this->cuit = isset($request["txtCuit"])? $request["txtCuit"]: "";
        $this->telefono = isset($request["txtTelefono"])? $request["txtTelefono"]: "";
        $this->correo = isset($request["txtCorreo"])? $request["txtCorreo"] : "";
        $this->fecha_nac = isset($request["txtFechaNac"])? $request["txtFechaNac"] :"";
    }

    public function insertar(){
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        //Arma la query
        $sql = "INSERT INTO clientes (nombre, cuit, telefono, correo, fecha_nac) VALUES ('" . $this->nombre ."', '" . $this->cuit ."', '" . $this->telefono ."', '" . $this->correo ."', '" . $this->fecha_nac ."');";
        //Ejecuta la query
        $mysqli->query($sql);
        //Obtiene el id generado por la inserción
        $this->idcliente = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function eliminar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM clientes WHERE idcliente = " . $this->idcliente;
        //Ejecuta la query
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function obtenerPorId(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idcliente, nombre, cuit, telefono, correo, fecha_nac FROM clientes WHERE idcliente = " . $this->idcliente;
        $resultado = $mysqli->query($sql);

        if($resultado){
            //Convierte el resultado en un array asociativo
            $fila = $resultado->fetch_assoc();
            $this->nombre = $fila["nombre"];
            $this->cuit = $fila["cuit"];
            $this->telefono = $fila["telefono"];
            $this->correo = $fila["correo"];
            $this->fecha_nac = $fila["fecha_nac"];
        }
        $mysqli->close();

    }

    public function obtenerTodos(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idcliente, nombre, cuit, telefono, correo, fecha_nac FROM clientes";
        $resultado = $mysqli->query($sql);

        $aResultado = array();
        if($resultado){
            //Convierte el resultado en un array asociativo
            while($fila = $resultado->fetch_assoc()){
                $clienteAux = new Cliente();
                $clienteAux->idcliente = $fila["idcliente"];
                $clienteAux->nombre = $fila["nombre"];
                $clienteAux->cuit = $fila["cuit"];
                $clienteAux->telefono = $fila["telefono"];
                $clienteAux->correo = $fila["correo"];
                $clienteAux->fecha_nac = $fila["fecha_nac"];
                $aResultado[] = $clienteAux;
            }
        }
        return $aResultado;
    }

    public function actualizar(){

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE clientes SET
                nombre = '".$this->nombre."',
                cuit = '".$this->cuit."',
                telefono = '".$this->telefono."',
                correo = '".$this->correo."',
                fecha_nac =  '".$this->fecha_nac."'
                WHERE idcliente = " . $this->idcliente;
          
        $mysqli->query($sql);
        $mysqli->close();
    }

}


?>