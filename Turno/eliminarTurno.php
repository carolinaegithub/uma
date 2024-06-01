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
  <title>Mostrar Turno</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body>
  <?php
    require_once('../conexion.php');

    $idT = $_POST['Id_turno'];
    $eliminar = "DELETE FROM turno WHERE id = $idT";
    $resultado = mysqli_query($conexion, $eliminar);
    echo "<h2>Registro eliminado<h2>";
    mysqli_close($conexion);
  ?>
  <img src="../img/cat4.gif" alt="Imagen descriptiva"><br>
  <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 12px;">Volver</a>
</body>

</html>