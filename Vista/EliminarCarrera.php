<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Carrera</title>
</head>
<body>
    <h1>Eliminar Carrera</h1>
    <form action="eliminarCarrera.php" method="post">
        <input type="number" name="id" placeholder="ID de la Carrera">
        <input type="submit" value="Eliminar">
    </form>

    <?php
        include_once('../Controladores/CarreraControlador.php');

        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $carreraControlador = new CarreraControlador();
            $resultado = $carreraControlador->deleteCarrera($id);

            if ($resultado) {
                echo "La carrera se ha eliminado correctamente.";
            } else {
                echo "Ocurrió un error al eliminar la carrera.";
            }
        }
    ?>
</body>
</html>
