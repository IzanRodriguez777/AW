<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="procesar_registro.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario" required> <br><br>
        <label >Contraseña</label>
        <input type="oassword" name="password" required> <br><br>
        <button type="submit"> Registrarse </button>
    </form>
    <p>¿Ya tienes cuenta? <a href="login.php"></a></p>
</body>
</html>