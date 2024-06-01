<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

    header("Location: ../logAdministracion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image" href="img/UMA.jpg">
    <title>Credenciales</title>
    <style>
        body {
            padding-top: 8rem;
            background-color: #F3F2EE;
            font-size: large;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: black;
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

    require_once('../conexion.php');

    $id_estudiante = $_POST['id'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $consulta = "UPDATE estudiante SET correo = '$correo', contrasena = '$contra' WHERE id = $id_estudiante";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<center>Credenciales asignadas correctamente<br><br><br>";
    }
    ?>
    <a href="../Estudiante/opcionesEstudiante.php" class="boton">Inicio</a>
</body>

</html>