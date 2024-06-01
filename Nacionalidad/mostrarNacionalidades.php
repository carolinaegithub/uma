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
  <title>Mostrar Nacionalidad</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body>
  <h1>Nacionalidad</h1>
  <table class="table" border="2">
    <tr class="bg-pink">
      <td><b>Código Nacionalidad</b></td>
      <td><b>Nacionalidad</b></td>
    </tr>
    <?php
    require_once('../conexion.php');
    $consulta_nacionalidad = "SELECT * FROM nacionalidad";
    $resultado_nacionalidad = mysqli_query($conexion, $consulta_nacionalidad);
    while ($nacionalidad = mysqli_fetch_array($resultado_nacionalidad)) {
    ?>
      <tr>
        <td><?php echo $nacionalidad['id'] ?></td>
        <td><?php echo $nacionalidad['nacionalidad'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br><br>
  <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>