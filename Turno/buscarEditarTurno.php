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
  <body>
    <div class="contenedor">
      <h1>Consulta Tabla Turnos</h1>
      <form action="editarTurno.php" method="post">
        <label for="idT">
        Ingrese Código del Turno:</label>
        <br>
        <input type="text" name="Id_turno" required><br><br>
        <input type="submit" value="Editar" class="boton">
        <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 13px;">Volver</a>
      </form>
  </body>

</html>