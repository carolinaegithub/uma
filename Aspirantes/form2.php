<?php session_start();

require_once('../conexion.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Estudiante</title>
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
      width: 50%;
      margin: auto;
      text-align: center;
      padding: 24px;
      border: 2px solid #000000;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    input[type="text"],
    input[type="file"],
    select {
      background-color: #FCF4FF;
      border-radius: 20px;
      border: 1px solid #CD4662;
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
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }

    @media (max-width: 750px) {
      body {
        margin-top: auto;
        margin-bottom: 2px;
      }

      .contenedor {
        width: 70%;
      }

      input[type="text"],
      input[type="file"],
      select {
        background-color: #FCF4FF;
        border-radius: 20px;
        border: 1px solid #CD4662;
        font-family: verdana;
        width: 90%;
        padding: 10px;
        box-sizing: border-box;
      }

      h1 {
        font-size: medium;
      }
    }
  </style>
</head>

<body>
  <div class="contenedor">

    <form action="registro2.php" method="post" enctype="multipart/form-data">

      <label>Carrera Seleccionada<br>
        <select name="Cmb_carrera" required>
          <option value="" selected disabled></option>
          <?php
          $registro_carreras = "SELECT * FROM carrera";
          $resultado_carreras = mysqli_query($conexion, $registro_carreras);

          while ($mostrar_carreras = mysqli_fetch_array($resultado_carreras)) {
          ?>
            <option value="<?php echo $mostrar_carreras['id'] ?>" required> <?php echo $mostrar_carreras['carrera'] ?></option>
          <?php } ?>
        </select></label><br><br>

      <label>Nacionalidad<br>
        <select name="Cmb_nacinalidad" required>
          <option value="" selected disabled></option>
          <?php
          $registro_nacionalidad = "SELECT * FROM nacionalidad";
          $resultado_nacionalidad = mysqli_query($conexion, $registro_nacionalidad);

          while ($mostrar_nacionalidad = mysqli_fetch_array($resultado_nacionalidad)) {
          ?>
            <option value="<?php echo $mostrar_nacionalidad['id'] ?>"> <?php echo $mostrar_nacionalidad['nacionalidad'] ?></option>
          <?php } ?>
        </select></label><br><br>

      <label>Número de Teléfono<br>
        <input type="text" name="Telefono" required></label><br><br>

      

      <label>Departamento de Residencia<br>
        <select name="Cmb_departamento" required>
          <option value="" selected disabled></option>
          <?php
          $registro_departamentos = "SELECT * FROM departamento";
          $resultado_departamentos = mysqli_query($conexion, $registro_departamentos);

          while ($mostrar_departamentos = mysqli_fetch_array($resultado_departamentos)) {
          ?>
            <option value="<?php echo $mostrar_departamentos['id'] ?>"> <?php echo $mostrar_departamentos['departamento'] ?></option>
          <?php } ?>
        </select></label><br><br>

      <label>Dirección: <br>
        <input type="text" name="Dirección" required></label><br><br>

      <input type="submit" value="Registrar" class="boton">
    </form>
  </div>
</body>

</html>