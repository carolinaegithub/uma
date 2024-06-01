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
	<link rel="icon" type="image" href="../img/UMA.jpg">
  <title>Ingreso de Docentes</title>
  <link rel="stylesheet" href="../styles/styleIngresar.css">
</head>

<body>

  <div class="contenedor">
        <h1>Ingrese un Docente</h1><br>
        <form action="registroD.php" method="post">

          <label>Nombres</label><br>
          <input type="text" name="Nombres" required>
          </label><br><br>

          <label>Apellidos</label><br>
          <input type="text" name="Apellidos" required><br><br>

          <label>Sexo</label><br>
          <select name="cmb_genero" required>
          <option value="" selected disabled>Selecciona una opción</option>
            <?php
            require_once('../conexion.php');
            $registro_genero = "SELECT * FROM sexo";
            $resultado_genero = mysqli_query($conexion, $registro_genero);
            while ($mostrar_genero = mysqli_fetch_array($resultado_genero)) { ?>
              <option value=<?php echo $mostrar_genero['id'] ?>> <?php echo $mostrar_genero['sexo'] ?> </option>
            <?php } ?>
          </select><br><br>

          <label>Ingrese Título Universitario</label><br>
          <input type="text" name="Titulacion" required><br><br>

          <label>Indique Facultad</label><br>
          <input type="text" name="Area_especializacion" required><br><br>

          <label>Asignatura a Impartir</label><br>
          <select name="cmbAsignatura" required>
          <option value="" selected disabled>Selecciona una opción</option>
            <?php
            $registro_asignatura = "SELECT * FROM asignatura";
            $resultado_asignatura = mysqli_query($conexion, $registro_asignatura);
            while ($mostrar_asignatura = mysqli_fetch_array($resultado_asignatura)) { ?>
              <option value=<?php echo $mostrar_asignatura['id'] ?>> <?php echo $mostrar_asignatura['asignatura'] ?> </option>
            <?php } ?>
          </select><br><br>

          <label>Ingrese su Contacto</label><br>
          <input type="text" name="Contacto" required><br><br>

          <label>DUI (con guión)</label><br>
          <input type="text" name="DUI" required>
          <br><br>

          <input type="submit" value="Enviar" class="boton">
          <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Volver</a>
          </form>
      </div>
    </div>
</body>

</html>