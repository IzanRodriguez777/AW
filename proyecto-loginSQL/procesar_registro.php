<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conexion.php"; 
    
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 

// esto se añade para lo del verificar
$stmt_check = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$stmt_check->bind_param("s", $usuario);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    $usuario_existe = true;
} else {
    $usuario_existe = false;
    
    // Si no existe, proceder con el registro
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)"); 
    $stmt->bind_param("ss", $usuario, $hash); 
    $registro_exitoso = $stmt->execute();
    $stmt->close();
}

$stmt_check->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            background-color: #e6e9ef;
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            color: #2f80ed;
        }

        a {
            color: #1b62c6;
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php
if ($usuario_existe) {
    echo "<h1>Error: El nombre de usuario ya está en uso</h1>";
    echo "<p>Por favor, elige otro nombre de usuario.</p>";
    echo "<p><a href='registro.php?error=usuario_existe'>Volver al registro</a></p>";
} elseif ($registro_exitoso) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>"; 
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<h1>Error inesperado en el registro ❌</h1>"; 
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
}
?>

</body>
</html>
