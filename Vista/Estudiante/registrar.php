<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
</head>

<body>
    <h2>Registrar</h2>
    <form action="registrar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido1">Apellido 1:</label>
        <input type="text" name="apellido1" required>

        <label for="apellido2">Apellido 2:</label>
        <input type="text" name="apellido2" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Registrar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $password = $_POST["password"];

    require_once("../../Controladores/EstudianteControlador.php");

    $estudianteControlador = new EstudianteControlador();
    $estudianteControlador->registrar($nombre, $apellido1, $apellido2, $email, $telefono, $password);
}
?>