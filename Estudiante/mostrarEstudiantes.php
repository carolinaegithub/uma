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
  <title>Mostrar Estudiantes</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      padding: 2rem;
      background-color: #CCBAB5;
    }

    h1 {
      font-family: Maharlika;
      color: #1D1D1D;
    }

    .contenedor-estudiante {
      border-radius: 40px;
      background-color: #F3F2EE;
      width: 180px;
      margin: 10px;
      padding: 15px;
      text-align: center;
      border: 2px solid #BD8EA5;
      display: inline-block;
    }

    .contenedor-estudiantes {
      text-align: center;
      border-radius: 40px;
      background-color: #EBE6DA;
      width: 90%;
      margin: 0 auto;
      border: 2px solid #BD8EA5;
    }

    input[type="text"] {
      background-color: #FCF4FF;
      border-radius: 20px;
      border: 1px solid #CD4662;
      font-family: verdana;
      width: 30%;
      padding: 10px;
      box-sizing: border-box;
    }

    .boton {
      background-color: #F3F2EE;
      border: 1px solid #BD8EA5;
      color: #BD8EA5;
      padding: 10px 20px;
      border-radius: 20px;
      cursor: pointer;
      border: 2px solid;
      transition: all 1s ease;
      position: relative;
      border-radius: 30px;
      text-decoration: none;
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }

    img {
      width: 150px;
      height: 150px;
      object-fit: cover;
    }
  </style>
</head>

<body class="body">

  <div class="contenedor-estudiantes">

    <h1>Estudiantes</h1>
    <form action="estudianteMostrar.php" method="post">
      <label>Ingresa el Codigo del Estudiante para mostrar su información:
        <input type="text" name="id" required></label>
      <input type="submit" value="Buscar" class="boton">
    </form>

    <br><br>
    <a href="/Estudiante/opcionesEstudiante.php" class="boton">Volver</a>
    <br><br>
      <?php
      require_once('../conexion.php');
      $consulta_estudiante = "SELECT * FROM estudiante ORDER BY id DESC";
      $resultado_estudiante = mysqli_query($conexion, $consulta_estudiante);
      while ($estudiante = mysqli_fetch_array($resultado_estudiante)) {
      ?>

        <div class="contenedor-estudiante">

          <h3><?php echo $estudiante['nombres'] . ' ' . $estudiante['apellidos']; ?></h3>

          <div>
            <img src="../fotos_estudiante/<?php echo $estudiante['foto_estudiante']; ?>" alt="Foto del estudiante">
          </div>

          <p>Código: <?php echo $estudiante['id']; ?></p>

          <p>NIE: <?php echo $estudiante['nie']; ?></p>

          <p>DUI: <?php echo $estudiante['dui']; ?></p>
        </div>
      <?php
      }
      ?>
  </div>

</body>

</html>