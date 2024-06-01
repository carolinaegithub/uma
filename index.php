<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universidad Maquilishuat</title>
  <link rel="icon" type="image" href="img/UMA.jpg">
  <style>
    .barra-tareas {
      background-color: #F3F2EE;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      z-index: 9999;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 99%;
      top: 0;
    }

    .barra-tareas h1 {
      font-family: Maharlika;
      font-size: 30px;
      color: #1D1D1D;
    }

    .barra-tareas img {
      width: 6rem;
      height: 6rem;
      align-content: center;
    }

    .menu-desplegable {
      display: flex;
      align-items: center;
      position: relative;
    }

    .menu-desplegable img {
      cursor: pointer;
      width: 100px;
      height: 100px;
    }

    .menu-desplegable a img {
      width: 150px;
      height: 100px;
      display: block;
      margin: 0 auto;
      /* Centra horizontalmente las imágenes */
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

    body {
      background: #1D1D1D;
      font-size: 5px;
    }

    h6 {
      font-size: 17px;
      color: #F3F2EE;
      text-align: center;
    }

    .slider {
      overflow: hidden;
      width: 100%;
      max-width: 95%;
      margin: 0 auto;
    }

    .slider--inner {
      display: flex;
      transition: transform 0.3s ease-in;
    }

    .slider--inner img {
      width: 100%;
      /* Ajusta el ancho de las imágenes al 100% */
      height: auto;
      /* Permite que la altura se ajuste automáticamente para mantener la proporción original */
      object-fit: cover;
    }

    img {
      width: 100%;
    }

    .contenedor-nuevo {
      width: 100%;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-righ: auto;
      margin-left: auto;
    }

    .contenedor-misión {
      border-radius: 30px;
      background-color: #CCBAB5;
      width: 600px;
      margin: 10px;
      text-align: center;
      padding: 20px;
      border: 2px solid #BD8EA5;
      display: inline-block;
    }

    .contenedor-visión {
      border-radius: 30px;
      background-color: #CCBAB5;
      width: 600px;
      margin: 10px;
      text-align: center;
      padding: 20px;
      border: 2px solid #BD8EA5;
      display: inline-block;
    }

    .contenedor-misión h1 {
      font-family: Maharlika;
      font-size: 17px;
      color: #1D1D1D;
    }

    .contenedor-visión h1 {
      font-family: Maharlika;
      font-size: 17px;
      color: #1D1D1D;
    }

    .contenedor-misión p {
      font-size: 15px;
      color: #1D1D1D;
      text-align: justify;
    }

    .contenedor-visión p {
      font-size: 15px;
      text-align: justify;
      color: #1D1D1D;
    }

    p {
      font-family: Maharlika;
      font-size: 13px;
      color: #CCBAB5;
      text-align: center;
    }

    .p1 {
      font-family: Maharlika;
      font-size: 13px;
      /* Ajusta el tamaño de fuente del párrafo */
      color: #000000;
      text-align: center;
    }

    @media (min-width: 760px) {
      .contenedor-misión {
      width: 700px;
    }

    .contenedor-visión {
      width: 700px;
    }
    }

    @media (min-width: 1015px) {
      .contenedor-misión {
      width: 450px;
    }

    .contenedor-visión {
      width: 450px;
    }
    }

    @media (min-width: 1350px) {
      .contenedor-misión {
      width: 600px;
    }

    .contenedor-visión {
      width: 600px;
    }
    }

  </style>

</head>

<body>
  <div id="indice" class="barra-tareas">
    <a href="PaginaInicio.php" target="_blank">
      <img src="img/UMA.jpg" alt="Logo UMA"></a>
    <h1>Universidad Maquilishuat</h1>
    <div class="menu-desplegable">
      <img src="img/MN.png" alt="Menú">
      <div class="menu-desplegable-content">
        <br>
        <a href="infoParaAspirantes.php" target="_blank">
          <img src="img/AS.png" alt="Aspirantes">
        </a><br>

        <a href="Estudiante/LoginEstudiante.php" target="_blank">
          <img src="img/ES.png" alt="Estudiantes">
        </a>

        <a href="mostrarCarreras.php" target="_blank">
          <img src="img/CA.png" alt="Carreras">
        </a><br>

        <a href="dashboard.php" target="_blank">
          <img src="img/AD.png" alt="Administración">
        </a>

        <a href="acercaDe.php">
          <img src="img/AB.png" alt="About">
        </a>

      </div>
    </div>
  </div>

  <br><br><br>

  <div class="slider">
    <div class="slider--inner">
      <img src="img/PAD.png">
      <img src="img/CO.png">
      <img src="img/AE.png">
    </div>
  </div>

  <br><br>

  <div class="contenedor-nuevo">
    <div class="contenedor-misión">
      <h1>Misión</h1>
      <p>Nuestra misión es proporcionar una educación integral y de calidad que promueva el desarrollo académico, personal y emocional de nuestros estudiantes. Nos enfocamos en crear un ambiente de apoyo y cuidado, donde se fomente activamente la salud mental y se brinden recursos y servicios para el bienestar de los estudiantes. A través de una amplia gama de programas y actividades, buscamos ayudar a nuestros estudiantes a explorar y desarrollar al máximo sus habilidades y talentos. Nuestro objetivo es preparar a nuestros graduados para enfrentar los desafíos del mundo laboral, equipándolos con las competencias necesarias para destacarse en su campo de estudio y contribuir de manera significativa a la sociedad.</p>
    </div>

    <div class="contenedor-visión">
      <h1>Visión</h1>
      <p>Nuestra visión es ser reconocidos a nivel nacional e internacional como una institución líder en la educación superior, comprometida con el bienestar y la salud mental de nuestros estudiantes. Nos esforzamos por brindar un entorno seguro y propicio, donde cada estudiante pueda desarrollar todas sus competencias y aptitudes, alcanzando el éxito académico y convirtiéndose en profesionales altamente exitosos en sus respectivas disciplinas. Buscamos ser referentes en la formación integral de nuestros estudiantes, preparándolos para enfrentar los desafíos del mundo laboral y contribuir de manera significativa al desarrollo de la sociedad.</p>
    </div>
  </div>

  <h6>Hecho con  💜  por:</h6>

  <p>Carolina Espinal Marroquín</p>
  <p>Evelin Lizeth López Gómez</p>
  <p>Camila Alejandra Rodríguez Martínez</p>
  <p>3° Sistemas Informáticos</p>
  <p>© 2023 UMA</p>

  <div class="p1">(Taylor's Version)</div>


</body>

</html>

<script>
    let sliderInner = document.querySelector(".slider--inner");
    let images = sliderInner.querySelectorAll("img");
    let index = 0;

    function nextSlide() {
      index++;
      if (index >= images.length) {
        index = 0;
      }
      updateSlider();
    }

    function updateSlider() {
      let percentage = index * -100;
      sliderInner.style.transform = "translateX(" + percentage + "%)";
    }

    setInterval(nextSlide, 5000);
  </script>