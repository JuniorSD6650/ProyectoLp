<?php

require_once("../Clases/Carrera.php");


class CarreraControlador{

    public function createCarrera(String $nombre, int $id_facultad){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO carrera(nombre, id_facultad) VALUES ('nombre',$id_facultad)";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }
    
    public function readCarreras(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM carrera";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function updateCarrera(int $id, String $nombre, int $id_facultad){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE carrera SET nombre = 'nombre', id_facultad = $id_facultad WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function deleteCarrera(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM carrera WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readCarreraPorId($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM carrera where id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }


}