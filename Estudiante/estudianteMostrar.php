<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
}

require_once('../conexion.php');
$id = $_POST['id'];
$consulta  = "SELECT * FROM estudiante WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        $estudiante = mysqli_fetch_array($resultado);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Estudiante</title>
            <link rel="icon" type="image/png" href="../img/UMA.jpg">
            <style>
                body {
                    padding: 2rem;
                    background-color: #F3F2EE;
                    font-size: large;
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    color: black;
                }

                img {
                    width: 95%;
                }

                span {
                    font-weight: bold;
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

                .main-container {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                    margin-top: 2rem;
                }

                .container {
                    padding: 2rem;
                    background-color: #F2C2C2;
                }

                .images-container {
                    background-color: #F2D8D8;
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    padding: 2rem 1rem;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                }
            </style>
        </head>

        <body>
            <h2>Información completa del Estudiante:</h2>
            <div style="display: flex;">
                <a href="mostrarEstudiantes.php"><img src="../img/Mostrar.png" alt="" style="width: 20%;"></a>
            </div>
            <div class="main-container">
                <div class="container">
                    <span>Nombre:</span> <?php echo $estudiante['nombres']; ?> <?php echo $estudiante['apellidos']; ?></p>
                    <span>Código: </span> <?php echo $estudiante['id']; ?> </p>
                    <span>Fecha de nacimiento:</span> <?php echo $estudiante['fecha_nacimiento']; ?></p>
                    <span>Nacionalidad:</span>
                    <?php
                    $id_nacionalidad_foranea = $estudiante['id_nacionalidad'];
                    $consulta_nacionalidad = "SELECT * FROM nacionalidad WHERE id = $id_nacionalidad_foranea";
                    $resultado_nacionalidad = mysqli_query($conexion, $consulta_nacionalidad);
                    $mostrar_nacionalidad = mysqli_fetch_array($resultado_nacionalidad);
                    echo $mostrar_nacionalidad['nacionalidad']; ?></p>
                    <span>Sexo:</span>
                    <?php
                    $id_genero = $estudiante['id_sexo'];
                    $consulta_genero = "SELECT sexo FROM sexo WHERE id = $id_genero";
                    $resultado_genero = mysqli_query($conexion, $consulta_genero);
                    $mostrar_genero = mysqli_fetch_array($resultado_genero);
                    echo $mostrar_genero['sexo'];
                    ?> </p>
                    <span>DUI:</span> <?php echo $estudiante['dui']; ?></p>
                    <span>Carrera:</span>
                    <?php
                    $id_carrera = $estudiante['id_carrera'];
                    $consulta_carrera = "SELECT carrera FROM carrera WHERE id = $id_carrera";
                    $resultado_carrera = mysqli_query($conexion, $consulta_carrera);
                    $mostrar_carrera = mysqli_fetch_array($resultado_carrera);
                    echo $mostrar_carrera['carrera'];
                    ?> </p>
                    <span>Ciclo:</span>
                    <?php
                    $id_ciclo = $estudiante['id_ciclo'];
                    $consulta_ciclo = "SELECT ciclo FROM ciclo WHERE id = '$id_ciclo'";
                    $resultado_ciclo = mysqli_query($conexion, $consulta_ciclo);
                    $mostrar_ciclo = mysqli_fetch_array($resultado_ciclo);
                    if ($mostrar_ciclo) {
                        echo $mostrar_ciclo['ciclo'];
                    }
                    ?> </p>
                    <span>Turno:</span>
                    <?php
                    $id_turno = $estudiante['id_turno'];
                    $consulta_turno = "SELECT turno FROM turno WHERE id = '$id_turno'";
                    $resultado_turno = mysqli_query($conexion, $consulta_turno);
                    $mostrar_turno = mysqli_fetch_array($resultado_turno);
                    if ($mostrar_turno) {
                    echo $mostrar_turno['turno'];
                    }
                    ?> </p>
                    <span>Departamento:</span>
                    <?php
                    $id_departamento = $estudiante['id_departamento'];
                    $consulta_departamento = "SELECT departamento FROM departamento WHERE id = '$id_departamento'";
                    $resultado_departamento = mysqli_query($conexion, $consulta_departamento);
                    $mostrar_departamento = mysqli_fetch_array($resultado_departamento);
                    echo $mostrar_departamento['departamento'];
                    ?> </p>
                    <span>Dirección:</span> <?php echo $estudiante['direccion']; ?></p>
                </div>
                <div class="container">
                    <span>NIE:</span> <?php echo $estudiante['nie']; ?></p>
                    <span>Teléfono:</span> <?php echo $estudiante['telefono']; ?></p>
                    <span>Medio de Transporte:</span> <?php echo $estudiante['medio_transporte']; ?></p>
                    <span>¿Recibe Remesa?</span> <?php echo $estudiante['remesa']; ?></p>
                    <span>Estado Civil:</span>
                    <?php
                    $id_estado_civil = $estudiante['id_estado_civil'];
                    $consulta_estado_civil = "SELECT estado_civil FROM estado_civil WHERE id = '$id_estado_civil'";
                    $resultado_estado_civil = mysqli_query($conexion, $consulta_estado_civil);
                    $mostrar_estado_civil = mysqli_fetch_array($resultado_estado_civil);
                    if ($mostrar_estado_civil) {
                        echo $mostrar_estado_civil['estado_civil'];
                    }
                    ?> </p>
                    <span>Estado Laboral:</span>
                    <?php
                    $id_estado_laboral = $estudiante['id_estado_laboral'];
                    $consulta_estado_laboral = "SELECT estado_laboral FROM estado_laboral WHERE id = '$id_estado_laboral'";
                    $resultado_estado_laboral = mysqli_query($conexion, $consulta_estado_laboral);
                    $mostrar_estado_laboral = mysqli_fetch_array($resultado_estado_laboral);
                    if ($mostrar_estado_laboral) {
                    echo $mostrar_estado_laboral['estado_laboral'];
                    }
                    ?> </p>
                    <span>Correo:</span> <?php echo $estudiante['correo']; ?></p>
                    <span>Contraseña:</span> <?php echo $estudiante['contrasena']; ?></p>
                    <span>Familiar de contacto:</span> <?php echo $estudiante['nombre_familiar']; ?></p>
                    <span>Teléfono Familiar:</span> <?php echo $estudiante['contacto_familiar']; ?></p>
                    <span>Parentesco:</span> <?php echo $estudiante['parentesco']; ?></p>

                </div>
            </div>
            <div class="images-container">
                <div>
                    <img src="../fotos_estudiante/<?php echo $estudiante['foto_estudiante']; ?>" alt="Foto de estudiante">
                </div>
                <div>
                    <img src="../prueba_avanzo/<?php echo $estudiante['prueba_avanzo_img']; ?>" alt="Prueba AVANZO">
                </div>
                <div>
                    <img src="../titulos_bchto/<?php echo $estudiante['titulo_bchto_img']; ?>" alt="Titulo">
                </div>
                <div>
                    <img src="../boletas/<?php echo $estudiante['boleta_notas_img']; ?>" alt="Boleta de Calificaciones">
                </div>
            </div>
        </body>
    </html>
<?php
    } else {
        echo "No hay Estudiante con ese código.";
    }
} else {
    echo "Hubo un error en la consulta. ";
}
?>