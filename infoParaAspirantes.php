<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image" href="img/UMA.jpg">
  <title>Nuevo Ingreso</title>
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
      width: 80%;
      text-align: center;
      padding: 20px;
      border: 2px solid #000000;
      margin-left: auto;
      margin-right: auto;
    }

    .contenido {
      position: relative;
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
      <p><b>Actualización sobre los exámenes de admisión y registro para aspirantes</b><br><br>
        Estimada comunidad educativa y futuros aspirantes a la universidad,<br>
        Queremos informarles sobre los próximos exámenes de admisión y el período de
        registro para aquellos que deseen unirse a nuestra institución. Les pedimos
        que estén atentos a las siguientes noticias:<br><br>
        <b>1. Período de registro:</b> El período para llenar el formulario de registro
        para convertirse en aspirante a nuestra universidad está en marcha y se
        extenderá hasta el 31 de octubre de este año. Les recordamos que es importante completar el proceso de registro dentro de este plazo para poder participar en el próximo examen de admisión.<br><br>
        <b>2. Examen de admisión:</b> El examen de admisión se llevará a cabo el 02 de diciembre. Este examen es una parte crucial del proceso de selección y nos permitirá evaluar las habilidades y conocimientos de los aspirantes. Les recomendamos que se preparen adecuadamente para este desafío y estén listos para demostrar su potencial.<br><br>
        <b>3. Manténganse informados:</b> Les instamos a estar atentos a futuras noticias y comunicados relacionados con los exámenes de admisión y otros aspectos importantes de nuestra universidad. Estaremos compartiendo actualizaciones y recordatorios importantes a través de nuestros canales oficiales de comunicación.<br><br>
        Agradecemos su interés en formar parte de nuestra comunidad educativa
        y les deseamos mucho éxito en su proceso de admisión. Si tienen alguna
        pregunta o necesitan más información, no duden en comunicarse con nosotros
        a través de los canales designados.<br>
        ¡Buena suerte a todos los aspirantes!
      </p>

      <br>

      <form action="Aspirantes/form1.php">
        <input type="submit" value="Llenar Formulario de Registro" class="boton">
      </form>
    </div>
  </div>

</body>

</html>