<?php

session_start();

require_once('../conexion.php');
ini_set('post_max_size', '20M');
ini_set('upload_max_filesize', '20M');

$Nombres          = $_POST['Nombres'];
$Apellidos        = $_POST['Apellidos'];
$Id_genero        = $_POST['Cmb_genero'];
$DUI              = $_POST['DUI'];
$NIE              = $_POST['NIE'];
$fecha            = $_POST['fecha_nacimiento'];

$foto             = $_FILES['Foto_estudiante']['name'];
$Tmp_foto         = $_FILES['Foto_estudiante']['tmp_name'];
$Ruta_foto        = "../fotos_estudiante/$foto";
$extension        = pathinfo($foto, PATHINFO_EXTENSION);
$extension        = strtolower($extension);
$extensiones      = array("jpg", "jpeg", "png");

$errores = [];

if (preg_match('/[0-9]/', $Nombres) || preg_match('/[0-9]/', $Apellidos)) {
    $errores[] = "<p>Por favor, ingresa un nombre valido.</p>";
} 

if (strlen($DUI) !== 10) {
    $errores[] = "<p>El DUI debe contener nueve digitos + guión.</p>";
}

if (strlen($NIE) !== 7 || !ctype_digit($NIE)) {
    $errores[] = "<p>El NIE debe contener 7 números.</p>";
}

if ($_FILES['Foto_estudiante']['size'] > 8388608) {
  $errores[] = "<p>El tamaño del archivo excede el límite permitido.</p>";
} elseif (!in_array($extension, $extensiones)) {
  $errores[] = "<p>La extensión del archivo no es valida</p>";
} else {
  move_uploaded_file($Tmp_foto, $Ruta_foto);
}

if (in_array($extension, $extensiones)) {
    move_uploaded_file($Tmp_foto, $Ruta_foto);
} else {
    $errores[] = "<p>La extensión del archivo no es valida</p>";
}

if (empty($errores)) {
    $insertarEstudiante = "INSERT INTO estudiante (nombres, apellidos, id_sexo, dui, nie, fecha_nacimiento, foto_estudiante) VALUES ('$Nombres', '$Apellidos', 
    '$Id_genero', '$DUI', '$NIE', '$fecha', '$Ruta_foto') ";

    $resultadoEstudiante = mysqli_query($conexion, $insertarEstudiante);

    if ($resultadoEstudiante) {
        $id_estudiante = mysqli_insert_id($conexion);
    
        $_SESSION['Id_estudiante'] = $id_estudiante;
    
        header("Location: form2.php?Id_estudiante=$id_estudiante");
        exit;
    } else {
        echo "Ocurrió un problema al registrar tus datos";
        mysqli_close($conexion);
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion invalida</title>
	  <link rel="icon" type="image" href="../img/UMA.jpg">
    <style>
    body {
      font-family: Tahoma;
      background-color: #BD8EA5;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column; 
      padding-top: 205px;
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

    input,
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
    <a href="form1.php" class="boton">Volver ⬅️</a>
</body>
</html>