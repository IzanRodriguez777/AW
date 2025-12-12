<!DOCTYPE html>
<html lang="es">
<head>

<link rel="icon" href="https://statics-maker.llt-services.com/cad/images/2021/01/08/original/0683a89e-0561-495c-85eb-dd457b5dac04-190620593.jpg">
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            margin: 0;
            background: linear-gradient(90deg, #2f80ed 0%, #ffee00 50%, #2f80ed 100%);
            background-size: 200% 200%;
            animation: wave 3s ease-in-out infinite;
        }       

        @keyframes wave {
            0% { background-position: 0% 40%; }
            50% { background-position: 100% 60%; }
            100% { background-position: 0% 40%; }
        }

        h1 {
            background-color: #2f80ed;
            color: yellow;
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

        .cadiz{
            width: 50px;
            height: auto;
            margin-left: 10px;
            position: absolute;
            right: 20px;
            top: 5px%;
            transform: translateY(-20%);
        }

        .futbolista {
            width: 80px;
            height: auto;
            margin-left: 10px;
            position: absolute;
            left: 20px;
            top: 5px%;
            transform: translateY(-20%);
        }

        .macron {
            width: 80px;
            height: auto;
            margin-left: 10px;
            position: absolute;
            left: 20px;
            top: 5px%;
            transform: translateY(359%);
        }

        .digi {
            width: 80px;
            height: auto;
            margin-left: 10px;
            position: absolute;
            right: 20px;
            top: 5px%;
            transform: translateY(700%);
        }
    </style>
</head>

<body>
    <h1>Registro de usuario
                <img src="https://logodownload.org/wp-content/uploads/2023/05/cadiz-cf-logo-1.png"  class="cadiz" alt="">
                <img src="https://images.vexels.com/media/users/3/198903/isolated/preview/8f9b92f7bcb4c2b827faae61543e0d81-jugador-de-futbol-de-silueta-masculina.png" class="futbolista" alt="">
    </h1>
    
  <?php 
  if (isset($_GET['error']) && $_GET['error'] == 'usuario_existe') {
      echo "<p style='color: red;'>⚠️ El nombre de usuario ya está en uso. Elige otro.</p>";
  }
  ?>

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

    <a href="https://www.macron.com/es/" target="_blanket">
    <img src="https://cdn.worldvectorlogo.com/logos/macron-2.svg" class="macron" alt="">
    </a>
    <a href="https://www.digimobil.es/" target="_blanket">
    <img src="https://bandaancha.eu/s/2kp8/ll/nuevo-logo-digi.webp" class="digi" alt="">
    </a>

</body>
</html>
