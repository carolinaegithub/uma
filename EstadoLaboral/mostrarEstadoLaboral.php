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
  <title>Estado Laboral</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body>
  <br><br><br><br>
  <h1>Estado Laboral</h1>
  <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Código Estado Laboral</b></td>
      <td><b>Estado Laboral</b></td>
    </tr>
    <?php
    require_once('../conexion.php');
    $consulta_EC = "SELECT * FROM estado_laboral";
    $resultado_EC = mysqli_query($conexion, $consulta_EC);
    while ($EC = mysqli_fetch_array($resultado_EC)) {
    ?>
      <tr>
        <td><?php echo $EC['id'] ?></td>
        <td><?php echo $EC['estado_laboral'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <a href="/dashboard.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>