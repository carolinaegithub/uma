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
	<title>Actualización de Horario</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body>
<?php
require_once('../conexion.php');

$Id_horario = $_POST['Id_horario'];
$Dias_de_semana=$_POST['Dias_de_semana'];
$Hora=$_POST['Hora'];

$consulta = "UPDATE horario SET dias='$Dias_de_semana', hora='$Hora' WHERE id = '$Id_horario'";

$resultado= mysqli_query($conexion,$consulta);
if ($resultado) {
echo "Datos actualizados correctamente.";
}
else {
echo "Error al actualizar los datos.";
}
mysqli_close($conexion);
?>
<img src="../img/cat4.gif" alt="Imagen descriptiva">
<a href="../Horario/opcionesHorario.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>
</html>

