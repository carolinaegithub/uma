<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso de Ciclo</title>
  <link rel="stylesheet" href="../styles/styleIngresar.css">
	<link rel="icon" type="image" href="../img/UMA.jpg">
</head>

<body>
  <div class="contenedor">
    <h1>Ingrese Ciclo</h1><br>
    <form action="registroCiclo.php" method="post">
      <label>Indique el Ciclo</label><br>
      <input type="text" name="Nombre_ciclo" required>
      <br><br>
      <a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
      <input type="submit" value="Guardar" class="boton">
    </form>
  </div>
</body>

</html>