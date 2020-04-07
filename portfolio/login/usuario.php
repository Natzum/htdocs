<?php

class Usuario {
    private $idusuario;
    private $nombre;
    private $apellido;
    private $clave;
    private $correo;
    private $nom_usuario;
    private $fecha_ultloguin;

    public function __construct(){
        $this->fecha_ultloguin = date("Y-m-d H:m:s");
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
    public function cargarFormulario($request){
        $this->idusuario = isset($request["id"])? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"])? $request["txtNombre"] : "";
        $this->apellido = isset($request["txtApellido"])? $request["txtApellido"]: "";
        $this->clave = isset($request["txtClave"])? $request["txtClave"]: "";
        $this->correo = isset($request["txtCorreo"])? $request["txtCorreo"] : "";
        $this->nom_usuario = isset($request["txtUsuario"])? $request["txtUsuario"] : "";
        $this->fecha_ultloguin = date("Y-m-d H:m:s");
    }
    public function insertar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "INSERT INTO usuarios (nombre, apellido, clave, correo, nom_usuario, fecha_ultloguin) VALUES ('" . $this->nombre ."', '" . $this->apellido ."', '" . $this->clave ."', '" . $this->correo ."','" . $this->nom_usuario ."','" . $this->fecha_ultloguin ."');";
        $mysqli->query($sql);
        $this->idusuario = $mysqli->insert_id;
        $mysqli->close();
    }
    public function eliminar(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM usuarios WHERE idusuario = " . $this->idusuario;
        $mysqli->query($sql);
        $mysqli->close();
    }
    public function actualizar(){

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE usuarios SET
                nombre = '".$this->nombre."',
                apellido = '".$this->apellido."',
                clave = '".$this->clave."',
                correo= '".$this->correo."',
                nom_usuario= '".$this->nom_usuario."',
                fecha_ultloguin= '".$this->fecha_ultloguin."',
                WHERE idusuario = " . $this->idusuario;
          
        $mysqli->query($sql);
        $mysqli->close();
    }
    public function obtenerPorNom(){
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idusuario, nombre, apellido, clave, correo, nom_usuario, fecha_ultloguin FROM usuarios WHERE nom_usuario = " . $this->nom_usuario;
        $resultado = $mysqli->query($sql);

        if($resultado){
            //Convierte el resultado en un array asociativo
            $fila = $resultado->fetch_assoc();
            $this->idusuario = $fila["idusuario"];
            $this->nombre = $fila["nombre"];
            $this->apellido = $fila["apellido"];
            $this->clave = $fila["clave"];
            $this->correo = $fila["correo"];
            $this->fecha_ultloguin = $fila["fecha_ultloguin"];
        }
        $mysqli->close();

    }
}

?>    