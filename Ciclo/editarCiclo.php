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
  <title>Editar Ciclo</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body>
  <h1>Carrera</h1>
  <form action="actualizarCiclo.php" method="post">
    <table class="table">
      <?php
      require_once('../conexion.php');
      $idCI = ($_POST['Id_ciclo']);
      $consulta = "SELECT * FROM ciclo WHERE id = $idCI";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <th>Código Ciclo</th>
          <td><input type="text" name="Id_ciclo" value="<?php echo $mostrar['id']; ?>" disabled></td>
          <input hidden type="text" name="Id_ciclo" value="<?php echo $mostrar['id']; ?>">
        </tr>

        <tr>
          <th>Ciclo</th>
          <td><input type="text" name="Nombre_ciclo" value="<?php echo $mostrar['ciclo']; ?>" required></td>
        </tr>
    </table> <br>
    <a href="/Ciclo/buscarEditarCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
    <input type="submit" value="Actualizar" class="boton">
  </form>
<?php } ?>
</body>

</html>