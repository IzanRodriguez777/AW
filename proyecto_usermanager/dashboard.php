<?php
include "auth.php";
requerirLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKnTAu4HNQm5RpxISYf6qvYksnstXThV-2ag&s" sizes="32x32">

</head>
<body>
    <div class="container">
        <h1>Panel de Usuario</h1>
        
        <div class="user-data">
            <p><strong>Nombre:</strong> <?php echo $_SESSION['nombre']; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
            <p><strong>Rol:</strong> 
                <?php if ($_SESSION['rol'] == 'admin'): ?>
                    <span class="admin-badge">Administrador</span>
                <?php else: ?>
                    <span class="user-badge">Usuario</span>
                <?php endif; ?>
            </p>
        </div>
        
        <?php if ($_SESSION['rol'] == 'admin'): ?>
        <div class="info-box">
            <h2>Opciones de Administrador</h2>
            <a href="admin_list.php" class="btn">Ver usuarios</a>
        </div>
        <?php endif; ?>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="logout.php" class="btn btn-red">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>