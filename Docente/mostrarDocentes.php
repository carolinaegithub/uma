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
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <title>Mostrar Docentes</title>
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>


<body class="body">

  <h1>Docentes</h1>
  <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Nombres</b></td>
      <td><b>Apellido</b></td>
      <td><b>Género</b></td>
      <td><b>Titulación </b></td>
      <td><b>Facultad</b></td>
      <td><b>Asignatura</b></td>
      <td><b>DUI</b></td>
      <td><b>Contacto</b></td>
      <td><b>Código</b></td>

    </tr>

    <?php
    require_once('../conexion.php');
    $consulta = "SELECT * FROM docente";
    $resultado = mysqli_query($conexion, $consulta);
    while ($docente = mysqli_fetch_array($resultado)) {
    ?>
      <tr>

        <td><?php echo $docente['nombres'] ?></td>

        <td><?php echo $docente['apellidos'] ?></td>

        <td><?php $id_genero = $docente['id_sexo'];
            $consulta_genero = "SELECT sexo FROM sexo WHERE id = $id_genero";
            $resultado_genero = mysqli_query($conexion, $consulta_genero);
            $mostrar_genero = mysqli_fetch_array($resultado_genero);
            echo $mostrar_genero['sexo']; ?>
        </td>

        <td><?php echo $docente['titulacion'] ?></td>

        <td><?php echo $docente['facultad'] ?></td>

        <td><?php $id_asignatura = $docente['id_asignatura'];
            $consulta_asignatura = "SELECT asignatura FROM asignatura WHERE id = $id_asignatura";
            $resultado_asignatura = mysqli_query($conexion, $consulta_asignatura);
            $mostrar_asignatura = mysqli_fetch_array($resultado_asignatura);
            echo $mostrar_asignatura['asignatura']; ?>
        </td>

        <td><?php echo $docente['dui'] ?></td>
        
        <td><?php echo $docente['contacto'] ?></td>

        <td class="codigo"><?php echo $docente['id'] ?></td>

      </tr>
    <?php } ?>
  </table>
  <br>
  <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>