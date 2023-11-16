<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" >

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once("../../Controladores/EstudianteControlador.php");

    $estudianteControlador = new EstudianteControlador();
    $resultado = $estudianteControlador->login($email, $password);

    if (is_string($resultado)) {
        echo $resultado;
    }
}
?>
