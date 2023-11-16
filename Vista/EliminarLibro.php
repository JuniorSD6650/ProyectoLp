<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar libro</title>
</head>
<body>
    <h1>Eliminar libro</h1>
    <form action="eliminarLibro.php" method="post">
        <input type="number" name="id" placeholder="ID del libro">
        <input type="submit" value="Eliminar">
    </form>

    <?php
        include_once('..\Controladores\LibroControlador.php');

        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $libro = new LibroControlador();
            $resultado = $libro->deleteLibro($id);

            if ($resultado) {
                echo "El libro se ha eliminado correctamente.";
            } else {
                echo "Ocurrió un error al eliminar el libro.";
            }
        }
    ?>
</body>
</html>