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
  <title>Departamentos</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body>
  <h1>Departamentos</h1>
  <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Código Departamento</b></td>
      <td><b>Departamento</b></td>
    </tr>
    <?php
    require_once('../conexion.php');
    $consulta_departamentos = "SELECT * FROM departamento";
    $resultado_departamentos = mysqli_query($conexion, $consulta_departamentos);
    while ($departamento = mysqli_fetch_array($resultado_departamentos)) {
    ?>
      <tr>
        <td><?php echo $departamento['id'] ?></td>
        <td><?php echo $departamento['departamento'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br><br>
  <a href="/dashboard.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>