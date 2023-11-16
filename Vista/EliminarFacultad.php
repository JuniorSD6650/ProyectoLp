<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Facultad</title>
</head>
<body>
    <h1>Eliminar Facultad</h1>
    <form action="eliminarFacultad.php" method="post">
        <input type="number" name="id" placeholder="ID de la Facultad">
        <input type="submit" value="Eliminar">
    </form>

    <?php
        include_once('../Controladores/FacultadControlador.php');

        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $facultad = new FacultadControlador();
            $resultado = $facultad->deleteFacultad($id);

            if ($resultado) {
                echo "El facultad se ha eliminado correctamente.";
            } else {
                echo "Ocurrió un error al eliminar el facultad.";
            }
        }
    ?>
</body>
</html>