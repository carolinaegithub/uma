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
  <title>Buscar Asignatura</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
    <div class="contenedor">
      <h1>Buscar Asignatura a Editar</h1>
      <form action="editarAsignatura.php" method="post">
        <label for="idA">
        Ingrese Código de la Asignatura:</label>
        <br>
        <input type="text" name="Id_asignatura" required><br><br>
        <input type="submit" value="Editar" class="boton">
        <a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Volver</a>
      </form>
  </body>

</html>