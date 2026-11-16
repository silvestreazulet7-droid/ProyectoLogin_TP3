document.getElementById('formRegistro').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const mensajeError = document.getElementById('mensaje-error');

    if (password !== confirmPassword) {
        e.preventDefault(); // Detiene el envío del formulario
        mensajeError.textContent = "Las contraseñas no coinciden. Por favor, verifícalas.";
        mensajeError.style.display = "block";
    } else {
        mensajeError.style.display = "none";
    }
});