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
  <title>Editar Turno</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body>
  <br><br><br>
  <h1>Turno</h1>
  <form action="actualizarTurno.php" method="post">
    <table class="table">
      <?php
      require_once('../conexion.php');
      $idT = ($_POST['Id_turno']);
      $consulta = "SELECT * FROM turno WHERE id = $idT";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <th>Código Turno</th>
          <td><input type="text" name="Id_turno" value="<?php echo $mostrar['id']; ?>" disabled></td>
          <input hidden type="text" name="Id_turno" value="<?php echo $mostrar['id']; ?>">
        </tr>

        <tr>
          <th>Turno</th>
          <td><input type="text" name="Nombre_turno" value="<?php echo $mostrar['turno']; ?>"></td>
        </tr>

    </table>

    <br>

    <input type="submit" value="Actualizar" class="boton">
    <a href="/Turno/buscarEditarTurno.php" class="boton" style="font-size: 13px;">Volver</a>

  </form>

<?php
      }
?>
</table>
</body>

</html>