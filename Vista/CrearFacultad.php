<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Facultades</title>
</head>
<body>
    <h1>Facultades</h1>
    <form action="index.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="submit" value="Crear">
    </form>

    <?php
        include_once('../Controladores/FacultadControlador.php');
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];

            $facultad = new FacultadControlador();
            $resultado = $facultad->createFacultad($nombre);

            if ($resultado) {
                echo "La facultad se ha creado correctamente.";
            } else {
                echo "Ocurrió un error al crear la facultad.";
            }
        }
    ?>
</body>
</html>