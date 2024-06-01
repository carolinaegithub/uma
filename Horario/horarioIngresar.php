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
  <title>Ingreso de Horarios</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleIngresar.css">
</head>

<body>
  <br><br><br><br><br><br>
  <div class="contenedor">
        <h1>Ingrese Horario</h1><br>
        <form action="registroHorario.php" method="post" enctype="multipart/form-data">

          <label>Indique los Días de la Semana</label><br>
          <input type="text" name="Dias_de_semana" required>
          </label><br><br>

          <label>Indique la hora</label><br>
          <input type="text" name="Hora" required><br><br>

          <input type="submit" value="Guardar" class="boton">
          <a href="../Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Inicio</a>
        </form>
      </div>
    </div>
</body>

</html>