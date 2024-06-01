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
  <title>Estudiantes</title>
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <style>
    body {
      background-color: #000000;
      background-size: cover;
      background-repeat: no-repeat;
    }

    h1 {
      font-family: Maharlika;
      color: #BD8EA5;
    }

    .contenedor {
      border-radius: 40px;
      background-color: #F3F2EE;
      width: 90%;
      height: 80%;
      margin: auto;
      text-align: center;
      padding: 20px;
      border: 2px solid #BD8EA5;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    img {
      width: 300px;
      height: 150px;
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

    .img-credenciales {
      width: 25%;
      height: 30%;
    }
  </style>
</head>

<body>


  <body>
    <div class="contenedor">

      <br><br><br><br>
      <h1>Estudiantes</h1><br>

      
      <a href="mostrarEstudiantes.php"><img src="../img/Mostrar.png" alt="Estudiantes"></a>
      <a href="buscarEditarEstudiante.php"><img src="../img/Editar.png" alt=""></a>
      <a href="buscarEliminarEstudiante.php"><img src="../img/Eliminar.png" alt=""></a>
      <a href="buscarAsignarCredenciales.php"><img src="../img/credenciales.png" alt="" class="img-credenciales"></a>
      <br>
      <br>
      <form action="../dashboard.php">
        <input type="submit" value="Inicio" class="boton">
      </form>
    </div>
    </form>
  </body>

</html>