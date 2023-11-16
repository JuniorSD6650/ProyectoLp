<?php
require_once "Conn.php";

class Libro{
    private $id;
    private $nombre;
    private $autor;
    private $edicion;
    private $disponibilidad;
    private $fechaPublicacion;
    private $id_carrera;
    private $precio;

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

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor(String $autor){
        $this->autor = $autor;
    }

    public function getEdicion(){
        return $this->edicion;
    }

    public function setEdicion(String $edicion){
        $this->edicion = $edicion;
    }

    public function getDisponibilidad(){
        return $this->disponibilidad;
    }

    public function setDisponibilidad(int $disponibilidad){
        $this->disponibilidad = $disponibilidad;
    }

    public function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion(int $fechaPublicacion){
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getId_carrera(){
        return $this->id_carrera;
    }

    public function setId_carrera(int $id_carrera){
        $this->id_carrera = $id_carrera;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio(int $precio){
        $this->precio = $precio;
    }

    
    public function guardar(String $nombre, int $autor, String $edicion, bool $disponibilidad, string $fechaPublicacion, int $id_carrera, int $precio){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO libro(nombre, autor, edicion, disponibilidad, fechaPublicacion, id_carrera, precio) VALUES ('nombre',$autor,'edicion',$disponibilidad,'fechaPublicacion',$id_carrera,$precio)";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }
}