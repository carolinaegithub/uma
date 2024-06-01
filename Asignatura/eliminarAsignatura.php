<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asignatura Eliminada</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body class="body">
    <?php
    $idA = $_POST['Id_asignatura'];
    require_once('../conexion.php');
    $eliminar = "DELETE FROM asignatura WHERE id = $idA";
    $resultado = mysqli_query($conexion, $eliminar);
    echo "<h1>Registro eliminado<h1>";
    mysqli_close($conexion);
    ?>
  <img src="../img/cat4.gif" alt="Imagen descriptiva"><br>
  <a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>

</html>