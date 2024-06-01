<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Ingreso</title>
	<link rel="icon" type="image" href="img/UMA.jpg">
  <style>
    body {
      background-color: #CCBAB5;
      text-align: center;
      font-family: tahoma;
      align-content: center;
    }

    .barra-tareas {
      background-color: #F3F2EE;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 9999;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      top: 0;
    }

    .barra-tareas h1 {
      font-family: Maharlika;
      font-size: 30px;
      color: #1D1D1D;
    }

    .barra-tareas img {
      width: 8rem;
      height: 8rem;
      align-content: center;
    }

    .menu-desplegable {
      display: flex;
      align-items: center;
      position: relative;
    }

    .menu-desplegable img {
      cursor: pointer;
      width: 6rem;
      height: 6rem;
    }

    .menu-desplegable a img {
      width: 150px;
      height: 100px;
      display: block;
      margin: 0 auto;
    }

    .menu-desplegable-content {
      display: none;
      position: absolute;
      border-radius: 40px;
      background-color: #BD8EA5;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 1;
      right: 0;
      min-width: 250px;
      max-height: 200px;
      overflow-y: auto;
      top: 10px;
      align-content: center;
    }

    .menu-desplegable:hover .menu-desplegable-content {
      display: block;
    }

    .contenedor {
      border-radius: 40px;
      background-color: #F3F2EE;
      width: 50%;
      text-align: center;
      padding: 20px;
      border: 2px solid #000000;
      margin-left: auto;
      margin-right: auto;
    }

    .contenido {
      position: relative;
    }

    .contenido img {
      width: 40%;
      /* Ajustar el ancho de la imagen al 100% del contenedor */
      max-width: 300px;
      /* Establecer un ancho máximo para evitar que la imagen sea demasiado grande */
      border: 1px solid #CCBAB5;
      /* Agregar un borde sólido de 5px con color negro */
      border-radius: 20px;
      /* Agregar bordes redondeados */
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
      border-radius: 30px;
    }

    .boton:hover {
      background: #CCBAB5;
      color: #fff !important;
    }

    @media (max-width: 700px) {
      .barra-tareas img {
      width: 4rem;
      height: 4rem;
      align-content: center;
    }
    .barra-tareas h1 {
      font-size: 24px;
    }
    .contenedor {
      border-radius: 40px;
      background-color: #F3F2EE;
      width: 75%;
    }
    }
  </style>
</head>

<body class="body">

  <div id="indice" class="barra-tareas">
    <a href="PaginaInicio.php">
      <img src="img/UMA.jpg" alt="Logo UMA"></a>
    <h1>Universidad Maquilishuat</h1>
    <div class="menu-desplegable">
      <img src="img/MN.png" alt="Menú">
      <div class="menu-desplegable-content">
        <br>
        <a href="infoParaAspirantes.php">
          <img src="img/AS.png" alt="Aspirantes">
        </a><br>

        <a href="Estudiante/LoginEstudiante.php">
          <img src="img/ES.png" alt="Estudiantes">
        </a>

        <a href="mostrarCarreras.php">
          <img src="img/CA.png" alt="Carreras">
        </a><br>

        <a href="dashboard.php">
          <img src="img/AD.png" alt="Administración">
        </a>
      </div>
    </div>
  </div>
  <br>
  <div class="contenedor">
    <div class="contenido">
      <img src="img/AF.jpg">

      <br>

      <p>La Universidad Maquilishuat, fue fundada el 13 de diciembre de 1989 bajo la tutela de la respetada escritora y letrista, Allison Finlay. Este venerado centro de enseñanza encontró su hogar en la histórica mansión que durante muchas generaciones perteneció a la ilustre familia Finlay. La fundadora, Allison, planteó con determinación el propósito de conferir a los estudiantes una educación de insuperable excelencia y convertir a la universidad en una institución digna de confianza para todos aquellos en busca de conocimiento. Su convicción en el desarrollo de las aptitudes de los estudiantes y en la atención a su bienestar emocional se convirtió en la piedra angular de su visión.<br><br>
        Desde sus albores, Allison asumió las funciones de directora y ejerció, asimismo, como docente de literatura hasta el año 2004. Durante su mandato al frente de la institución, la universidad prosperó en tamaño y prestigio, atrayendo a estudiantes provenientes de todos los rincones del país. El enfoque principal de la universidad abarca diversas disciplinas, incluyendo el área de programación y tecnología, así como las artes en todas sus manifestaciones, lo que le ha permitido atraer a una comunidad estudiantil diversa y apasionada por diferentes campos del conocimiento.<br><br>
        La educación brindada por la Universidad Maquilishuat se caracteriza por su carácter integral, ofreciendo a los estudiantes una amplia gama de oportunidades para explorar sus intereses y talentos. A lo largo de los años, la universidad ha continuado su crecimiento y expansión, perfeccionando constantemente su oferta académica. Este esfuerzo la ha elevado al estatus de institución líder en la educación superior, atrayendo a aspirantes y estudiantes de diversos orígenes y lugares del mundo. Allison, con indiscutible liderazgo, sigue ocupando el cargo de directora de la universidad en la actualidad. Sus valores inquebrantables en favor de la educación de excelencia y el bienestar integral de los estudiantes siguen siendo la brújula moral que orienta a la Universidad Maquilishuat en su misión educativa.</p>


    </div>
  </div>

</body>

</html>