<html >
<head>
	<title>ALUMNO</title>
<meta http-equiv="Content-Language" content="Spanish" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body >
<?PHP 
session_start();
if(!isset($_SESSION['Nombre'])|| $_SESSION['tipo']==0)
	header("Location:Index.php");

?>
<div id="wrap">
	<div id="header">
	<h1>
	<a><img src= "imagenes/images.png" width="120">  Exam Test  </a>
	<a style="font-size: 35pt; color: #0D6D15"> "Alumno" </a>
	</h1>
</div>


<div id="menu">
<ul class="nav">
		<li><a href="Index2.php"><img src= "imagenes/inicio.jpg " width="30"> Inicio</a></li>
		<li><a href=""><img src= "imagenes/lapiz.png" width="27"> Examen</a>
			<ul>
				<li><a href="Examen.php">Generar</a></li>
			
				<li><a href="Historial.php">Historial</a></li>
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
	<h2 style="font-size: 15pt; color: #0D6D15">Objetivo:</h2>
	<h3>
Con el objeto de contribuir a mejorar la calidad de la educación  basica, media superior y superior y programas especiales mediante evaluaciones externas de los aprendizajes logrados en cualquier etapa de los procesos educativos y conforme a los objetivos planteados en el inicio de cada materia, se realizaran las evaluaciones correspondientes mediante el uso de esta aplicacion.
	</h3>

</div>
<div class="left" > 
<center>
<?php 
echo('<br>_________________________________</br>'); 
echo('&nbsp&nbsp&nbsp Alumno: &nbsp ' . $_SESSION['Nombre']);
echo('<br>_________________________________</br>'); 
?>
<br><hr color="#050732">
</div>

<div style="clear: both;"> </div>
</div>

</div>


</body>
</html>