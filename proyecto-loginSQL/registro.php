<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            background-color: #e6e9ef;
            font-family: Arial;
            margin: 0;
            padding: 0;
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
            margin: 40px auto;
            border: 2px solid #2f80ed;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-top: 10px;
        }

        input {
            width: 60%;
            padding: 6px;
            margin-top: 10px;
        }

        button {
            background-color: #2f80ed;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1b62c6;
        }

        a {
            color: #2f80ed;
        }
    </style>
</head>

<body>
    <h1>Registro de usuario</h1>

    <form action="procesar_registro.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Registrarse</button>
    </form>

    <p style="text-align:center;">¿Ya tienes cuenta? 
        <a href="login.php">Inicia sesión aquí</a>
    </p>
</body>
</html>
