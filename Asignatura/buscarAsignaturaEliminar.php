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
    <h1>Consulta Tabla Asignatura</h1>
    <form action="eliminarAsignatura.php" method="post" onsubmit="return sureFunction()">
      <label for="idA">
      Ingrese Código de la Asignatura:</label>
      <br>
      <input type="text" name="Id_asignatura" required><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="/Asignatura/opcionesasignatura.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>
</html>

<script>
  function sureFunction() {
    return confirm("Segura/o quiere eliminar la Asignatura? 🤨")
  }
</script>