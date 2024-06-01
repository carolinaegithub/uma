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
  <title>Ciclos</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleOpciones.css">
</head>

<body>
    <div class="contenedor">
      <h1>Ciclos</h1><br>

      <a href="mostrarCiclos.php"><img src="../img/Mostrar.png" alt="Mostrar"></a>
      <a href="ingresarCiclo.php"><img src="../img/Agregar.png" alt="Agregar"></a>
      <br>
      <a href="buscarEditarCiclo.php"><img src="../img/Editar.png" alt="Editar"></a>
      <a href="buscarEliminarCiclo.php"><img src="../img/Eliminar.png" alt="Eliminar"></a>
      <br><br>
      <a href="/dashboard.php" class="boton">Inicio</a>
    </div>
    </form>
  </body>
</html>