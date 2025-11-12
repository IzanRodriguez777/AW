<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$file = fopen("usuarios.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png">

    <meta charset="UTF-8">
    <title>Registro completado</title>
    <style>
        body {
            background-color: white;
            text-align: center;
            margin-top: 100px;
        }
        h1 { color: green; 
        }
        a { color: green; text-decoration: none; 
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>✅ Usuario registrado correctamente✅</h1>
    <p><a href="login.php">Iniciar sesión➡️</a></p>
    <img src="https://i.imgur.com/fd5LeDE.gif" alt="">
</body>
</html>
 