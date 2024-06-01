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
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <title>Mostrar Carreras</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body>
    <?php
    require_once('../conexion.php');
    $idC = $_POST['Id_carreras'];
    $eliminar = "DELETE FROM carrera WHERE id = $idC";
    $resultado = mysqli_query($conexion, $eliminar);
    echo "<h1>Registro eliminado<h1>";
    mysqli_close($conexion); ?>
  <br>
  <img src="../img/cat4.gif" alt="Cat Icon"> <br><br>
  <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>