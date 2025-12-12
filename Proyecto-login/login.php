<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png">

    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: green;
            color: white;
            padding: 20px;
            margin-top: 0;
        }

        form {
            border: 2px solid green;
            border-radius: 5px;
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 60%;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: green;
        }

        p {
            margin-top: 10px;
        }

        a {
            color: green;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Inicio de Sesión</h1>

    <form action="procesar_login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Entrar</button>

        <p>¿No tienes cuenta? 🤔  <br> <a href="registro.php">Regístrate aquí👇</a></p>
    </form>

</body>
</html>
