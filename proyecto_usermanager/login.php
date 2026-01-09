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
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <?php if (isset($_GET['error'])): ?>
            <div class="error">Usuario o contraseña incorrectos</div>
        <?php endif; ?>
        <form action="procesar_login.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit" class="btn">Entrar</button>
        </form>
        <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>