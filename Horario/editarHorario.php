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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Horario</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body class="body">
  <br><br>
  <h1>Horario</h1>
  <form action="actualizarHorario.php" method="post">
    <table class="table">

      <?php
      require_once('../conexion.php');
      $idH = ($_POST['Id_horario']);
      $consulta = "SELECT * from horario where id = $idH";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>

        <tr>
          <th>Código Horario</th>
          <td><input type="text" value="<?php echo $mostrar['id']; ?>" disabled></td>
          <input hidden type="text" name="Id_horario" value="<?php echo $mostrar['id']; ?>">
        </tr>

        <tr>
          <th>Días de la Semana</th>
          <td><input type="text" name="Dias_de_semana" value="<?php echo $mostrar['dias']; ?>" required></td>
        </tr>

        <tr>
          <th>Hora</th>
          <td><input type="text" name="Hora" value="<?php echo $mostrar['hora']; ?>" required></td>
        </tr>
    </table>

    <br>
    <input type="submit" value="Actualizar" class="boton">
    <a href="../Horario/buscarEditarHorario.php" class="boton" style="font-size: 13px;">Volver</a>
  </form>
<?php } ?>
</body>

</html>