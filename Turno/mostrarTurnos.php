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
  <title>Mostra Datos Turno</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>
</head>

<body>
  <br><br>
  <h1>Turno</h1>
  <table class="table">
    <tr class="bg-pink">
      <td><b>Código Turno</b></td>
      <td><b>Turno</b></td>
    </tr>
      <?php
      require_once('../conexion.php');
      $consulta = "SELECT * from turno";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>
    <tr>
      <td><?php echo $mostrar['id'] ?></td>
      <td><?php echo $mostrar['turno'] ?></td>
    </tr>
    </p>
  <?php } ?>
  </table>
  <br><br>
  <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>