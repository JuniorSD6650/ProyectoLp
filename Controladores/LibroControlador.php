<?php

require_once("..\Clases\Libro.php");


class LibroControlador{

    public function createLibro(String $nombre, int $autor, String $edicion, bool $disponibilidad, String $fechaPublicacion, int $id_carrera, int $precio){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO libro(nombre, autor, edicion, disponibilidad, fechaPublicacion, id_carrera, precio) VALUES ('nombre',$autor,'edicion',$disponibilidad,'fechaPublicacion',$id_carrera,$precio)";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readLibros(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM libro";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function updateLibro(int $id, String $nombre, int $autor, String $edicion, bool $disponibilidad, String $fechaPublicacion, int $id_carrera, int $precio){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE libro SET nombre = 'nombre', autor = $autor, edicion = 'edicion', disponibilidad = $disponibilidad, fechaPublicacion = 'fechaPublicacion', id_carrera = $id_carrera, precio = $precio WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function deleteLibro(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM libro WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }


    public function readLibrosPorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM libro where id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }




}