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
  <title>Editar Nacionalidad</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body>
  <br><br><br><br>
  <h1>Carrera</h1>
  <form action="actualizarNacionalidad.php" method="post">
    <table class="table">
      <?php
      require_once('../conexion.php');
      $idN = ($_POST['Id_nacionalidad']);
      $consulta = "SELECT * from nacionalidad where id = $idN";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <th>Código Nacionalidad</th>
          <td><input type="text" name="id_nacionalidad" value="<?php echo $mostrar['id']; ?>" required></td>
        </tr>

        <tr>
          <th>Nacionalidad</th>
          <td><input type="text" name="Nombre_nacionalidad" value="<?php echo $mostrar['nacionalidad']; ?>" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Actualizar" class="boton">
  </form>
<?php } ?>
</table>
</body>

</html>