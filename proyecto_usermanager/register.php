<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Registro de usuario</h1>
        <?php if (isset($_GET['error'])): ?>
            <div class="error">Error en el registro</div>
        <?php endif; ?>
        <form id="registerForm" action="procesar_register.php" method="post">
            <label>Nombre completo:</label>
            <input type="text" name="nombre" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <label>Edad:</label>
            <input type="number" name="edad" required>
            <button type="submit" class="btn">Registrarse</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>