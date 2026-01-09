<?php
include "db.php";

if ($_POST) {
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$rol = $_POST["rol"];
$password = password_hash("123456", PASSWORD_DEFAULT); // Contraseña por defecto
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password, edad, rol) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$nombre, $email, $password, $edad, $rol]);
header("Location: list.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Crear Usuario</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="form-container">
<h1>Crear Usuario</h1>
<form method="POST">
<input type="text" name="nombre" placeholder="Nombre" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<input type="number" name="edad" placeholder="Edad" required>
<select name="rol">
<option value="user">Usuario</option>
<option value="admin">Administrador</option>
</select>
<button class="btn" type="submit">Guardar</button>
</form>
</div>
</body>
</html>