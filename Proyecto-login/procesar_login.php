<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$usuarios = file("usuarios.txt", FILE_IGNORE_NEW_LINES);
$login_exitoso = false;

foreach ($usuarios as $linea) {
    list($user, $hash) = explode(":", $linea);
    if ($user === $usuario && password_verify($password, $hash)) {
        $login_exitoso = true;
        $_SESSION['usuario'] = $usuario;
        break;
    }
}

if ($login_exitoso) {
    header("Location: bienvenida.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png">
    <meta charset="UTF-8">
    <title>Error de inicio de sesión</title>
    <style>
        body {
            background-color: white;
            text-align: center;
            margin-top: 100px;
        }
        h1 {
            color: red;
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
    <h1>❌ Usuario o contraseña incorrectos❌ </h1>
    <p><a href="login.php">Volver a intentar 🔄</a></p>
    <img src="https://media.tenor.com/mv4l8BH9O2kAAAAM/triste.gif" alt="">
</body>
</html>

