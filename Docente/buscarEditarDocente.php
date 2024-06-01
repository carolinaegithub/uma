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
  <title>Buscar Docente</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
  <div class="contenedor">
    <h1>Buscar Docente para Editar</h1>
    <form action="editarDocente.php" method="post">
      <label for="duiD">
      Ingrese el Código del Docente:</label>
      <br>
      <input type="text" name="id" required><br><br>
      <input type="submit" value="Mostrar" class="boton">
      <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>