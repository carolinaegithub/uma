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
    <h1>Consulta Tabla Carreras</h1>
    <form action="eliminarCarrera.php" method="post" onsubmit="return sureFunction()">
      <label for="idC">
      Ingrese Código de la Carrera:</label>
      <br>
      <input type="text" id="Id_carreras" name="Id_carreras" required><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>
</html>

<script>
function sureFunction() {
  return confirm("Segura/o quiere eliminar la Carrera? 🤨")
}
</script>