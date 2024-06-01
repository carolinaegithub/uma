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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Turno</title>
  <link rel="stylesheet" href="../styles/styleIngresar.css">
	<link rel="icon" type="image" href="../img/UMA.jpg">
</head>

<body>
  <br><br><br>
  <div class="contenedor">
    <h1>Turno</h1><br>
    <form action="registroTurno.php" method="post">
      <label>Indique el Turno </label><br><br>
      <input type="text" name="Nombre_turno" required>
      <br><br>
      <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 13px;">Volver</a>
      <input type="submit" value="Guardar" class="boton">
    </form>
  </div>
</table>
</body>

</html>