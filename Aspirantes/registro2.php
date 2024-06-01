<?php

session_start();

require_once("../conexion.php");

$id_estudiante     = $_SESSION['Id_estudiante'];

$Id_carrera       = $_POST['Cmb_carrera'];
$Id_nacionalidad  = $_POST['Cmb_nacinalidad'];
$Telefono         = $_POST['Telefono'];
$Id_departamento  = $_POST['Cmb_departamento'];
$Direccion        = $_POST['Dirección'];

$errores = [];

if (strlen($Telefono) !== 8 || !ctype_digit($Telefono)) {
    $errores[] = "<p>El numero de teléfono debe contener 8 números</p>";
} else {
    // Realizamos la consulta

    $insertarEstudinte = "UPDATE estudiante SET id_carrera = '$Id_carrera', id_nacionalidad = '$Id_nacionalidad', Telefono = '$Telefono', id_departamento = '$Id_departamento',
    direccion = '$Direccion' WHERE id = $id_estudiante";

    $resultadoEstudiante = mysqli_query($conexion, $insertarEstudinte);

    if ($resultadoEstudiante) {
        header("Location:estudianteRegistrado.php");
    }else {
        echo "Ocurrió un error al registrar al Estudiante 😥";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion invalida</title>
	  <link rel="icon" type="image" href="../img/UMA.jpg">
    <style>
    body {
      font-family: Tahoma;
      background-color: #BD8EA5;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column; 
      padding-top: 205px;
    }

    .errores-container {
      margin-top: 20px; /* Añadido margen superior para separar del contenido anterior */
      text-align: center; /* Centra el contenido horizontalmente */
    }

    .errores-container ul {
      list-style-type: none; /* Quita los estilos de la lista */
      padding: 0; /* Quita el padding por defecto */
    }

    .errores-container ul li {
      color: #fff;
    }


    input,
    select {
      background-color: #FCF4FF;
      border-radius: 20px;
      border: 1px solid #CD4662;
      font-family: verdana;
      width: 70%;
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
      border-radius: 30px;
      text-decoration: none;
      margin-left: auto;
      margin-right: auto;
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }
  </style>
</head>
<body>
<div class="errores-container">
        <?php
        if (!empty($errores)) {
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
    <a href="form1.php" class="boton">Volver ⬅️</a>
</body>
</html>