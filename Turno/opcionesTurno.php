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
  <title>Turnos</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleOpciones.css">
</head>

<body>
  <div class="contenedor">
    <h1>Turnos</h1><br>

      <a href="mostrarTurnos.php"><img src="../img/Mostrar.png" alt="Mostrar"></a>
      <a href="ingresarTurno.php"><img src="../img/Agregar.png" alt="Agregar"></a>
      <br>
      <a href="buscarEditarTurno.php"><img src="../img/Editar.png" alt="Editar"></a>
      <a href="buscarEliminarTurno.php"><img src="../img/Eliminar.png" alt="Eliminar"></a>
      <br>
      <br>
      <form action="../dashboard.php">
        <input type="submit" value="Inicio" class="boton">
      </form>
    </div>
    </form>
  </body>

</html>