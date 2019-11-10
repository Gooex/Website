<html >
<head>
	<title>ALUMNO</title>


    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/material-icons.css">
    <link href="css/estilos.css" rel="stylesheet">


<meta http-equiv="Content-Language" content="Spanish" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="js/Funciones.js"></script>

<script src="css/estilos.css"></script>

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="//code.jquery.com/jquery-latest.js"></script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body >
<?PHP 
session_start();
$mat=$_SESSION['tipo'];
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
 	
</div>


<div style="clear: both;"> </div>
</div>

	<p align="right"><?php 
			echo('<img src= "imagenes/estudiante.jpg " width="30"> Alumno: &nbsp ' . $_SESSION['Nombre']);
			?></p>
			<hr>


	<div class="container col-md-9 centro">
		<div class="panel panel-default">
		    

				<?php include  'libraries/MostarHistorial.php' ?>
			
		</div>


	</div>



<div id="elabora">
 <?PHP
include "libchart/classes/libchart.php";
$chart=new LineChart(800,270);
$datos=new XYDataSet();
$ca=0;
$pr=0;
$datos->addPoint(new Point("$ca",$pr));
$chart->setDataSet($datos);
$chart->getPlot()->setGraphPadding(new Padding(5,30,20,140));
$chart->setTitle("Calificaciones EGEL CENEVAL");
$chart->render("generated/demo.png");
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"examen");
$resultado=mysqli_query($link,"select * from historial where IdAlumno='$mat'");
while($row=mysqli_fetch_array($resultado))
{
	$ca=$ca+1;
	$pr=$row['Promedio'];
	$datos->addPoint(new Point("$ca",$pr));
}

mysqli_close($link);
$chart->setDataSet($datos);
$chart->getPlot()->setGraphPadding(new Padding(5,30,20,140));
$chart->setTitle("Calificaciones EGEL CENEVAL");
$chart->render("generated/demo.png");

?>
	<center><img src="generated/demo.png"></center>
<h5 align="left" class="Estilo2"><marquee> </marquee></h5>
</div>

</div>

<div id="mensajeME">
</div>


</body>
</html>