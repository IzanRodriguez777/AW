<?php
session_start();
include "db.php";

$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $pdo->prepare("SELECT id, nombre, email, password, rol FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user) {
    $id = $user['id'];
    $nombre = $user['nombre'];
    $email_db = $user['email'];
    $hash = $user['password'];
    $rol = $user['rol'];
    
    if (password_verify($password, $hash)) {
        $_SESSION["user_id"] = $id;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["email"] = $email_db;
        $_SESSION["rol"] = $rol;
        header("Location: dashboard.php");
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }
} else {
    header("Location: login.php?error=1");
    exit;
}

?>