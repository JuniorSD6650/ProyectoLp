<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <h1>Libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Edición</th>
                <th>Disponibilidad</th>
                <th>Fecha de publicación</th>
                <th>ID de la carrera</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once('..\Controladores\LibroControlador.php');
                $libros = new LibroControlador();
                $resultado = $libros->readLibros();

                foreach ($resultado as $item) {
                    echo    "<tr>
                                <td>".$item["id"]."</td>
                                <td>".$item["nombre"]."</td>
                                <td>".$item["autor"]."</td>
                                <td>".$item["edicion"]."</td>
                                <td>".$item["disponibilidad"]."</td>
                                <td>".$item["fechaPublicacion"]."</td>
                                <td>".$item["id_carrera"]."</td>
                                <td>".$item["precio"]."</td>
                            </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>