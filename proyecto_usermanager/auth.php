<?php
session_start();

function estaLogueado() {
    return isset($_SESSION['user_id']);
}

function esAdmin() {
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}

function requerirLogin() {
    if (!estaLogueado()) {
        header('Location: login.php');
        exit();
    }
}
?>