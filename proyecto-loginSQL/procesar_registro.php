<?php

include "conexion.php"; 
    
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 


$resultado = $conn->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

if ($resultado->num_rows > 0) {
    $error_usuario = true;
} else {
    $error_usuario = false;
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if ($conn->query("INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$hash')")) {
        $registro_exitoso = true;
    } else {
        $registro_exitoso = false;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="https://statics-maker.llt-services.com/cad/images/2021/01/08/original/0683a89e-0561-495c-85eb-dd457b5dac04-190620593.jpg">

    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            background-color: blue;
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: yellow;
        }

        a {
            color: yellow;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <img src="https://logodownload.org/wp-content/uploads/2023/05/cadiz-cf-logo-1.png" width="100px" class="cadiz" alt="">


<?php
if ($error_usuario) {
    echo "<h1>Error: El nombre de usuario ya está en uso</h1>";
    echo "<p>Por favor, elige otro nombre de usuario.</p>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
} else if ($registro_exitoso) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>"; 
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<h1>Error inesperado en el registro ❌</h1>"; 
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
}
?>

</body>
</html>
