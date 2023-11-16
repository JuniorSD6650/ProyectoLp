<?php
require_once(__DIR__ . '/../Clases/Estudiante.php');

class EstudianteControlador
{

    public function createEstudiante(String $nombre, String $apellido1, String $apellido2, String $email, String $telefono)
    {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO estudiante(nombre, apellido1, apellido2, email, telefono) VALUES ('nombre', 'apellido1', 'apellido2', 'email', 'telefono')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();

        return $resultado;
    }

    public function readEstudiantes()
    {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM estudiante";
        $resultado = $conexion->query($sql);
        $conn->cerrar();

        return $resultado;
    }

    public function updateEstudiante(int $id, String $nombre, String $apellido1, String $apellido2, String $email, String $telefono)
    {
        $conn = new Conn();
        $conexion = $conn->conectar();

        // Utiliza las variables en la consulta SQL
        $sql = "UPDATE estudiante SET nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2', email = '$email', telefono = '$telefono' WHERE id = $id";

        $resultado = $conexion->exec($sql);
        $conn->cerrar();

        return $resultado;
    }


    public function deleteEstudiante(int $id)
    {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM estudiante WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();

        return $resultado;
    }

    public function readEstudiantePorId($id)
    {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM estudiante where id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();

        return $resultado;
    }

    public function login($email, $password)
    {
        $estudianteModelo = new Estudiante();
        $usuario = $estudianteModelo->login($email, $password);

        if ($usuario) {
            session_start();
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_nombre'] = $usuario['nombre'];
            header("Location: /lp/index.php");
            exit();
        } else {
            return "Inicio de sesión fallido. Verifica tus credenciales.";
        }
    }

    public function registrar($nombre, $apellido1, $apellido2, $email, $telefono, $password)
    {
        $estudianteModelo = new Estudiante();
        $resultado = $estudianteModelo->registrar($nombre, $apellido1, $apellido2, $email, $telefono, $password);

        if ($resultado) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error en el registro. Por favor, verifica los datos proporcionados.";
        }
    }
}
