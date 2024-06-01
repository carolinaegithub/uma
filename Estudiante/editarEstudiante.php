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
  <title>Editar Datos</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      background-color: #FADEFF;
      text-align: center;
      font-family: verdana;
      align-content: center;
    }

    img{
      width: 150px;
      heigh: 150px;
      border-radius: 10%;
    }

    .table {
      width: 80%;
      border-collapse: collapse;
      background-color: #FFFDF6;
      margin: 0 auto;
    }

    .table th {
      padding: 8px;
      text-align: left;
      border: 1px solid #530C45;
      width: 40%;
    }

    .table td {
      padding: 8px;
      text-align: left;
      border: 1px solid #530C45;
      width: 40%;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"],
    select {
      background-color: #FCF4FF;
      border-radius: 20px !important;
      border: 1px solid #CCBAB5;
      font-family: verdana;
      width: 100% !important;
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

    @media only screen and (max-width: 600px) {

      .table th,
      .table td {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <h1>Datos del Estudiante</h1>
  <form action="actualizarEstudiante.php" method="post" enctype="multipart/form-data">
    <table class="table">

      <?php
      require_once('../conexion.php');
      $id = $_POST['id'];
      $consulta = "SELECT * FROM estudiante WHERE id = $id";
      $resultado = mysqli_query($conexion, $consulta);
      while ($mostrar = mysqli_fetch_array($resultado)) { ?>
        <input type="text" hidden name="id" value="<?php echo $mostrar['id'] ?>">
    
        <tr>
          <th>Nombres</th>
          <td><input type="text" name="nombres" value="<?php echo $mostrar['nombres'] ?>" required></td>
        </tr>

        <tr>
          <th>Apellidos</th>
          <td><input type="text" name="apellidos" value="<?php echo $mostrar['apellidos'] ?>" required></td>
        </tr>

        <tr>
          <th>Sexo</th>
          <td><select name="cmbgenero" required>
              <?php
              $id_sexo = $mostrar['id_sexo'];
              $consulta_genero = "SELECT * FROM sexo ORDER BY (id = $id_sexo), sexo ASC";
              $resultado_genero = mysqli_query($conexion, $consulta_genero);
              while ($mostrar_genero = mysqli_fetch_array($resultado_genero)) {
                echo '<option value="' . $mostrar_genero['id'] . '"' . ($mostrar_genero['id'] == $id_sexo ? ' selected' : '') . '>' 
                . $mostrar_genero['sexo'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>DUI</th>
          <td><input type="text" name="DUI" value="<?php echo $mostrar['dui'] ?>" required></td>
        </tr>

        <tr>
          <th>NIE</th>
          <td><input type="text" name="NIE" value="<?php echo $mostrar['nie'] ?>" required></td>
        </tr>

        <tr>
          <th>Carrera</th>
          <td>
            <select name="cmbCarrera" required>
              <?php
              $id_carrera = $mostrar['id_carrera'];
              $consulta_carrera = "SELECT * FROM carrera ORDER BY (id = $id_carrera), carrera ASC";
              $resultado_carrera = mysqli_query($conexion, $consulta_carrera);
              while ($mostrar_carreras = mysqli_fetch_array($resultado_carrera)) {
                echo '<option value="' . $mostrar_carreras['id'] . '"' . ($mostrar_carreras['id'] == $id_carrera ? ' selected' : '') 
                . '>' . $mostrar_carreras['carrera'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Ciclo</th>
          <td><select name="cmbCiclo" required>
              <?php
              $id_ciclo = isset($mostrar['id_ciclo']) ? $mostrar['id_ciclo'] : 0;
              $consulta_ciclo = "SELECT * FROM ciclo ORDER BY (id = $id_ciclo), ciclo ASC";
              $resultado_ciclo = mysqli_query($conexion, $consulta_ciclo);
              while ($mostrar_ciclo = mysqli_fetch_array($resultado_ciclo)) {
                echo '<option value="' . $mostrar_ciclo['id'] . '"' . ($mostrar_ciclo['id'] == $id_ciclo ? ' selected' : '') 
                . '>' . $mostrar_ciclo['ciclo'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Nacionalidad</th>
          <td><select name="cmbNacionalidad" required>
              <?php
              $id_nacionalidad = $mostrar['id_nacionalidad'];
              $consulta_nacionalidad = "SELECT * FROM nacionalidad ORDER BY (id = $id_nacionalidad) DESC, nacionalidad ASC";
              $resultado_nacionalidad = mysqli_query($conexion, $consulta_nacionalidad);
              while ($mostrar_nacionalidad = mysqli_fetch_array($resultado_nacionalidad)) {
              echo '<option value="' . $mostrar_nacionalidad['id'] . '"'  . ($mostrar_nacionalidad['id'] == $id_nacionalidad ? 
              'selected' : '') . '>' . $mostrar_nacionalidad['nacionalidad'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Medio de Transporte</th>
          <td><input type="text" name="medio_transporte" value="<?php echo $mostrar['medio_transporte'] ?>" required></td>
        </tr>

        <tr>
          <th>Correo</th>
          <td><input type="text" name="correo" value="<?php echo $mostrar['correo'] ?>" required></td>
        </tr>

        <tr>
          <th>Contraseña</th>
          <td><input type="text" name="contra" value="<?php echo $mostrar['contrasena'] ?>" required></td>
        </tr>

        <tr>
          <th>Teléfono</th>
          <td><input type="text" name="telefono" value="<?php echo $mostrar['telefono'] ?>" required></td>
        </tr>

        <tr>
          <th>¿Recibe Remesa?</th>
          <td><input type="text" name="recibe_remesa" value="<?php echo $mostrar['remesa'] ?>" required></td>
        </tr>

        <tr>
          <th>Departamento</th>
          <td><select name="cmbDepartamento" required>
              <?php
              $id_departamento = $mostrar['id_departamento'];
              $consulta_departamento = "SELECT * FROM departamento ORDER BY (id = $id_departamento), departamento ASC";
              $resultado_departamento = mysqli_query($conexion, $consulta_departamento);
              while ($mostrar_departamento = mysqli_fetch_array($resultado_departamento)) {
                echo '<option value="' . $mostrar_departamento['id'] . '"' . ($mostrar_departamento['id'] == $id_departamento ?
                ' selected' : '') . '>' . $mostrar_departamento['departamento'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Dirección</th>
          <td><input type="text" name="direccion" value="<?php echo $mostrar['direccion'] ?>" required></td>
        </tr>

        <tr>
          <th>Turno</th>
          <td><select name="cmbTurno" required>
              <?php
              $id_turno = isset($mostrar['id_turno']) ? $mostrar['id_turno'] : 0;
              $consulta_turno = "SELECT * FROM turno ORDER BY (id = $id_turno), turno ASC";
              $resultado_turno = mysqli_query($conexion, $consulta_turno);
              while ($mostrar_turno = mysqli_fetch_array($resultado_turno)) {
                echo '<option value="' . $mostrar_turno['id'] . '"' . ($mostrar_turno['id'] == $id_turno ? ' selected' : '') . 
                '>' . $mostrar_turno['turno'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Estado Laboral</th>
          <td><select name="cmbLaboral" required>
              <?php
              $id_estado_laboral = isset($mostrar['id_estado_laboral']) ? $mostrar['id_estado_laboral'] : 0;
              $consulta_estado_laboral = "SELECT * FROM estado_laboral ORDER BY (id = $id_estado_laboral), estado_laboral ASC";
              $resultado_estado_laboral = mysqli_query($conexion, $consulta_estado_laboral);
              while ($mostrar_estado_laboral = mysqli_fetch_array($resultado_estado_laboral)) {
                echo '<option value="' . $mostrar_estado_laboral['id'] . '"' . ($mostrar_estado_laboral['id'] == $id_estado_laboral ? ' selected' : '')
                . '>' . $mostrar_estado_laboral['estado_laboral'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Estado Civil</th>
          <td><select name="cmbCivil" required>
              <?php
              $id_estado_civil = isset($mostrar['id_estado_civil']) ? $mostrar['id_estado_civil'] : 0;
              $consulta_estado_civil = "SELECT * FROM estado_civil ORDER BY (id = $id_estado_civil), estado_civil ASC";
              $resultado_estado_civil = mysqli_query($conexion, $consulta_estado_civil);
              while ($mostrar_estado_civil = mysqli_fetch_array($resultado_estado_civil)) {
                echo '<option value="' . $mostrar_estado_civil['id'] . '"' . ($mostrar_estado_civil['id'] == $id_estado_civil ?
                ' selected' : '') . '>' . $mostrar_estado_civil['estado_civil'] . '</option>';
              }
              ?>
            </select>
          </td>
        </tr>

        <tr>
          <th>Contacto Familiar</th>
          <td><input type="text" name="contacto_familiar" value="<?php echo $mostrar['contacto_familiar'] ?>" required></td>
        </tr>

        <tr>
          <th>Nombre Familiar</th>
          <td><input type="text" name="nombre_familiar" value="<?php echo $mostrar['nombre_familiar'] ?>" required></td>
        </tr>

        <tr>
          <th>Parentesco</th>
          <td><input type="text" name="parentesco" value="<?php echo $mostrar['parentesco'] ?>" required></td>
        </tr>

        <tr>
          <th>Foto</th>
          <td><img src="../fotos_estudiante/<?php echo $mostrar['foto_estudiante']; ?>" alt="Foto Estudiante">
          <input hidden type="text" name="foto" value="<?php echo $mostrar['foto_estudiante']; ?>">
          <input type="file" name="Foto"></td>
        </tr>

        <tr>
          <th>Boleta de Notas</th>
          <td><img src="../boletas/<?php echo $mostrar['boleta_notas_img']; ?>" alt="Boleta de notas">
          <input hidden type="text" name="boleta" value="<?php echo $mostrar['boleta_notas_img']; ?>">
          <input type="file" name="Boleta_Notas_img"></td>
        </tr>

        <tr>
          <th>Título</th>
          <td><img src="../titulos_bchto/<?php echo $mostrar['titulo_bchto_img']; ?>" alt="Titulo de bchto">
          <input hidden type="text" name="titulo" value="<?php echo $mostrar['titulo_bchto_img']; ?>">
          <input type="file" name="Titulo"></td>
        </tr>

        <tr>
          <th>Prueba AVANZO</th>
          <td><img src="../prueba_avanzo/<?php echo $mostrar['prueba_avanzo_img']; ?>" alt="AVANZO">
          <input hidden type="text" name="avanzo" value="<?php echo $mostrar['prueba_avanzo_img']; ?>">
          <input type="file" name="Avanzo"></td>
        </tr>
    </table>

    <br><br><a href="/Estudiante/opcionesEstudiante.php" class="boton" style="font-size: 13px;">Volver</a>

    <td><input type="submit" value="Actualizar" class="boton"></td>

  </form>
  <br>
<?php } ?>
</body>

</html>