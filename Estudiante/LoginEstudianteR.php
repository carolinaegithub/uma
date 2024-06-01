<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: rgb(189, 142, 165);
            background: radial-gradient(circle, rgba(189, 142, 165, 1) 0%, rgba(204, 186, 181, 1) 100%);
            font-family: Tahoma, sans-serif;
            font-size: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        img {
            width: 300px;
            height: 300px;
            margin-top: 30px;
        }

        input[type="submit"] {
            background-color: #FCF4FF;
            border-radius: 20px !important;
            border: 1px solid #CD4662;
            font-family: verdana;
            width: 100% !important;
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
    </style>
</head>
<body>
    <?php

    session_start();

    require_once('../conexion.php');

    $correo = $_POST['correo'];
    $contrasena = $_POST['contra'];

    $consulta = "SELECT contrasena FROM estudiante WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $consulta);
    $estudiante = mysqli_fetch_array($resultado);

   if ($estudiante) {
    if ($contrasena === $estudiante['contrasena']) {
        $_SESSION['correo'] = $correo;
        header('Location: completarPerfil.php');
        exit;
    }else {
        echo "Ocurrió un problema al hacer el inicio de sesión.";
        echo '<img src="../img/cat4.gif" alt="Imagen descriptiva">
        <form action="LoginEstudiante.php">
            <input type="submit" value="Inicio" class="boton">
        </form>';
    }
   } else {
    echo "Ingresa un email valido";
   }
    ?>
</body>
</html>
