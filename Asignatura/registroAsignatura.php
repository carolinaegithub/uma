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
    <title> Registro de Datos </title>
	  <link rel="icon" type="image" href="../img/UMA.jpg">
    <link rel="stylesheet" href="../styles/styleRegistrado.css">
  </head>
    
  <body>
    <?php
      require_once('../conexion.php');

      $Nombre_asignatura = $_POST['Nombre_asignatura'];
      $Aula = $_POST['Aula'];
      $Id_docente = $_POST['cmb_docente']; 
      $Id_horario = $_POST['cmb_horario']; 

      $insertarAsignatura = "INSERT INTO asignatura (asignatura, aula, id_docente, id_horario) VALUES ('$Nombre_asignatura', 
      '$Aula', '$Id_docente', '$Id_horario')";

      $resultadoAsignatura = mysqli_query($conexion, $insertarAsignatura);

      if ($resultadoAsignatura) {
        echo "Asignatura registrada correctamente.";
      }else {
        echo "Ocurrió un error al regsistrar la asignatura.";
      }
    ?>
    <img src="../img/cat4.gif" alt="Imagen descriptiva">
    <a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Volver</a>
  </body>
</html>
