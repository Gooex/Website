<html lang = "en" >
<head>

<title>CREAR PREGUNTA</title>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/material-icons.css">
    <link href="css/estilos.css" rel="stylesheet">



<meta http-equiv="Content-Language" content="Spanish" />
<meta http-equiv="Content-Type" content="text/html; charset= UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<script src="js/Funciones.js"></script>

<script src="css/estilos.css"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-latest.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#mensaje1").fadeOut(1500);
    },2000);
});
</script>



</head>
<body >

<script src="js/Funciones.js"></script>
<?PHP 
session_start();
$usuario=$_SESSION['Nombre'];
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

<?php if ( isset ($_GET['Modificado'])) :?>
                <div id="mensaje1" class=" alert alert-success alert-dismissible" role="alert">
                    <i class="icon-error-loggin material-icons">verified_user</i> Cambios Guardados
                </div>
            <?php endif;?>

	<div class="container margen">
		<div class="panel panel-default" id="tablamostrarpreguntas">
		    <p align="right"><?php 
			echo('<img src= "imagenes/profesor.jpg " width="30"> Profesor: &nbsp ' . $_SESSION['Nombre']);
			?></p>
		<hr>
				<?php include  'TablaPreguntas.php' ?>
			
		</div>
	</div>

<div>
	<?php include 'Modal/ModalMostar.php' ?>
</div>

<div id="modalActualizar">
	<?php include 'Modal/ModalActualizar.php' ?>
</div>

</div>
	

<div id="mensajeME">

                            </div>

	
<!--FIN ACTUALIZAR-->
</body>
</html>