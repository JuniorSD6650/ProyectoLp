<?php
require_once "Conn.php";

class Carrera{
    private $id;
    private $nombre;
    private $id_facultad;

    public function __construct($id, $nombre, $id_facultad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->id_facultad = $id_facultad;
    }

    
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

    public function getId_facultad(){
        return $this->id_facultad;
    }

    public function setId_facultad(int $id_facultad){
        $this->id_facultad = $id_facultad;
    }

    public function guardar(String $nombre, int $id_facultad){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO carrera(nombre, id_facultad) VALUES ('nombre',$id_facultad)";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }
}