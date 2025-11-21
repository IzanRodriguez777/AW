<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<style>
    body {
        background-color: #e6e9ef;
        font-family: Arial;
        margin: 0;
        text-align: center;
    }

    h1 {
        background-color: #2f80ed;
        color: white;
        padding: 20px;
        margin: 0;
    }

    .caja {
        width: 380px;
        margin: 50px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        border: 2px solid #2f80ed;
    }

    a {
        color: #1b62c6;
    }
</style>
</head>
<body>

<h1>Bienvenido/a</h1>

<div class="caja">
    <p><b><?php echo $_SESSION['usuario']; ?></b>, has iniciado sesión correctamente 🎉</p>
    <p><a href="logout.php">Cerrar sesión</a></p>
</div>

</body>
</html>
