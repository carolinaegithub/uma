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
  <title>Ingresar Nacionalidad</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleIngresar.css">
</head>

<body>
  <br><br><br><br>
  <div class="contenedor">
    <h1>Ingrese Nueva Nacionalidad</h1>
    <form action="registroNacionalidad.php" method="post">
      <label>Ingrese la Nacionalidad</label><br><br>
      <input type="text" name="Nombre_nacionalidad" required><br><br>
      <input type="submit" value="Guardar" class="boton">
      <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Inicio</a>
    </form>
</body>
</html>