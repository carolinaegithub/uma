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
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <title>Ingreso de Carreras</title>
  <link rel="stylesheet" href="../styles/styleIngresar.css">
</head>

<body>

  <div class="contenedor">
        <h1 style="font-family: Tahoma;">Ingrese Carrera</h1><br>
        <form action="registroCarrera.php" method="post">
          <input hidden type="text" name="id">

          <label>Indique la Carrera</label><br>
          <input type="text" name="Nombre_carreras" required>
          </label><br><br>

          <input type="submit" value="Guardar" class="boton">
          <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>
        </form>
      </div>
    </div>
</body>

</html>