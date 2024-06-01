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
  <title>Eliminar Estudiante</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      background-color: #FADEFF;
      text-align: center;
      font-family: verdana;
      align-content: center;
    }

    .table {
      width: 80%;
      border-collapse: collapse;
      background-color: #FFFDF6;
      margin: 0 auto;
    }

    .table th {
      padding: 8px;
      text-align: left;
      border: 1px solid #530C45;
      width: 40%;
    }

    .table td {
      padding: 8px;
      text-align: left;
      border: 1px solid #530C45;
      width: 40%;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"],
    select {
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

    @media only screen and (max-width: 600px) {

      .table th,
      .table td {
        font-size: 12px;
      }
    }
  </style>
</head>

<body class="body">

  <br><br><br><br><br>
  <?php
  require_once('../conexion.php');
  $id = $_POST['id'];
  $consulta = "DELETE FROM estudiante WHERE id = $id";
  $resultado = mysqli_query($conexion, $consulta);
  if ($resultado) {
    echo "Estudiante eliminado correctamente 😔";
  } else {
    echo "El Estudiante no se eliminó. 😛";
  }
  ?>

  <br>
  <img src="../img/cat4.gif" alt="Imagen descriptiva">
  <form action="opcionesEstudiante.php">
    <input type="submit" value="Inicio" class="boton">
  </form>
</body>

</html>