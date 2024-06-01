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
        $Nombre_carreras = $_POST['Nombre_carreras'];

        $insertarCarrera = "INSERT INTO carrera (carrera) VALUES ('$Nombre_carreras')";

        $resultadoCarrera = mysqli_query($conexion, $insertarCarrera);

        if ($resultadoCarrera) {
            echo "Carrera registrada correctamente.";
        }else {
            echo "Ocurrió un error al regsistrar la carrera.";
        }
?>
    <img src="../img/cat4.gif" alt="Imagen descriptiva">
    <a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 13px;">Volver</a>
    </body>
</html>
