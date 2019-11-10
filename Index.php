<html>
	<head>
	<title>MENU PRINCIPAL</title>
	<meta http-equiv="Content-Language" content="Spanish" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
			
	<div id="wrap">
	<div id="header">
	<h1>
	<a><img src= "imagenes/images.png " width="120">  Exam Test  </a>
	</h1>
	</div>

<div id="menu">
<ul class="nav">
		<li><a href="Index.php"><img src= "imagenes/inicio.jpg " width="30">Inicio</a></li>
		<li><a href="#popup2" class="popup-link"><img src= "imagenes/registro.jpg " width="30">Registro</a></li>
		
</ul>
</div>

<div id="content">
<div class="right"> 
	<center><img src= "imagenes/evaluacion.jpg " height="300"></center>
	<hr color="#050732">
	<h2>Objetivo:</h2>
	<h3>
Con el objeto de contribuir a mejorar la calidad de la educación  basica, media superior y superior y programas especiales mediante evaluaciones externas de los aprendizajes logrados en cualquier etapa de los procesos educativos y conforme a los objetivos planteados en el inicio de cada materia, se realizaran las evaluaciones correspondientes mediante el uso de esta aplicacion.
	</h3>

</div>

<div class="left" > 
<form action="ValidaUsuario.php"  method="post">
	<h2>Login</h2>
	<center>
	<h3>Matricula</h3>
	<input type="text" name="mat" size=15 required />
	<br><br><h3>Password:</h3>
	<input type="password" name="passwd" size=15 required />
	<br><br>
	<input type="submit" name="enviar" value="Ingresar" requiered />
	<br><br>
</form>
</center>
<hr color="#050732">
</div>

<div style="clear: both;"> </div>
</div>

<div id="elabora">
<h5 align="left" class="Estilo2"><marquee>Elaborado por : Pablo Garcia Jimenez  </marquee></h5>
</div>

</div>

  <!-- INICIO REGISTRO -->
	<div class="modal-wrapper" id="popup2">
    <div class="popup2-contenedor">
       	<form method="post" action="ValidaRegistro.php" >
  		<fieldset>
    	<legend  style="font-size: 20pt; color: #A7A622"><b>Registro</b></legend>
		<div class="form-group">
      	<label style="font-size: 10pt"><b>Ingresa tú Nombre</b></label>
      	<input type="text" name="name" size="35" required placeholder="Ingresa tú Nombre" />
		<br></br>
		</div>
		<div class="form-group">
      	<label style="font-size: 10pt"><b>Ingresa tú Matricula/ID(9 digitos)</b></label>
      	<input type="text" name="mat" size="30"  required placeholder="Ingresa tú Matricula/ID" />
		<br></br>
		</div>
		<div class="form-group">
      	<label style="font-size: 10pt "><b>Ingresa tú Password</b></label>
      	<input type="password" name="pass"  size="33" required placeholder="Ingresa Password" />
		<br></br>
		</div>
    	<div class="form-group">
      	<label style="font-size: 10pt"><b>Repite tú Password</b></label>
      	<input type="password" name="rpass"  size="32" required placeholder="Repite tú Password" />
		<br></br>
		</div>
   		<div class="form-group">
      	<a><img src='imagenes/estudiante.jpg' width=50><input type="radio" name="tipo" value=1 checked>ESTUDIANTE
		<img src='imagenes/profesor.jpg' width=50><input type="radio" name="tipo" value=0 checked>PROFESOR</a>
      	
		<br></br>
		</div>
		<center> 
   		<input type="submit" name="submit" value="Registrarse"/>
		<br><br>
   	</center>
    </fieldset>
	</form>       
       <a class="popup2-cerrar" href="">X</a>    </div>
	</div>
<!--FIN REGISTRO--> 	
	</body>
</html>
