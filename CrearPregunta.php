<html lang = "en" >
<head>

<title>CREAR PREGUNTA</title>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<meta http-equiv="Content-Language" content="Spanish" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<body >
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


	<div class="container">
	  <div class="panel panel-default">
	    <div class="panel-body">
			<p align="right"><?php 
			echo('<img src= "imagenes/profesor.jpg " width="30"> Profesor: &nbsp ' . $_SESSION['Nombre']);
			?></p>
			
			<h4 style="font-size: 15pt; color: #919C21">Crear Preguntas</h4>
			<hr>
			<form action="ValidarPregunta.php"  method="post" enctype="multipart/form-data">

									<div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputArea">Materia</label>
                                            <input name="Ar" type="text" id="inputArea" class="form-control" required >
                                        </div>
                                    </div>
 									
 									<div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputDO">Definion Operacional</label>
                                            <textarea name="DefOp" class="form-control" id="inputDO" rows="3" required></textarea>
                                        </div>
                                    </div>
                                  

                                    <div class="container">
                                         <div class="form-group col-md-6">
                                            <label for="inputBR">Base de Reactivo</label>
                                            <textarea name="BasRe" class="form-control" id="inputBR" rows="3" required></textarea>
                                        </div>
                                    </div>


									<div class="container">
										<div class="form-group col-md-6">
										    <label for="imagen1">Adjuntar Imagen</label>
										    <input name="archivo" type="file" id="archivo">
										    <p class="help-block">Las Imagenes son opcionales.</p>
										</div>
									</div>

							  		<!------------/////////////////////////////////////////////////////////////////-------------->


                                    <div class="container">
                                        <div class="form-group col-md-6">
                                            <label for="inputR1">Opcion de Respuesta 1</label>
                                            <input name="Res1" type="text" id="inputR1" class="form-control" required >
                                            <div class="radio">
											  <label><input type="radio" name="optradio" value="0" checked="checked">Correcta</label>
											</div>
                                        </div>

                                         <div class="form-group col-md-5">
                                            <label for="inputAR1">Argumentacion</label>
                                            <textarea name="Arg1" class="form-control" id="inputAR1" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <!------------/////////////////////////////////////////////////////////////////-------------->


                                     <div class="container">
                                         <div class="form-group col-md-6">
                                            <label for="inputR2">Opcion de Respuesta 2</label>
                                            <input name="Res2" type="text" id="inputR2" class="form-control" required >
                                            <div class="radio">
											  <label><input type="radio" name="optradio" value="1">Correcta</label>
											</div>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <label for="inputAR2">Argumentacion</label>
                                            <textarea name="Arg2" class="form-control" id="inputAR2" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <!------------/////////////////////////////////////////////////////////////////-------------->

                                     <div class="container">
                                         <div class="form-group col-md-6">
                                            <label for="inputR3">Opcion de Respuesta 3</label>
                                            <input name="Res3" type="text" id="inputR3" class="form-control" required >
                                            <div class="radio">
											  <label><input type="radio" name="optradio" value="2">Correcta</label>
											</div>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <label for="inputAR3">Argumentacion</label>
                                            <textarea name="Arg3" class="form-control" id="inputAR3" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <!------------/////////////////////////////////////////////////////////////////-------------->
                                    
                                     <div class="container">
                                         <div class="form-group col-md-6">
                                            <label for="inputR4">Opcion de Respuesta 4</label>
                                            <input name="Res4" type="text" id="inputR4" class="form-control" required >
                                            <div class="radio">
											  <label><input type="radio" name="optradio" value="3">Correcta</label>
											</div>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <label for="inputAR4">Argumentacion</label>
                                            <textarea name="Arg4" class="form-control" id="inputAR4" rows="3" required></textarea>
                                        </div>
                                    </div>


                                    <div class="container">
                                    <button type="submit" class="center-block btn mdl-button--raised mdl-js-ripple-effect">Crear Pregunta</button>
    
                                    </div>

			</form>
	    </div>
	  </div>
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