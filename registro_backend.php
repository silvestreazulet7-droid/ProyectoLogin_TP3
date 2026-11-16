<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $correo = trim($_POST['correo']);
    $password = $_POST['password'];

    // Encriptación segura de la contraseña
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, password) VALUES (:nombre, :apellido, :correo, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':password' => $passwordHash
        ]);

        echo "<script>
                alert('¡Registro exitoso! Ahora puedes iniciar sesión.');
                window.location.href = 'index.php';
              </script>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "<script>
                    alert('Error: Ese correo electrónico ya está registrado.');
                    window.history.back();
                  </script>";
        } else {
            echo "Error al registrar: " . $e->getMessage();
        }
    }
}
?>