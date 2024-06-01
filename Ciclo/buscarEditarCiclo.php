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
      <h1>Consulta Tabla Ciclo</h1>
      <form action="editarCiclo.php" method="post">
        <label for="idCI">
        Ingrese Código del Ciclo:</label>
        <br>
        <input type="text" name="Id_ciclo" required><br><br>
        <a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
        <input type="submit" value="Editar" class="boton">
      </form>
  </body>

</html>