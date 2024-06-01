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
  <title>Buscar Turno</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
  <div class="contenedor">
    <h1>Turno a Eliminar</h1>
    <form action="eliminarTurno.php" method="post" onsubmit="return sureFunction()">
      <label for="idT"></label>
      Ingrese Código del Turno:
      <br>
      <input type="text" name="Id_turno" required><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>

<script>
  function sureFunction() {
    return confirm("Segura/o quiere eliminar el Turno? 🤨")
  }
</script>