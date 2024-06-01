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
	<title>Actualización Turno</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body>

<?php
require_once('../conexion.php');

$Id_turno = $_POST['Id_turno'];
$Nombre_turno=$_POST['Nombre_turno'];

$consulta = "UPDATE turno SET turno='$Nombre_turno' WHERE id='$Id_turno'";

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
<a href="/Turno/opcionesTurno.php" class="boton" style="font-size: 15px;">Volver</a>
</body>
</html>
