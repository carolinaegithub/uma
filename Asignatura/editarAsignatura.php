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
  <title>Editar Asignatura</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>


<body class="body">
  <br><br><br>
  <h1>Asignatura</h1>
  <form action="actualizarAsignatura.php" method="post">
    <table class="table">
      <?php
      require_once('../conexion.php');
      $idA = ($_POST['Id_asignatura']);
      $consulta = "SELECT * from asignatura where id = $idA";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>

        <tr>
          <th>Código Asignatura</th>
          <td><input type="text" name="Id_asignatura" value="<?php echo $mostrar['id']; ?>" disabled></td>
          <input hidden type="text" name="Id_asignatura" value="<?php echo $mostrar['id']; ?>">
        </tr>

        <tr>
          <th>Asignatura</th>
          <td><input type="text" name="Nombre_asignatura" value="<?php echo $mostrar['asignatura']; ?>" required></td>
        </tr>

        <tr>
          <th>Aula</th>
          <td><input type="text" name="Aula" value="<?php echo $mostrar['aula']; ?>" required></td>
        </tr>

        <tr>
          <th>Docente</th>
          <td><select name="docente" required>
              <?php
              $docente = $mostrar['id_docente'];
              $consulta_docente = "SELECT * FROM docente ORDER BY (id = $docente), nombres ASC";
              $resultado_docente = mysqli_query($conexion, $consulta_docente);
              while ($mostrar_docente = mysqli_fetch_array($resultado_docente)) {
                echo '<option value="' . $mostrar_docente['id'] . '"' . ($mostrar_docente['id'] == $docente ? ' selected' : '') 
                . '>' . $mostrar_docente['nombres'] . ' ' . $mostrar_docente['apellidos'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Horario</th>
          <td><select name="cmbhorario" required>
              <?php
              $horario = $mostrar['id_horario'];
              $consulta_horario = "SELECT * FROM horario ORDER BY (id = $horario), hora ASC";
              $resultado_horario = mysqli_query($conexion, $consulta_horario);
              while ($mostrar_horario = mysqli_fetch_array($resultado_horario)) {
                echo '<option value="' . $mostrar_horario['id'] . '"' . ($mostrar_horario['id'] == $horario ? ' selected' : '') 
                . '>' . $mostrar_horario['hora'] . ' ' . $mostrar_horario['dias'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Actualizar" class="boton">
    <a href="/Asignatura/buscarAsignaturaEditar.php" class="boton" style="font-size: 13px;">Volver</a>
  </form>
<?php } ?>
</body>

</html>