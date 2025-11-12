<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1024px-HTML5_logo_and_wordmark.svg.png">

    <meta charset="UTF-8">
    <title>Registro de usuario</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: green;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin: 0;
        }

        .contenedor {
            background-color: white;
            border: 2px solid green;
            margin: 30px;
            padding: 20px;
            border-radius: 4px;
            width: 350px;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 8px;
            color: black;
        }

        input {
            padding: 5px;
            border: 1px solid grey;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 7px 15px;
            margin-top: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: green;
        }

        p {
            margin-top: 15px;
        }

        a {
            color: green;
        }
    </style>
</head>
<body>

    <h1>Formulario de Registro</h1>

    <div class="contenedor">
        <form action="procesar_registro.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Registrarse</button>
        </form>

        <p>¿Ya tienes cuenta? 🤔 <br> <a href="login.php">Inicia sesión aquí👇</a></p>
    </div>

</body>
</html>
