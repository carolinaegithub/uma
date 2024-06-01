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
  <title>Editar Carrera</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body>
  <h1>Carrera</h1>
  <form action="actualizarCarrera.php" method="post">
    <table class="table">
      <?php
      require_once('../conexion.php');
      $idC = ($_POST['id']);
      $consulta = "SELECT * FROM carrera WHERE id = $idC";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>

        <tr>
          <th>Código Carrera</th>
          <td><input type="text" name="Id_carreras" value="<?php echo $mostrar['id']; ?>" disabled></td>
          <input hidden type="text" name="Id_carreras" value="<?php echo $mostrar['id']; ?>">
        </tr>

        <tr>
          <th>Carrera</th>
          <td><input type="text" name="Nombre_carreras" value="<?php echo $mostrar['carrera']; ?>" required></td>
        </tr>

    </table>

    <br>
    <a href="/Carrera/buscarCarreraEditar.php" class="boton" style="font-size: 13px;">Volver</a>
    <input type="submit" value="Actualizar" class="boton">
  </form>
<?php } ?>
</table>
</body>

</html>