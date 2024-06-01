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

  $Nombre_ciclo = $_POST['Nombre_ciclo'];
  $insertarCiclo = "INSERT INTO ciclo (ciclo) VALUES ('$Nombre_ciclo')";

  $resultadoCiclo = mysqli_query($conexion, $insertarCiclo);

  if ($resultadoCiclo) {
    echo "Ciclo registrado correctamente.";
  } else {
    echo "Ocurrió un error al regsistrar los datos.";
  }
  ?>
  <img src="../img/cat4.gif" alt="Imagen descriptiva">
  <a href="/Ciclo/opcionesCiclo.php" class="boton" style="font-size: 13px;">Volver</a>
</body>

</html>