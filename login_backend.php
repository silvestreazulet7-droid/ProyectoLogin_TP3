<?php
session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([':correo' => $correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['nombre'] . " " . $usuario['apellido'];
            header("Location: bienvenida.php");
            exit;
        } else {
            echo "<script>
                    alert('Correo o contraseña incorrectos.');
                    window.location.href = 'index.php';
                  </script>";
        }
    } catch (PDOException $e) {
        echo "Error en el sistema: " . $e->getMessage();
    }
}
?>