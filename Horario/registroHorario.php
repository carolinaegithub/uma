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

  $Dias_de_semana = $_POST['Dias_de_semana'];
  $Hora = $_POST['Hora'];

  $insertarHorario = "INSERT INTO horario (dias, hora) VALUES ('$Dias_de_semana', '$Hora')";

  $resultadoHorario = mysqli_query($conexion, $insertarHorario);

  if ($resultadoHorario) {
    echo "Horario registrado correctamente.";
  } else {
    echo "Ocurrió un error al regsistrar el horario.";
  }


  ?>
  <img src="../img/cat4.gif" alt="Imagen descriptiva">
  <a href="/Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>

</html>