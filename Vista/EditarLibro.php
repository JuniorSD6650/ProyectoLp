<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar libro</title>
</head>
<body>
    <h1>Editar libro</h1>
    <form action="EditarLibro.php" method="post">
        <tr>
            <input type="number" name="id" placeholder="ID del libro" required><br>
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="number" name="autor" placeholder="Autor" required><br>
            <input type="text" name="edicion" placeholder="Edición"><br>
            <input type="checkbox" name="disponibilidad" value="1"> Disponible <br>
            <input type="date" name="fechaPublicacion" placeholder="Fecha de publicación"> <br>
            <input type="number" name="id_carrera" placeholder="ID de la carrera"><br>
            <input type="number" name="precio" placeholder="Precio"><br>
            <input type="submit" value="Editar">
        </tr>
    </form>

    <?php
        include_once('..\Controladores\LibroControlador.php');
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $edicion = $_POST['edicion'];
            $disponibilidad = isset($_POST['disponibilidad']);
            $fechaPublicacion = $_POST['fechaPublicacion'];
            $id_carrera = $_POST['id_carrera'];
            $precio = $_POST['precio'];

            $libro = new LibroControlador();
            $resultado = $libro->updateLibro($id, $nombre, $autor, $edicion, $disponibilidad, $fechaPublicacion, $id_carrera, $precio);

            if ($resultado) {
                echo "El libro se ha editado correctamente.";
            } else {
                echo "Ocurrió un error al editar el libro.";
            }
        }
    ?>
</body>
</html>
