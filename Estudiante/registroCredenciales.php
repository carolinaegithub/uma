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
    <title>Credenciales Añadidas</title>
</head>
<body>
    <?php 
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    $consulta = "UPDATE estudiante SET correo = '$correo', '$contra' WHERE Id_estudiante = "
    ?>
</body>
</html>