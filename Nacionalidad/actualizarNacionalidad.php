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
	<title>Actualización de Carrera</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

  <body>
    <?php
      require_once('../conexion.php');

      $Id_nacionalidad = $_POST['id_nacionalidad'];
      $Nombre_nacionalidad=$_POST['Nombre_nacionalidad'];

      $consulta = "UPDATE nacionalidad SET nacionalidad='$Nombre_nacionalidad' WHERE id='$Id_nacionalidad'";

      $resultado= mysqli_query($conexion,$consulta);
      if ($resultado) {
        echo "Datos actualizados correctamente.";
      }
      else {
        echo "Error al actualizar los datos.";
      }
      mysqli_close($conexion);
    ?>
  <img src="../img/cat4.gif" alt="Imagen descriptiva">
  <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>
</html>
