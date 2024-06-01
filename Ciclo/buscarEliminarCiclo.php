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
  <title>Buscar Ciclo</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>

<body>
  <div class="contenedor">
    <h1>Buscar Ciclo a Eliminar</h1>
    <form action="eliminarCiclo.php" method="post" onsubmit="return sureFunction()">
      <label for="idCI">
      Ingrese Código del Ciclo:</label>
      <br>
      <input type="text" id="Id_ciclo" name="Id_ciclo" required><br><br>
      <a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
      <input type="submit" value="Eliminar" class="boton">
    </form>
</body>
</html>

<script>
  function sureFunction() {
    return confirm("Segura/o quiere eliminar el Ciclo? 🤨")
  }
</script>