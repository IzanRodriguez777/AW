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
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png">

    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <style>
        body {
            background-color: white;
            text-align: center;
            margin: 0;
        }
        h1 {
            background-color: green;
            color: white;
            padding: 20px;
            margin: 0;
        }
        .caja {
            border: 2px solid green;
            border-radius: 5px;
            background-color: white;
            width: 400px;
            margin: 60px auto;
            padding: 20px;
        }
        a {
            color: green;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Bienvenido/a👋</h1>
    <div class="caja">
        <p><b><?php echo $_SESSION['usuario']; ?></b>, has iniciado sesión correctamente 🎉</p>
        <p><a href="logout.php">Cerrar sesión🔒</a></p>
    </div>
    <img width="300px"src="https://i.pinimg.com/originals/cb/7e/0c/cb7e0c63e56d8cb71cbd501e73328973.gif" alt="" >
</body>
</html>

