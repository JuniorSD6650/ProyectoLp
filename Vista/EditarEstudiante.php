<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar estudiante</title>
</head>

<body>
    <h1>Editar estudiante</h1>
    <form action="Editarestudiante.php" method="post">
        <input type="number" name="id" placeholder="ID del estudiante"><br>
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellido1" placeholder="Primer Apellido"><br>
        <input type="text" name="apellido2" placeholder="Segundo Apellido"><br>
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="text" name="telefono" placeholder="Telefono"> <br>
        <input type="submit" value="Editar">
    </form>

    <?php
    include_once('..\Controladores\estudianteControlador.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $estudiante = new EstudianteControlador();
        $resultado = $estudiante->updateEstudiante($id, $nombre, $apellido1, $apellido2, $email, $telefono);

        if ($resultado) {
            echo "El estudiante se ha editado correctamente.";
        } else {
            echo "Ocurrió un error al editar el estudiante.";
        }
    }
    ?>
</body>

</html>
