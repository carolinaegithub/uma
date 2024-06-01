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
  <title>Buscar Nacionalidad</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
  <div class="contenedor">
    <h1>Nacionalidad a Editar</h1>
    <form action="editarNacionalidad.php" method="post">
      <label for="idN">
      Ingrese Código de la Nacionalidad:</label>
      <br>
      <input type="text" name="Id_nacionalidad" required><br><br>
      <input type="submit" value="Editar" class="boton">
      <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>