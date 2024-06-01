<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceder a Administración</title>
	<link rel="icon" type="image" href="img/UMA.jpg">
    <style>
        body {
            font-family: Tahoma;
            background-color: #F3F2EE;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .contenedor {
            border-radius: 30px;
            background-color: #CCBAB5;
            width: 60%;
            margin: auto;
            text-align: center;
            padding: 40px;
            border: 2px solid #1D1D1D;
            position: absolute;
            display: flex;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .contenedor-izquierdo {
            background-color: #FFFEF6;
            width: 300px;
            padding: 20px;
            border-radius: 30px;
        }

        .contenedor-izquierdo img {
            max-width: 100%;
        }

        .contenedor-derecho {
            flex-grow: 1;
        }

        input[type="text"],
        input[type="password"] {
            background-color: #FCF4FF;
            border-radius: 20px;
            border: 2px solid #BD8EA5;
            font-family: verdana;
            width: 90%;
            padding: 10px;
            box-sizing: border-box;
        }
        .boton {
          background-color: #F3F2EE;
          border: 1px solid #BD8EA5;
          color: #BD8EA5;
          padding: 10px 20px;
          border-radius: 20px;
          cursor: pointer;
          border: 2px solid;
          transition: all 1s ease;
          position: relative;
          border-radius: 30px;
        }
        .boton:hover {
          background: #CCBAB5;
          color: #fff !important;
        }

        @media (max-width: 750px) {
            .contenedor {
                flex-direction: column; 
                width: 70%; 
            }

            .contenedor-izquierdo {
                max-width: 85%;
            }
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <div class="contenedor-izquierdo">
            <img src="img/cat4.gif">
        </div>
        <div class="contenedor-derecho">
             <form method="post" action="autenticar.php">
                <br>
                <h1>Ingrese sus Datos</h1><br>

                <label for="usuario">Correo:</label>
                <br>
                <input type="text" name="correo" required><br>
                <br>
                <label for="contrasena">Contraseña:</label>
                <br>
                <input type="password" name="contrasena" required><br>
                <br><br>
                <input type="submit" value="Iniciar Sesión" class="boton">
            </form>
        </div>
    </div>
</body>

</html>