<?php
 session_start();

 // Comprueba si ha iniciado sesión
 if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
 }

require_once('../conexion.php');

// Obtenemos la info y la guardamos en variables

$Nombres          = $_POST['Nombres'];
$Apellidos        = $_POST['Apellidos'];
$Id_genero        = $_POST['Cmb_genero'];
$DUI              = $_POST['DUI'];
$NIE              = $_POST['NIE'];
$Id_carrera       = $_POST['Cmb_carrera'];
$Id_ciclo         = $_POST['Cmb_ciclo'];
$Id_nacionalidad  = $_POST['Cmb_nacinalidad'];
$Medio_transporte = $_POST['Medio_transporte'];
$Telefono         = $_POST['Telefono'];
$Id_departamento  = $_POST['Cmb_departamento'];
$Id_distrito      = $_POST['Cmb_distrito'];
$Recibe_remesa    = $_POST['Recibe_remesa'];
$Estado_laboral   = $_POST['Cmb_estado_laboral'];
$Estado_civil     = $_POST['Cmb_estado_civil'];
$Id_turno         = $_POST['Cmb_turno'];
$Nombre_familiar  = $_POST['Nombre_familiar'];
$Contacto_familiar= $_POST['Contacto_familiar'];
$Parentesco       = $_POST['Parentesco'];

// Guardamos la imagen de la boleta de notas
$Boleta_notas     = $_FILES['Boleta_Notas_img']['name'];

$Tmp_boleta       = $_FILES['Boleta_Notas_img']['tmp_name'];

$Ruta_boleta      = "../boletas/$Boleta_notas";

move_uploaded_file($Tmp_boleta, $Ruta_boleta);

// Guardamos la prueba avanzo

$Prueba_avanzo    = $_FILES['Prueba_avanzo_img']['name'];

$Tmp_avanzo       = $_FILES['Prueba_avanzo_img']['tmp_name'];

$Ruta_avanzo      = "../prueba_avanzo/$Prueba_avanzo";

move_uploaded_file($Tmp_avanzo, $Ruta_avanzo);

// Guardamos el título de bachillerato

$Titulo_bchto     = $_FILES['Titulo_bchto_img']['name'];

$Tmp_titulo       = $_FILES['Titulo_bchto_img']['tmp_name'];

$Ruta_titulo      = "../titulos_bchto/$Titulo_bchto";

move_uploaded_file($Tmp_titulo, $Ruta_titulo);


// Realizamos la consulta

$insertarEstudinte = "INSERT INTO estudiante (Nombres, Apellidos, Id_genero, DUI, NIE, Id_carrera, Id_ciclo, Id_nacionalidad,
Medio_transporte, Telefono, Id_departamento, Recibe_remesa, Id_distrito, Contacto_familiar, Id_estado_laboral, Id_estado_civil,
Id_turno, Nombre_familiar, Parentesco, Boleta_Notas_img, Prueba_avanzo_img, Titulo_bchto_img) VALUES ('$Nombres', '$Apellidos', 
'$Id_genero', '$DUI', '$NIE', '$Id_carrera', '$Id_ciclo', '$Id_nacionalidad', '$Medio_transporte', '$Telefono', '$Id_departamento', 
'$Recibe_remesa', '$Id_distrito', '$Contacto_familiar', '$Estado_laboral', '$Estado_civil', '$Id_turno', '$Nombre_familiar', 
'$Parentesco', '$Ruta_boleta', '$Ruta_avanzo', '$Ruta_titulo') ";

$resultadoEstudiante = mysqli_query($conexion, $insertarEstudinte);

if ($resultadoEstudiante) {
    echo "Estudiante Registrado correctamente 😊🏫";
}else {
    echo "Ocurrió un error al registrar al Estudiante 😥";
}

