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
	<title>Actualización de Ciclos</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body>

<?php
require_once('../conexion.php');

$Id_ciclo = $_POST['Id_ciclo'];
$Nombre_ciclo=$_POST['Nombre_ciclo'];

$consulta = "UPDATE ciclo SET ciclo = '$Nombre_ciclo' WHERE id = '$Id_ciclo'";

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
<a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 15px;">Volver</a>
</body>
</html>
