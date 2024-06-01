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
  <div class="contenedor">
    <h1>Buscar para Eliminar Horario</h1>
    <form action="eliminarHorario.php" method="post" onsubmit="return sureFunction()">
      <label for="idH">
      Ingrese el Código:</label>
      <br>
      <input type="text" id="Id_horario" name="Id_horario"><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="../Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>

<script>
  function sureFunction() {
    return confirm("Segura/o quiere eliminar el Horario? 🤨");
  }
</script>