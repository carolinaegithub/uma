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
  <title>Mostrar Docentes</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body class="body">
  <?php
    require_once('../conexion.php');
    $duiD = $_POST['id'];
    $eliminar = "DELETE FROM docente WHERE id = $duiD";
    $resultado = mysqli_query($conexion, $eliminar);
    if (!$resultado) {
      echo "Algo salió al mal";
    }
  ?>
</body>


    <div class="center-div">
      <h1>Docente Eliminado 😢</h1>
      <img src="../img/cat4.gif" alt="Cat Icon"> <br><br>
      <a href="/Docente/mostrarDocentes.php" class="boton" style="font-size: 13px;">Mostrar</a>
      <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Inicio</a>
    </div>

 

</html>