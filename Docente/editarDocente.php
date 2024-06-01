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
  <title>Editar Docente</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleEditar.css">
</head>

<body class="body">

  <h1>Docente</h1>
  <form action="actualizarDocente.php" method="post">

    <table class="table">
      <?php
      require_once('../conexion.php');
      $id = ($_POST['id']);
      $consulta = "SELECT * from docente where id = $id";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>

      <input type="text" name="Id_docente" value="<?php echo $mostrar['id']; ?>" hidden>

        <tr>
          <th>Nombres</th>
          <td><input type="text" name="Nombres" value="<?php echo $mostrar['nombres']; ?>" required></td>
        </tr>

        <tr>
          <th>Apellidos</th>
          <td><input type="text" name="Apellidos" value="<?php echo $mostrar['apellidos']; ?>" required></td>
        </tr>

        <tr>
          <th>Sexo</th>
          <td><select name="cmbgenero" required>
            <?php
              $id_sexo = $mostrar['id_sexo'];
              $consulta_genero = "SELECT * FROM sexo ORDER BY (id = $id_sexo), sexo";
              $resultado_genero = mysqli_query($conexion, $consulta_genero);
              while ($mostrar_genero = mysqli_fetch_array($resultado_genero)) {
                echo '<option value="' . $mostrar_genero['id'] . '"' . ($mostrar_genero['id'] == $id_sexo ? ' selected' : '') . '>' 
                . $mostrar_genero['sexo'] . '</option>';
              } ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Titulación</th>
          <td><input type="text" name="Titulacion" value="<?php echo $mostrar['titulacion']; ?>" required></td>
        </tr>


        <tr>
          <th>Facultad</th>
          <td><input type="text" name="Area_especializacion" value="<?php echo $mostrar['facultad']; ?>" required></td>
        </tr>

        <tr>
          <th>Asignatura</th>
          <td><select name="cmbAsignatura" required>
            <?php
              $id_asignatura = $mostrar['id_asignatura'];
              $consulta_asignatura = "SELECT * FROM asignatura ORDER BY (id = $id_asignatura), asignatura";
              $resultado_asignatura = mysqli_query($conexion, $consulta_asignatura);
              while ($mostrar_asignatura = mysqli_fetch_array($resultado_asignatura)) {
                echo '<option value="' . $mostrar_asignatura['id'] . '"' . ($mostrar_asignatura['id'] == $id_asignatura ? ' selected' : '') . '>' 
                . $mostrar_asignatura['asignatura'] . '</option>';
              } ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Télefono</th>
          <td><input type="text" name="Contacto" value="<?php echo $mostrar['contacto']; ?>" required></td>
        </tr>

        <tr>
          <th>DUI</th>
          <td><input type="text" name="DUI" value="<?php echo $mostrar['dui']; ?>" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Actualizar" class="boton">
    <a href="/Docente/buscarEditarDocente.php" class="boton" style="font-size: 13px;">Volver</a>
  </form>

<?php
      }
?>
</table>
</body>

</html>