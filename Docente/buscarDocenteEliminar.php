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
  <title>Eliminar Docente</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleBuscar.css">
</head>


<body>
  <div class="contenedor">
    <h1>Buscar Docente para Eliminar</h1>
    <form action="eliminarDocente.php" method="post" onsubmit="return sureFunction()">

      <label for="duiD">
      Ingrese Código del Docente a Eliminar:</label> <br>

      <input type="text" name="id" required><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>
</html>

<script>
function sureFunction() {
  return confirm("Segura/o quiere eliminar al docente? 🤨")
}
</script>