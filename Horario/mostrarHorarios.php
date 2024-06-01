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
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body>
  <br><br>
  <h1>Horarios</h1>
  <table border="2" class="table">
    <tr>
      <td><b>Código</b></td>
      <td><b>Días de la Semana</b></td>
      <td><b>Hora</b></td>
    </tr>

    <?php
    require_once('../conexion.php');
    $consulta = "SELECT * FROM horario";
    $resultado = mysqli_query($conexion, $consulta);
    while ($horario = mysqli_fetch_array($resultado)) {
    ?>
      <tr>
        <td><?php echo $horario['id'] ?></td>

        <td><?php echo $horario['dias'] ?></td>

        <td><?php echo $horario['hora'] ?></td>


      </tr>
    <?php } ?>
  </table>
  <br><br>
  <a href="../Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>