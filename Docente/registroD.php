<?php
session_start();

// Comprueba si ha iniciado sesión
if (!isset($_SESSION['correo'])) {

  header("Location: ../logAdministracion.php");
  exit();
}
?>
<html>
  <head>
    <title> Registro de Datos</title>
	  <link rel="icon" type="image" href="../img/UMA.jpg">
    <link rel="stylesheet" href="../styles/styleRegistrado.css">
  </head>

  <body>
    <?php
        require_once('../conexion.php');

        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $Id_genero = $_POST['cmb_genero']; 
        $Titulacion = $_POST['Titulacion']; 
        $Area_especializacion = $_POST['Area_especializacion'];
        $Contacto = $_POST['Contacto'];  
        $DUI = $_POST['DUI']; 
        $Asignatura = $_POST['cmbAsignatura'];
        $errores = [];

        if (preg_match('/[0-9]/', $Nombres) || preg_match('/[0-9]/', $Apellidos)) {
          $errores[] = "<p>Por favor, ingresa un nombre valido.</p>";
        } 
      
        if (strlen($DUI) !== 10) {
          $errores[] = "<p>El DUI debe contener nueve digitos + guión.</p>";
        }

        if (strlen($Contacto) !== 8 || !ctype_digit($Contacto)) {
          $errores[] = "<p>El número de teléfono debe contener 8 números</p>";
        }

        if (empty($errores)) {
          $insertarDocente = "INSERT INTO docente (nombres, apellidos, id_sexo, titulacion, facultad, contacto, dui, id_asignatura) 
          VALUES ('$Nombres', '$Apellidos', '$Id_genero', '$Titulacion', '$Area_especializacion', '$Contacto', '$DUI', '$Asignatura')";

          $resultadoDocente = mysqli_query($conexion, $insertarDocente);

          if ($resultadoDocente) {
            echo "Docente registrados correctamente.";
          }else {
            echo "Ocurrió un error al regsistrar al docente.";
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
    <a href="/Docente/opcionesDocente.php" class="boton" style="font-size: 13px;">Volver</a>
  </body>
</html>
