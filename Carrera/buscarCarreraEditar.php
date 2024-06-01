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
  <title>Buscar Carrera</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>


  <body>
    <div class="contenedor">
      <h1>Buscar Carrera a Editar</h1>
      <form action="editarCarrera.php" method="post">

        <label for="idC">
        Ingrese Código de la Carrera:</label> <br>

        <input type="text" name="id" required><br><br>
        <input type="submit" value="Mostrar" class="boton">
        <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>

      </form>
  </body>

</html>