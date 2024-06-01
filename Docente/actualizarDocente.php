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
	<title>Actualización de Docente</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
	<link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>

<body>
<?php
require_once('../conexion.php');
$Id_docente = $_POST['Id_docente'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Nombre_genero=$_POST['cmbgenero'];
$Titulacion=$_POST['Titulacion'];
$Area_especializacion=$_POST['Area_especializacion'];
$Contacto=$_POST['Contacto'];
$DUI=$_POST['DUI'];
$Asignatura = $_POST['cmbAsignatura'];

$consulta = "UPDATE docente SET nombres='$Nombres', apellidos='$Apellidos', id_sexo='$Nombre_genero', titulacion='$Titulacion',
facultad='$Area_especializacion', contacto='$Contacto', dui='$DUI', id_asignatura = '$Asignatura' WHERE id = '$Id_docente'";

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
<a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>
</html>
