<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Proyecto Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Crear Cuenta</h2>
        <form id="formRegistro" action="registro_backend.php" method="POST">
            <div class="input-group">
                <label>Nombre</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="input-group">
                <label>Apellido</label>
                <input type="text" name="apellido" required>
            </div>
            <div class="input-group">
                <label>Correo Electrónico</label>
                <input type="email" name="correo" required>
            </div>
            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label>Confirmar Contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <p id="mensaje-error" style="color: red; display: none; font-size: 14px; margin-bottom: 10px;"></p>
            <button type="submit" class="btn">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión aquí</a></p>
    </div>

    <script src="script.js"></script>
</body>
</html>