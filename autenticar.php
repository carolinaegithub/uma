<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticar</title>
    <style>
        body {
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(255, 182, 182, 1) 100%);
            font-family: Tahoma, sans-serif;
            font-size: 25px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .boton {
      background-color: #F3F2EE;
      border: 1px solid #BD8EA5;
      color: #BD8EA5;
      font-size: 20px;
      padding: 10px 20px;
      border-radius: 20px;
      cursor: pointer;
      border: 2px solid;
      transition: all 1s ease;
      position: relative;
      border-radius: 30px;
      text-decoration: none;
    }
    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }
    </style>
</head>


<body>
    <?php

    require_once 'config.php';

    $usuario = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena) {
        session_start();
        $_SESSION['correo'] = $usuario;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.<br><br>";
        echo "<a href='/logAdministracion.php' class='boton'>Inicio</a>";
    }

    ?>
</body>