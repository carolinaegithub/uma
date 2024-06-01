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
  <title>Mostrar Asignaturas</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body class="body">

  <h1>Asignaturas</h1>
  <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Asignatura</b></td>
      <td><b>Docente</b></td>
      <td><b>Horario</b></td>
      <td><b>Aula</b></td>
      <td><b>Código</b></td>
    </tr>

    <?php
    require_once('../conexion.php');
    $consulta = "SELECT * FROM asignatura";
    $resultado = mysqli_query($conexion, $consulta);
    while ($asignatura = mysqli_fetch_array($resultado)) {
    ?>
      <tr>

        <td><?php echo $asignatura['asignatura'] ?></td>


        <td><?php $id_docente = $asignatura['id_docente'];
            $consulta_docente = "SELECT CONCAT(nombres, ' ', apellidos) FROM docente WHERE id = $id_docente";
            $resultado_docente = mysqli_query($conexion, $consulta_docente);
            $mostrar_docente = mysqli_fetch_array($resultado_docente);
            echo $mostrar_docente[0]; ?></td>

        <td><?php $id_horario = $asignatura['id_horario'];
            $consulta_horario = "SELECT hora FROM horario WHERE id = $id_horario";
            $resultado_horario = mysqli_query($conexion, $consulta_horario);
            $mostrar_horario = mysqli_fetch_array($resultado_horario);
            echo $mostrar_horario['hora']; ?>
        </td>

        <td><?php echo $asignatura['aula'] ?></td>
        <td class="codigo"><?php echo $asignatura['id'] ?></td>


      </tr>
    <?php } ?>
  </table><br><br>
  <a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Volver</a>
  <br><br><br>
</body>

</html>