<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear libro</title>
</head>
<body>
    <h1>Crear libro</h1>
    <form action="Crearlibro.php" method="post"> 
        <input type="text" name="nombre" placeholder="Nombre"> <br>
        <input type="number" name="autor" placeholder="Autor"> <br>
        <input type="text" name="edicion" placeholder="Edición"> <br>
        <input type="checkbox" name="disponibilidad" value="1"> Disponible <br>
        <input type="date" name="fechaPublicacion" placeholder="Fecha de publicación"> <br>
        <input type="number" name="id_carrera" placeholder="ID de la carrera"> <br>
        <input type="number" name="precio" placeholder="Precio">
        <input type="submit" value="Crear">
    </form>

    <?php
        include_once('..\Controladores\LibroControlador.php');
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $autor = $_POST['autor'];
            $edicion = $_POST['edicion'];
            $disponibilidad = isset($_POST['disponibilidad']);
            $fechaPublicacion = date_format($fechaPublicacion, "Y-m-d"); // error
            $id_carrera = $_POST['id_carrera'];
            $precio = $_POST['precio'];

            $libro = new LibroControlador();
            $resultado = $libro->createLibro($nombre, $autor, $edicion, $disponibilidad, $fechaPublicacion, $id_carrera, $precio);

            if ($resultado) {
                echo "El libro se ha creado correctamente.";
            } else {
                echo "Ocurrió un error al crear el libro.";
            }
        }
    ?>
</body>
</html>