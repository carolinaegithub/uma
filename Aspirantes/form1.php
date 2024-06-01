<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso Estudiante</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      font-family: Tahoma;
      background-color: #BD8EA5;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contenedor {
      border-radius: 30px;
      background-color: #F3F2EE;
      width: 45%;
      max-width: 600px;
      text-align: center;
      border: 2px solid #000000;
      padding: 20px;
    }

    input[type="text"],
    input[type="file"],
    input[type="date"],
    select {
      background-color: #FCF4FF;
      border-radius: 20px;
      border: 1px solid #CD4662;
      font-family: verdana;
      width: 70%;
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
      duration: 1s;
    }

    .errores-container {
      margin-top: 10px; 
      text-align: center; 
    }

    .errores-container ul {
      list-style-type: none; 
      padding: 0; 
    }

    .errores-container ul li {
      color: black;
    }

    h1 {
      margin: 4px;
    }

    img {
      width: 35%;
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }

    @media (max-width: 750px) {
      body {
        margin-top: 2rem;
        margin-bottom: 2px;
      }

      .contenedor {
        margin-top: 2px;
        width: 80%;
      }

      img {
        width: 50%;
      }

      h1 {
        font-size: medium;
      }
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <img src="../img/UMA.jpg" alt="">
    <h1>Ingresa Los Datos del Aspirante</h1>
    <form action="registro1.php" method="post" enctype="multipart/form-data" id="registroForm">
      <label>Nombres<br>
        <input type="text" name="Nombres" required></label><br><br>

      <label>Apellidos<br>
        <input type="text" name="Apellidos" required></label><br><br>

      <label>Sexo<br>
        <select name="Cmb_genero" required>
        <option value="">Seleccione</option>
          <?php
          require_once('../conexion.php');
          $registro = "SELECT * FROM sexo";
          $resultado = mysqli_query($conexion, $registro);

          while ($mostrar = mysqli_fetch_array($resultado)) {
          ?>
            <option value="<?php echo $mostrar['id'] ?>"> <?php echo $mostrar['sexo'] ?></option>
          <?php } ?>
        </select></label><br><br>

      <label>Fecha de Nacimiento <br>
        <input type="date" name="fecha_nacimiento" max="2010-01-01" required><br><br>
      </label>

      <label>DUI<br>
        <input type="text" name="DUI" required></label><br><br>

      <label>NIE<br>
        <input type="text" name="NIE" required></label><br><br>

      <label>Coloque la fotografía del Aspirante</label><br>
      <input type="file" name="Foto_estudiante" id="Foto_estudiante" accept="image/png, image/jpeg, image/jpg" required><br><br>

      <input type="submit" value="Enviar" class="boton"><br><br>
      <div class="errores-container" id="errores-container"></div>
    </form>
  </div><br><br>
</body>

</html>

<script>
  document.getElementById('registroForm').addEventListener('submit', function(event) {
    var fileInput = document.getElementById('Foto_estudiante');
    var file = fileInput.files[0];
    var maxSize = 8 * 1024 * 1024; // 8MB

    if (file.size > maxSize) {
      event.preventDefault();
      var erroresContainer = document.getElementById('errores-container');
      erroresContainer.innerHTML = "<ul><li>El tamaño del archivo excede el límite permitido de 8MB.</li></ul>";
    }
  });
</script>