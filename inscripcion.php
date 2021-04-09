<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="inscripcion11.css"/>
<title>WEB 2</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>


	<body background="fondo.jpg">

	<header class="cabecera">
		<img src="logo.png" width=88px height=88px  align="left" hspace="20" vspace="0" alt="0">
		<h1> INSCRIPCION</h1>
	</header>

	<section class="contenido">
		<br>
		<a class="btn btn-primary" href="index.html" role="button">INICIO</a><br><br>
		<a class="btn btn-primary" href="talleres.html" role="button">TALLERES</a><br><br>
		<a class="btn btn-primary" href="deportes.html" role="button">DEPORTES</a><br><br>
		<a class="btn btn-primary" href="eventos.html" role="button">EVENTOS</a><br><br>
		<a class="btn btn-primary" href="contacto1.html" role="button">CONTACTO</a>
	</section>


	<aside class="secundario">
<form name="form1" method="get" action="insertarinscripcion.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
     <td><br>Apellido</td>
      <td><br><label for="apellido"></label>
      <input type="text" name="apellido" id="apellido" required></td>
    </tr>
    <tr>
      <td><br>Telefono</td>
      <td><br><label for="telefono"></label>
      <input type="text" name="telefono" id="telefono" required></td>
    </tr>

   <tr>
      <td><br>Correo</td>
      <td><br><label for="correo"></label>
      <input type="text" name="correo" id="correo" required></td>
    </tr>
    <tr>
      <td><br>Actividad</td>
      <td><br><label for="actividad"></label>
      <input type="text" name="actividad" id="actividad" required></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="inscripcion"></td>
    </tr>
  </table>

</form>
	
	</aside>

	

</body>
</html>