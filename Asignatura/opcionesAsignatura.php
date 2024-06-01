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
    <div class="contenedor">

      <h1>Asignaturas</h1><br>

      <a href="mostrarAsignaturas.php"><img src="../img/Mostrar.png" alt="Mostrar"></a>
      <a href="asignaturaIngresar.php"><img src="../img/Agregar.png" alt="Agregar"></a>
      <br>
      <a href="buscarAsignaturaEditar.php"><img src="../img/Editar.png" alt="Editar"></a>
      <a href="buscarAsignaturaEliminar.php"><img src="../img/Eliminar.png" alt="eliminar"></a>
      <br>
      <br>
      <form action="../dashboard.php">
        <input type="submit" value="Inicio" class="boton">
      </form>
    </div>
  </body>

</html>