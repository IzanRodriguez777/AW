<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <h1>Login</h1>
    <form action="procesar_login.php" required> <br><br>
    <label >Usuario</label>
    <input type="text" name="usuario" required> <br><br>
    <label >Contraseña</label>
    <input type="password" name="password" required> <br><br>
    <button type="submit"> Entrar </button>
    </form>
    
    <p>No tienes cuenta? <a href="registro.php">Registrate aqui</a></p>
    
</body>
</html>