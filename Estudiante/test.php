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
    <title>Asignar Credenciales</title>
    <link rel="icon" type="image" href="../img/UMA.jpg">
    <style>
        body {
            font-family: Tahoma;
            background-color: #BD8EA5;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .contenedor {
            border-radius: 30px;
            background-color: #F3F2EE;
            width: 800px;
            margin: auto;
            text-align: center;
            padding: 20px;
            border: 2px solid #000000;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        input[type="text"] {
            background-color: #FCF4FF;
            border-radius: 20px;
            border: 1px solid #CCBAB5;
            font-family: verdana;
            width: 60%;
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
    </style>
</head>

<body>
    <div class="contenedor">
        <h1>Asignar Credenciales</h1>

        <?php
      require_once('../conexion.php');
      $consulta_estudiante = "SELECT * FROM estudiante";
      $resultado_estudiante = mysqli_query($conexion, $consulta_estudiante);
      while ($estudiante = mysqli_fetch_array($resultado_estudiante)) {
      ?>

          <h3><?php echo $estudiante['nombres'] . ' ' . $estudiante['apellidos']; ?></h3>

          <div>
            <img src="../fotos_estudiante/<?php echo $estudiante['foto_estudiante']; ?>" alt="Foto de estudiante">
          </div>

          <p>Código: <?php echo $estudiante['id']; ?></p>

          <p>NIE: <?php echo $estudiante['nie']; ?></p>

          <p>DUI: <?php echo $estudiante['dui']; ?></p>
        </div>
      <?php
      }
      ?>

        <form action="credenciales.php" method="post">
            <label>
                Ingresa el correo institucional del estudiante: <br>
                <input type="text" name="correo"></label><br><br>
            <label>
                Ingresa su contraseña: <br>
                <input type="text" name="contra"><br>
            </label><br>

            <input type="submit" value="Añadir" class="boton">
            <a href="/Estudiante/opcionesEstudiante.php" class="boton" style="font-size: 13px;">Volver</a>

        </form>
</body>

</html>