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
  <title>Mostrar Carreras</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body class="body">
  <h1>Carreras</h1>
  <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Código</b></td>
      <td><b>Carrera</b></td>
    </tr>

    <?php
    require_once('../conexion.php');
    $consulta = "SELECT * FROM carrera";
    $resultado = mysqli_query($conexion, $consulta);
    while ($carrera = mysqli_fetch_array($resultado)) {
    ?>
      <tr>
        <td style=""><?php echo $carrera['id'] ?></td>

        <td><?php echo $carrera['carrera'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br>
  <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>