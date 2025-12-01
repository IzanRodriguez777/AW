<?php
session_start();
include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultado Login</title>
<link rel="icon" href="https://statics-maker.llt-services.com/cad/images/2021/01/08/original/0683a89e-0561-495c-85eb-dd457b5dac04-190620593.jpg">
<style>
    body {
        font-family: Arial;
        background-color: yellow;
        text-align: center;
        margin-top: 100px;
    }

    h1 { color: #2f80ed; 
    }

    a { color: #1b62c6; 
    }
</style>
</head>
<body>

<?php
if ($stmt->num_rows > 0) {

    $stmt->bind_result($id, $hash);
    $stmt->fetch();

    if (password_verify($password, $hash)) {
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenida.php");
        exit;
    } else {
        echo "<h1>Contraseña incorrecta ❌</h1>";
        echo "<a href='login.php'>Volver</a>";
    }

} else {
    echo "<h1>Usuario no encontrado ❌</h1>";
    echo "<a href='registro.php'>Registrarse</a>";
}

$stmt->close();
$conn->close();
?>
<br>
<img src="https://media1.giphy.com/media/5tR21oBPDJrQlaRLZ4/200_d.gif" width="500px" alt="">
</body>
</html>
