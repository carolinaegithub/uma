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
  <title>Docentes</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleOpciones.css">
</head>

<body>
    <div class="contenedor">
      <h1>Docentes</h1><br>

      <a href="mostrarDocentes.php"><img src="../img/Mostrar.png" alt="Icono Mostrar"></a>
      <a href="docentesIngresar.php"><img src="../img/Agregar.png" alt="Icono Agregar"></a>
      <br>
      <a href="buscarEditarDocente.php"><img src="../img/Editar.png" alt="Icono Editar"></a>
      <a href="buscarDocenteEliminar.php"><img src="../img/Eliminar.png" alt="Icono Eliminar"></a>
      <br>
      <br>
      <form action="../dashboard.php">
        <input type="submit" value="Inicio" class="boton">
      </form>
    </div>
</body>
</html>