<?php
// Inicia la sesión
session_start();

// Verifica si existe la variable de sesión 'user_id'
if (!isset($_SESSION['user_id'])) {
    // Si no existe la sesión, redirige al usuario a la página de inicio de sesión
    header("Location: /lp/Vista/estudiante/login.php");
    exit(); // Asegura que el script se detenga después de la redirección
}

// Resto del código de tu página de inicio (index.php)
?>
<?php include 'Vista/common/navbar.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
</head>

<body>
    <h1>Hola</h1>
    <!-- Resto del contenido de tu página -->
</body>