<?php
include "auth.php";
requerirLogin();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?></h1>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Rol: <?php echo $_SESSION['rol']; ?></p>
        
        <?php if ($_SESSION['rol'] == 'admin'): ?>
            <div class="admin-options">
                <h3>Opciones de Administrador:</h3>
                <a href="admin_list.php" class="btn">Ver todos los usuarios</a>
            </div>
        <?php endif; ?>
        
        <a href="logout.php" class="btn btn-logout">Cerrar sesión</a>
    </div>
</body>
</html>