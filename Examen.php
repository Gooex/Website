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
<body onload="inicio();">
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
	
	<hr color="#050732">
</div>


<div style="clear: both;"> </div>
</div>

	<p align="right"><?php 
			echo('<img src= "imagenes/estudiante.jpg " width="30"> Alumno: &nbsp ' . $_SESSION['Nombre']);
			?></p>
			<hr>

<form id="FormularioExamen" action="" onSubmit="Verificar(); return false"   method="post">
	<div class="container col-md-9 centro">

		<div id="contenedor">
			
			<div class="reloj" id="Horas">00</div>
			<div class="reloj" id="Minutos">:00</div>
			<div class="reloj" id="Segundos">:00</div>
			<div class="reloj" id="Centesimas">:00</div>
		</div>

 <input style="display: none;" name="crono" type="text" id="crono">


		<div class="panel panel-default" id="tablamostrarpreguntas">
		    

				<?php include  'libraries/MostrarExamen.php' ?>
			
		</div>


        <button id="boton" type="submit" class="center-block btn mdl-button--raised mdl-js-ripple-effect">Enviar</button>


	</div>

<?php include  'Modal/ModalPreguntas.php' ?>
<?php include  'Modal/ModalCalificacion.php' ?>

    
</form>

<div id="elabora">
<h5 align="left" class="Estilo2"><marquee> </marquee></h5>
</div>

</div>

<div id="mensajeME">
</div>


</body>
</html>