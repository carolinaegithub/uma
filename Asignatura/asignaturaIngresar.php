<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso de Asignaturas</title>
  <link rel="stylesheet" href="../styles/styleIngresar.css">
	<link rel="icon" type="image" href="../img/UMA.jpg">
</head>

<body>

  <div class="contenedor">
        <h1 style="font-family: Tahoma;">Ingrese Asignatura</h1><br>
        <form action="registroAsignatura.php" method="post">

          <label>Indique el Nombre de la Asignatura</label><br>
          <input type="text" name="Nombre_asignatura" required>
          </label><br><br>

          <label>Indique el Aula</label><br>
          <input type="text" name="Aula" required><br><br>

          <label>Seleccione al Docente</label><br>
          <select name="cmb_docente" required>
            <option value="" selected disabled></option>
            <?php
            require_once('../conexion.php');
            $registro_docente = "SELECT * FROM docente";
            $resultado_docente = mysqli_query($conexion, $registro_docente);
            while ($mostrar_docente = mysqli_fetch_array($resultado_docente)) { ?>
              <option value=<?php echo $mostrar_docente['id'] ?>> <?php echo $mostrar_docente['nombres'] . ' ' . $mostrar_docente['apellidos'] ?> </option>
            <?php } ?>
          </select><br><br>

          <label>Seleccione el Horario</label><br>
          <select name="cmb_horario" required>
          <option value="" selected disabled></option>
            <?php
            $registro_horario = "SELECT * FROM horario";
            $resultado_horario = mysqli_query($conexion, $registro_horario);
            while ($mostrar_horario = mysqli_fetch_array($resultado_horario)) { ?>
              <option value=<?php echo $mostrar_horario['id'] ?>> <?php echo $mostrar_horario['hora'] . ' ' . $mostrar_horario['dias'] ?> </option>
            <?php } ?>
          </select><br><br>

          <input type="submit" value="Guardar" class="boton">
          <a href="/Asignatura/opcionesAsignatura.php" class="boton" style="font-size: 13px;">Volver</a>
        </form>
    </div>
</body>

</html>