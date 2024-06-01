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
  <title>Buscar Asignatura</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleOpciones.css">
</head>

<body>


  <body>
    <div class="contenedor">
      <h1>Carreras</h1><br>

      <a href="mostrarCarreras.php"><img src="../img/Mostrar.png" alt="Mostrar"></a>
      <a href="carrerasIngresar.php"><img src="../img/Agregar.png" alt="Agregar"></a>
      <br>
      <a href="buscarCarreraEditar.php"><img src="../img/Editar.png" alt="Editar"></a>
      <a href="buscarCarreraEliminar.php"><img src="../img/Eliminar.png" alt="Eliminar"></a>
      <br>
      <br>
      <a href="/dashboard.php" class="boton">Inicio</a>
    </div>
  </body>

</html>