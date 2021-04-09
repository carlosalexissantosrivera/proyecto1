<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WEB 2</title>

<style> 

table{ 
width:10%; 
margin:auto; 
border:1px 
solid #236CB6; 
} 


a{
  color: black;
}

a:hover{
  color: red;
}

a:active{
  color: black;
}
</style>

</head>
<body background="fondo.jpg">
	<br>
		<a href="index.html" class="btn btn-success">PAGINA PRINCIPAL</a>
	<br>

<?php
	$nombre=$_GET["nombre"];
	$apellido=$_GET["apellido"]; 
	$telefono=$_GET["telefono"]; 
	$correo=$_GET["correo"];
	$actividad=$_GET["actividad"];
	
	require("datosconexion.php");  //Funcion para incluir el archivo
	
	$conexion=mysqli_connect ($db_host,$db_usuario,$db_contra); //Conexion a la base de datos
		if(mysqli_connect_errno()){  //Funcion para error al conectar con la base de datos
			echo "Fallo al conectar con la BBDD";
			exit(); //Funcion para salir del codigo PHP
		}
	
	//Funcion para la seleccion de base de datos
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos"); 
	
	mysqli_set_charset($conexion,"utf8");  //Funcion para caracteres latinos
	
	//Consulta SQL
	$insertar="INSERT INTO alumno (nombre,apellido,telefono,correo,actividad) 
	VALUES('$nombre', '$apellido', '$telefono','$correo','$actividad')";  

	//Funcion para ejecutar la consulta SQL (tabla virtual)
	$resultados=mysqli_query($conexion, $insertar); 
	
	if($resultados==false){
		echo "Error en el registro ";
	}else{
		echo "Registro guardado<br><br>"; 
		echo "<table><tr><td>$nombre</td></tr>"; 
		echo "<tr><td>$apellido</td></tr>";
		echo "<tr><td>$telefono</td></tr>"; 
		echo "<tr><td>$correo</td></tr>";
		echo "<tr><td>$actividad</td></tr></table>";
	} 
	mysqli_close($conexion);  //Funcion para el cierre de la base de datos
?>

</body>
</html>