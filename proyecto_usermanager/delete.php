<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['rol'] != 'admin') {
    header('Location: dashboard.php');
    exit();
}
include "db.php";
$id = $_GET["id"];
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->execute([$id]);
header("Location: admin_list.php");
exit;
?>