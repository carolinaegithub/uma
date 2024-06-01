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

        img {
            width: 120px;
            heigh: 120px;
            border-radius: 10px;
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
      $id = $_POST['id'];
      $consulta = "SELECT * FROM estudiante WHERE id = $id";
      $resultado = mysqli_query($conexion, $consulta);

     if ($resultado) {
        if (mysqli_num_rows($resultado) > 0) {
            $estudiante = mysqli_fetch_array($resultado);
    ?>

        <p><?php echo $estudiante['nombres'] . ' ' . $estudiante['apellidos']; ?></p>
        <img src="../fotos_estudiante/<?php echo $estudiante['foto_estudiante']; ?>" alt="Foto del estudiante"><br><br>

        <form action="credenciales.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label>
                Ingresa el correo institucional del estudiante: <br>
                <input type="text" name="correo"></label><br><br>
            <label>
                Ingresa su contraseña: <br>
                <input type="text" name="contra"><br>
            </label><br>

            <input type="submit" value="Añadir" class="boton">
            <a href="/Estudiante/buscarAsignarCredenciales.php" class="boton" style="font-size: 13px;">Volver</a>

        </form>
        <?php }
    else {
        echo "Estudianete no encontrado, ingresa un código valido.";
        echo '<br><br><a href="/Estudiante/buscarAsignarCredenciales.php" class="boton" style="font-size: 13px;">Volver</a>';
    } } ?>
</body>

</html>