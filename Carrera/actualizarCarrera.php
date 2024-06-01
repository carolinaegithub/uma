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
	<title>Actualización de Carrera</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body>

<?php
require_once('../conexion.php');
$Id_carreras = $_POST['Id_carreras'];
$Nombre_carreras=$_POST['Nombre_carreras'];

$consulta = "UPDATE carrera SET carrera = '$Nombre_carreras' WHERE id = '$Id_carreras'";

$resultado= mysqli_query($conexion,$consulta);
if ($resultado)
{
echo "Datos actualizados correctamente.";
}
else
{
echo "Error al actualizar los datos.";
}
mysqli_close($conexion);
?>
<img src="../img/cat4.gif" alt="Imagen descriptiva">
<a href="/Carrera/opcionesCarrera.php" class="boton" style="font-size: 15px;">Volver</a>
</body>
</html>
