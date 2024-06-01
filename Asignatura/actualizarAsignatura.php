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
	<title>Actualización de Asignatura</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body class="body">

<?php
$Id_asignatura = $_POST['Id_asignatura'];
$Nombre_asignatura=$_POST['Nombre_asignatura'];
$Aula=$_POST['Aula'];
$Id_docente=$_POST['docente'];
$Hora=$_POST['cmbhorario'];

require_once('../conexion.php');

$consulta = "UPDATE asignatura SET asignatura='$Nombre_asignatura', aula='$Aula', id_docente='$Id_docente',id_horario='$Hora' 
WHERE id='$Id_asignatura'";

$resultado= mysqli_query($conexion,$consulta);
if ($resultado) {
echo "Datos actualizados correctamente.";
}
else {
echo "Error al actualizar los datos.";
}
?>
<img src="../img/cat4.gif" alt="Imagen descriptiva">
<a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>
</html>
