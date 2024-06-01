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
    <h1>Eliminar Nacionalidad </h1>
    <form action="eliminarNacionalidad.php" method="post" onsubmit="return sureFunction()">
      <label for="idN"></label>
      Ingrese Código de la Nacionalidad:
      <br><br>
      <input type="text" name="id_nacionalidad" required><br><br>
      <input type="submit" value="Eliminar" class="boton">
      <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Volver</a>
    </form>
</body>

</html>

<script>
  function sureFunction() {
    return confirm("Segura/o quiere eliminar la Nacionalidad? 🤨")
  }
</script>