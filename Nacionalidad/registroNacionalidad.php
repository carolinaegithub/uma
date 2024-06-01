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
    <title>Nacionalidad Guardada</title>
    <link rel="icon" type="image" href="../img/UMA.jpg">
    <link rel="stylesheet" href="../styles/styleRegistrado.css">
</head>
<body>
<?php
 
 require_once('../conexion.php');
 
 $nacionalidad = $_POST['Nombre_nacionalidad'];
 
 $consulta = "INSERT INTO nacionalidad (nacionalidad) VALUES ('$nacionalidad')";
 
 $resultado = mysqli_query($conexion, $consulta);
 
 if ($resultado) {
    echo "Nacionalidad registrada correctamente.";
 }else {
   echo "Ocurrió un error al guardar los datos.";
 }
 
 ?>
 <img src="../img/cat4.gif" alt="Imagen descriptiva">
 <a href="../Nacionalidad/opcionesNacionalidad.php" class="boton" style="font-size: 13px;">Inicio</a>
</body>
</html>