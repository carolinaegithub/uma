<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Carreras</title>
  <link rel="stylesheet" href="style.css">
	<link rel="icon" type="image" href="img/UMA.jpg">
  <link rel="icon" type="image" href="../img/UMA.jpg">
  <link rel="stylesheet" href="../styles/styleMostrarTabla.css">
</head>

<body class="body">
  <h1>Carreras</h1>
  <div class="contenedor">
   <table border="2" class="table">
    <tr class="bg-pink">
      <td><b>Carrera</b></td>
    </tr>
    <?php
    require_once('conexion.php');
    $consulta = "SELECT * FROM carrera";
    $resultado = mysqli_query($conexion, $consulta);
    while ($carrera = mysqli_fetch_array($resultado)) {
    ?>
      <tr>
        <td><?php echo $carrera['carrera'] ?></td>
      </tr>
    <?php } ?>
   </table>
  </div>
  
  <br><br>
  <a href="/" class="boton" style="font-size: 12px;">Inicio</a>
</body>

</html>