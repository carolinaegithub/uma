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
  <title>Buscar Horario</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
  <div class="contenedor">
    <h1>Buscar Horario</h1>
    <form action="editarHorario.php" method="post">
      <label for="idH">
      Ingrese Código del Horario a Editar:</label>
      <br>
      <input type="text" name="Id_horario" required><br><br>
      <input type="submit" value="Editar" class="boton">
      <a href="../Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>