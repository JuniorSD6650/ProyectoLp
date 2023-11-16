<?php

require_once '../Clases/Facultad.php';



class FacultadControlador{

    //CRUD
    public function createFacultad(String $nombre){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO facultad(nombre) VALUES ('nombre')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readFacultades(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM facultad";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function updateFacultad(int $id, String $nombre){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql= "UPDATE facultad SET nombre = 'nombre' WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function deleteFacultad(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM facultad WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
    
        return $resultado;
    }

    public function readFacultadesPorID(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM facultad where = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
    
        return $resultado;
    }


    
    public function getFacultadPorId(int $id){
        $facultad = new Facultad();
        $resultado = $facultad->traerFacultadPorId( $id );
                
        $respuesta = array();
        $i = 0;
        
        foreach($resultado as $facultad){
            $respuesta[$i]["nombre"] = $facultad["nombre"];
            $i++;
        }

        return $respuesta;
    }


}
