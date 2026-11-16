# Proyecto Login

Trabajo Practico Final (TP3) desarrollado para la materia **Analisis de Sistemas** (Cursada 2026).

## Datos de la Alumna
* **Nombre y Apellido:** Azul Antonella Silvestre
* **Profesor:** Lucas G. Ferreyra
* **Materia:** Analisis de Sistemas

## Descripcion del Sistema
Sistema web de autenticacion y registro de usuarios desarrollado con arquitectura Cliente-Servidor:
* **Frontend:** HTML5, CSS3 (diseño responsivo) y JavaScript (validacion de contraseñas en tiempo real).
* **Backend:** PHP 8 con manejo de sesiones (`$_SESSION`) y encriptacion segura de contraseñas (`password_hash` / `password_verify`).
* **Base de Datos:** MySQL (`db_login`) conectada mediante PDO con consultas preparadas para evitar inyeccion SQL.