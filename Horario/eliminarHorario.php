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
  <title>Mostrar Horarios</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body>
    <?php
    require_once('../conexion.php');

    $idH = $_POST['Id_horario'];
    $eliminar = "DELETE FROM horario WHERE id = $idH";
    $resultado = mysqli_query($conexion, $eliminar);
    echo "<h1>Registro eliminado<h1>";
    mysqli_close($conexion);
    ?>
</body>
<img src="../img/cat4.gif" alt="Imagen descriptiva"><br>
<a href="/Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Volver</a>

</html>