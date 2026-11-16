<?php
session_start();

// Protección de ruta: si no hay sesión iniciada, redirige al login
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Proyecto Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="form-container" style="text-align: center;">
        <h2>¡Bienvenido/a!</h2>
        <p style="font-size: 18px; color: #333; margin: 20px 0;">
            Hola, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>. Has iniciado sesión correctamente.
        </p>
        <a href="logout.php" class="btn" style="display: inline-block; text-decoration: none; background-color: #dc3545;">Cerrar Sesión</a>
    </div>
</body>
</html>