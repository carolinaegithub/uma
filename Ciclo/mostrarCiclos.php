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
  <title>Mostrar Ciclos</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body>
  <br><br><br><br>
  <h1>Ciclos</h1>
  <table class="table" border="2">
    <tr class="bg-pink">
      <td><b>Código</b></td>
      <td><b>Ciclo</b></td>
    </tr>
    <?php
    require_once('../conexion.php');
    $consulta_ciclo = "SELECT * FROM ciclo";
    $resultado_ciclo = mysqli_query($conexion, $consulta_ciclo);
    while ($ciclo = mysqli_fetch_array($resultado_ciclo)) {
    ?>
      <tr>
        <td><?php echo $ciclo['id'] ?></td>
        <td><?php echo $ciclo['ciclo'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>