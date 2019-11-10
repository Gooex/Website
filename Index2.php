<html>
	<head>
	<title>PROFESOR</title>
	<meta http-equiv="Content-Language" content="Spanish" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	<?PHP 

	session_start();


	$usuario=$_SESSION['Nombre'];
	$Tipo=$_SESSION['tipo'];
	
	if(!isset($_SESSION['Nombre'])|| $_SESSION['tipo']==0)
	header("Location:Index.php");
	?>

	<div id="wrap">
	<div id="header">
	<h1>
	<a><img src= "imagenes/images.png" width="120">  Exam Test  </a>
	<a style="font-size: 30pt; color: #17A2A7"> "Profesor" </a>
	</h1>
</div>

<div id="menu">
<ul class="nav">
		<li><a href="Index2.php"><img src= "imagenes/inicio.jpg " width="30"> Inicio</a></li>
		<li><a href=""><img src= "imagenes/lapiz.png" width="27"> Examen</a>
			<ul>
				<li><a href="CrearPregunta.php">Crear</a><li>
			
				<li><a href="Visualizar.php">Visualizar</a></li>
			</li>
			</ul>
		<li><a href="VerificaSalir.php"><img src= "imagenes/r.png " width="27"> Salir</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 
	<center><img src= "imagenes/sep.jpg " height="210"></center>
	<br/>
	<hr color="#060948">
	<h2 style="font-size: 15pt; color: #A7A622">Objetivo:</h2>
	<h3>
Con el objeto de contribuir a mejorar la calidad de la educación  basica, media superior y superior y programas especiales mediante evaluaciones externas de los aprendizajes logrados en cualquier etapa de los procesos educativos y conforme a los objetivos planteados en el inicio de cada materia, se realizaran las evaluaciones correspondientes mediante el uso de esta aplicacion.
	</h3>

</div>

<div class="left" > 
<center>
<?php 
echo('<br>_________________________________</br>'); 
echo('&nbsp&nbsp&nbsp Profesor: &nbsp ' . $_SESSION['Nombre']);
echo('<br>_________________________________</br>'); 
?>
<br><hr color="#050732">
</div>

<div style="clear: both;"> </div>
</div>



</div>
<!--INICIO ACTUALIZAR -->
<div class="modal-wrapper" id="popup2">
<div class="popup2-contenedor">
	<fieldset>
	<legend  style="font-size: 14pt; color: #DF3229"><b>Actualizar Examen</b></legend>
	<center>
	<br>
	<?PHP
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"examen");
	$result=mysqli_query($link,"select * from profesor where Nombre='$usuario'"); 
	while($row = mysqli_fetch_array($result)) 
  	{ 
    	$id=$row["IdProf"];
	}
	$preg=mysqli_query($link,"select * from preguntas where IdProfesor='$id' ");
	?>
	<TABLE BORDER=1> 
      <TR>
	  	  <TD bgcolor="#FFFFCC"  width="10%"><B>Pregunta</B></TD> 	  
          <TD bgcolor="#FFFFCC" width="80%"><B><center>Area</center></B></TD> 	  
		  <TD bgcolor="#FFFFCC" width="5%"><B>Eliminar</B></TD> 
		  <TD bgcolor="#FFFFCC" width="5%"><B>Modificar</B></TD> 
		  	  
     </TR>
	<?php 
	
	while($row3 = mysqli_fetch_array($preg)) 
  	{      
	$idp=$row3["IdPreg"];
    $area=$row3["Area"];
    $base=$row3["BaseReac"];
	printf("<tr><td>%s</td><td>%s</td><td><center><a onclick=\"return confirmSubmit()\"href=\"BorrarPreg.php?IdPreg=%s\"><img src='imagenes/eliminar.jpg' width='14' height='14' border='0'></a></center></td><td><center><a onclick=\"return confirmSubmit()\"href=\"ModificarPreg.php?IdPreg=%s\"><img src='imagenes/modificar.jpg' width='14' height='14' border='0'></a></center></td></tr>",$area,$base,$idp,$idp); 
   	}
	
	
	mysqli_free_result($result); 
   	mysqli_close($link); 
	?> 
	</table>
	<br>
	</center>
	</fieldset>
	<a class="popup2-cerrar" href="">X</a>
</div>
</div>
<!--FIN ACTUALIZAR-->
</body>
</html>