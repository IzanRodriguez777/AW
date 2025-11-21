<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>

    <style>
        body {
            background-color: yellow;
            margin: 0;
        }

        h1 {
            background-color: #2f80ed;
            color: white;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        form {
            width: 380px;
            background: white;
            border-radius: 8px;
            padding: 20px;
            border: 2px solid #2f80ed;
            margin: 40px auto;
        }

        label {
            width: 100px;
            display: inline-block;
            margin-top: 10px;
        }

        input {
            width: 60%;
            padding: 6px;
        }

        button {
            background-color: #2f80ed;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 15px;
            cursor: pointer;
        }

        button:hover { background-color: #1b62c6; 
        }

        a { color: #2f80ed; 
        }

        .cadiz{
            width: 50px;
            height: auto;
            margin-left: 10px;
            position: absolute;
            right: 20px;
            top: 5px%;
            transform: translateY(-20%);

        }
    </style>

</head>
<body>

    <h1>Inicio de sesión
        <img src="https://logodownload.org/wp-content/uploads/2023/05/cadiz-cf-logo-1.png"  class="cadiz" alt="">
    </h1>

    <form action="procesar_login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Entrar</button>
    </form>

    <p style="text-align:center;">
        ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
    </p>

</body>
</html>
