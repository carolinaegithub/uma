<?php
 session_start();

 // Comprueba si ha iniciado sesión
 if (!isset($_SESSION['correo'])) {

  header("Location: logAdministracion.php");
  exit();
 }
?>
<html>

<head>
  <title>Panel de Control</title>
  <link rel="icon" type="image" href="img/UMA.jpg">
  <style>
    body {
      padding-top: 2rem;
      padding-bottom: 2rem;
      background-color: #CCBAB5;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .contenedor {
      border-radius: 50px;
      background-color: #F3F2EE;
      width: 90%;
      margin: auto;
      margin-bottom: 4rem;
      text-align: center;
      padding-top: 32px;
      padding-bottom: 45px;
      border: 2px solid #1D1D1D;
    }

    img {
      width: 300px;
      height: 150px;
      border-radius: 20px;
      margin: 6px;
    }

    .indice {
      align-items: center;
      justify-content: center;
    }

    .sesion {
      width: 12rem; margin-top: 1rem
    }

    .logo {
      width: 80%; height: 15%
    }

    @media (min-width: 650px) {
      .indice {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      justify-content: center;
    }

    .sesion {
      width: 12rem; 
      margin-top: 1rem;
    }

    .logo {
      width: 60%; height: 10%
    }

    body {
      padding: 30px;
    }
  }
  </style>
</head>

<body>
  <div class="contenedor">
    <div class="indice">
      <img src="img/UMA.png" class="logo">
      <a href="cerrar.php"><img src="img/cerrar.png" class="sesion"></a>
    </div>

    <a href="Estudiante/opcionesEstudiante.php"><img src="img/Estudiantes.png" alt="Estudiantes"></a>
    <a href="Docente/opcionesDocente.php"><img src="img/Docentes.png" alt="Docentes"></a>
    <a href="Carrera/opcionesCarrera.php"><img src="img/Carreras.png" alt="Carreras"></a>
    <br>
    <a href="Asignatura/opcionesAsignatura.php"><img src="img/Asignaturas.png" alt="Asignaturas"></a>
    <a href="Horario/opcionesHorario.php"><img src="img/Horarios.png" alt="Horarios"></a>
    <a href="Ciclo/opcionesCiclo.php"><img src="img/Ciclos.png" alt="Ciclos"></a>
    <br>
    <a href="Turno/opcionesTurno.php"><img src="img/Turnos.png" alt="Turno"></a>
    <a href="Nacionalidad/opcionesNacionalidad.php"><img src="img/Nacionalidades.png" alt="Nacionalidades"></a>
    <a href="Departamento/mostrarDepartamentos.php"><img src="img/Departamentos.png" alt="Departamentos"></a>
    <br>
    <a href="EstadoCivil/mostrarEstadoCivil.php"><img src="img/EstadoCivil.png" alt="EstadoCivil"></a>
    <a href="EstadoLaboral/mostrarEstadoLaboral.php"><img src="img/EstadoLaboral.png" alt="EstadoLaboral"></a>
  </div>

  </form>
</body>

</html>