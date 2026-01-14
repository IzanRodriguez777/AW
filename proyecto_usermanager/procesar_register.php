<?php
session_start();
include "db.php";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];
$edad = $_POST["edad"];

$hash = password_hash($password, PASSWORD_DEFAULT);
$rol = "user";

$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->fetch()) {
    header("Location: register.php?error=1");
    exit;
}

$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password, edad, rol) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$nombre, $email, $hash, $edad, $rol]);

$user_id = $pdo->lastInsertId();

$_SESSION["user_id"] = $user_id;
$_SESSION["nombre"] = $nombre;
$_SESSION["email"] = $email;
$_SESSION["rol"] = $rol;

header("Location: dashboard.php");
exit;
?>