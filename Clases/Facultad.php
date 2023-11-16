<?php
require_once ("Conn.php");
$s = require_once('Conn.php');
echo "\n" . $s;


class Facultad{
    private $id;
    private $nombre;
    

    
    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(int $nombre){
        $this->nombre = $nombre;
    }
    
    public function guardar(String $nombre){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "INSERT INTO facultad(nombre) VALUES ('nombre')";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }

    public function traerFacultadPorId(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT f.nombre FROM facultad as f  WHERE f.id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }

}

return  "Some String";