<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SESSION['rol'] != 'admin') {
    header('Location: dashboard.php');
    exit();
}

include "db.php";

$stmt = $pdo->query("SELECT id, nombre, email, edad, rol FROM usuarios ORDER BY id DESC");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <a href="dashboard.php" class="btn">Volver al Dashboard</a>
        
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                <td><?php echo $usuario['edad']; ?></td>
                <td><?php echo $usuario['rol']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn-edit">Editar</a>
                    <a href="delete.php?id=<?php echo $usuario['id']; ?>" class="btn-delete" onclick="return confirm('¿Eliminar usuario?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>