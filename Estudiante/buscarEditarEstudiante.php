<?php
 session_start();

 // Comprueba si ha iniciado sesión
 if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
 }
?>
<html>

<head>
  <title>Buscar Estudiante</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      font-family: Tahoma;
      background-color: #BD8EA5;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .contenedor {
      border-radius: 30px;
      background-color: #F3F2EE;
      width: 800px;
      margin: auto;
      text-align: center;
      padding: 20px;
      border: 2px solid #000000;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    input[type="text"] {
      background-color: #FCF4FF;
      border-radius: 20px;
      border: 1px solid #CCBAB5;
      font-family: verdana;
      width: 60%;
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
      text-decoration: none;
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <h1>Buscar para Editar Estudiante</h1>
    <form action="editarEstudiante.php" method="post">
      <label for="id"></label>
      Ingrese código del Estudiante:
      <br>
      <input type="text" name="id" required><br><br>
      <input type="submit" value="Editar" class="boton">
      <a href="/Estudiante/opcionesEstudiante.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>