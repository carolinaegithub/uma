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
  <title>Administración de Horarios</title>
  <link rel="stylesheet" href="../styles/styleOpciones.css">
  <link rel="icon" type="image" href="../img/UMA.jpg">
</head>

<body>
    <div class="contenedor">
      <h1>Horario</h1><br>

      <a href="mostrarHorarios.php"><img src="../img/Mostrar.png" alt="Mostrar"></a>
      <a href="horarioIngresar.php"><img src="../img/Agregar.png" alt="Agregar"></a>
      <br>
      <a href="buscarEditarHorario.php"><img src="../img/Editar.png" alt="Editar"></a>
      <a href="buscarEliminarHorario.php"><img src="../img/Eliminar.png" alt="Eliminar"></a>
      <br>
      <br>
      <a href="../dashboard.php" class="boton">Inicio</a>
    </div>
  </body>

</html>