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
    <title>Registro de Datos</title>
    <link rel="icon" type="image" href="../img/UMA.jpg">
    <link rel="stylesheet" href="../styles/styleRegistrado.css">
  </head>
  
  <body>
    <?php
      require_once('../conexion.php');

      $Nombre_turno= $_POST['Nombre_turno'];

      $insertarTurno = "INSERT INTO turno (turno) VALUES ('$Nombre_turno')";

      $resultadoTurno = mysqli_query($conexion, $insertarTurno);

      if ($resultadoTurno) {
        echo "Turno registrado correctamente.";
      }else {
        echo "Turno un error al regsistrar la carrera.";
      }
    ?>
    <img src="../img/cat4.gif" alt="Imagen descriptiva">
    <a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 13px;">Volver</a>
  </body>
</html>
