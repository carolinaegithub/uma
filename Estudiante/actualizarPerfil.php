<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estudiante</title>
	<link rel="icon" type="image" href="../img/UMA.jpg">
    <style>
        body {
            background: rgb(189, 142, 165);
            background: radial-gradient(circle, rgba(189, 142, 165, 1) 0%, rgba(204, 186, 181, 1) 100%);
            font-family: Tahoma, sans-serif;
            font-size: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .errores-container {
        margin-top: 20px; 
        text-align: center; 
        }

        .errores-container ul {
        list-style-type: none; 
        padding: 0; 
        }

        .errores-container ul li {
        color: #fff;
       }

        .boton {
            background-color: #F3F2EE;
            border: 1px solid #BD8EA5;
            duration: 1s;
            transition: all 1s ease;
            color: #BD8EA5;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            border: 2px solid;
            border-radius: 30px;
            text-decoration: none;
            margin-left: auto;
            margin-right: auto;
        }

        .boton:hover {
            background: #CCBAB5;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <?php
    require_once('../conexion.php');
    $id_estudiante = $_POST['id_estudiante'];
    $medio_transporte = $_POST['medio_transporte'];
    $telefono = $_POST['telefono'];
    $recibe_remesa = $_POST['recibe_remesa'];
    $estado_laboral = $_POST['cmbLaboral'];
    $estado_civil = $_POST['cmbCivil'];
    $contra = $_POST['contra'];
    $ciclo = $_POST['cmbCiclo'];
    $turno = $_POST['cmbTurno'];
    $contacto_familiar = $_POST['contacto_familiar'];
    $nombre_familiar = $_POST['nombre_familiar'];
    $parentesco = $_POST['parentesco'];
    $errores = [];
    $extensiones = array("jpg", "jpeg", "png");

    // Guardamos la imagen de la boleta de notas
    $Boleta_notas     = $_FILES['Boleta_Notas_img']['name'];
    if (!empty($Boleta_notas)) {
        $Tmp_boleta       = $_FILES['Boleta_Notas_img']['tmp_name'];
        $Ruta_boleta      = "../boletas/$Boleta_notas";
        $extension_boleta = pathinfo($Boleta_notas, PATHINFO_EXTENSION);
        $extension_boleta = strtolower($extension_boleta);
    
        if (in_array($extension_boleta, $extensiones)) {
            move_uploaded_file($Tmp_boleta, $Ruta_boleta);
        } else {
            $errores[] = "<p>La extensión de Boleta de Notas no es valida</p>";
        }
    } else {
        $Ruta_boleta = $_POST['boleta'];
    }

    //Titulo
    $Titulo = $_FILES['Titulo']['name'];
    if (!empty($Titulo)) {
        $Tmp_titulo = $_FILES['Titulo']['tmp_name'];
        $Ruta_titulo      = "../titulos_bchto/$Titulo";
        $extension_titulo = pathinfo($Titulo, PATHINFO_EXTENSION);
        $extension_titulo = strtolower($extension_titulo);
    
        if (in_array($extension_titulo, $extensiones)) {
            move_uploaded_file($Tmp_titulo, $Ruta_titulo);
        } else {
            $errores[] = "<p>La extensión del Título no es valida</p>";
        }
    } else {
        $Ruta_titulo = $_POST['titulo'];
    }

    //Prueba AVANZO
    $Avanzo = $_FILES['Avanzo']['name'];
    if (!empty($Avanzo)) {
        $Tmp_avanzo = $_FILES['Avanzo']['tmp_name'];
        $Ruta_avanzo      = "../prueba_avanzo/$Avanzo";
        $extension_avanzo = pathinfo($Avanzo, PATHINFO_EXTENSION);
        $extension_avanzo = strtolower($extension_avanzo);
    
        if (in_array($extension_avanzo, $extensiones)) {
            move_uploaded_file($Tmp_avanzo, $Ruta_avanzo);
        } else {
            $errores[] = "<p>La extensión del Título no es valida</p>";
        }
    } else {
        $Ruta_avanzo = $_POST['avanzo'];
    }

    if (preg_match('/[0-9]/', $nombre_familiar)) {
        $errores[] = "<p>Por favor, ingresa un nombre valido.</p>";
    }

    if (strlen($recibe_remesa) !== 2) {
        $errores[] = "<p>Ingresa 'Si' o 'No'.</p>";
    }

    if (strlen($contra) !== 8) {
        $errores[] = "<p>Tu contraseña debe contener 8 dígitos.</p>";
    }

    if (strlen($telefono) !== 8 || !ctype_digit($telefono)) {
        $errores[] = "<p>El numero de teléfono debe contener 8 números</p>";
    }

    if (strlen($contacto_familiar) !== 8 || !ctype_digit($contacto_familiar)) {
        $errores[] = "<p>El numero de teléfono del familiar debe contener 8 números</p>";
    }

   if (empty($errores)) {
    $consulta = "UPDATE estudiante SET medio_transporte = '$medio_transporte', telefono = '$telefono', id_ciclo = $ciclo, 
    remesa = '$recibe_remesa', contacto_familiar = '$contacto_familiar', id_estado_laboral = '$estado_laboral', 
    id_estado_civil = '$estado_civil', nombre_familiar = '$nombre_familiar', parentesco = '$parentesco', id_turno = $turno,
    contrasena = '$contra', boleta_notas_img = '$Ruta_boleta', prueba_avanzo_img = '$Ruta_avanzo',
    titulo_bchto_img = '$Ruta_titulo' WHERE id = $id_estudiante";

    $resultado = mysqli_query($conexion, $consulta);

     if ($resultado) {
        echo "Tus datos se han guardado con éxito 😊";
        echo '<img src="../img/cat4.gif">';
     } else {
        echo "Ocurrió un error al Actualizar al Estudiante";
    }
   }
 ?>

    <div class="errores-container">
        <?php
        if (!empty($errores)) {
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
    <a href="/cerrar.php" class="boton" >Volver ⬅️</a>
</body>

</html>