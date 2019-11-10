	<?php

	$idP=$_POST['llavePrim'];
	$Area=$_POST['Ar1'];
	$Definicion=$_POST['DefOp1'];
	$Base=$_POST['BasRe1'];

 	if (isset($_POST['checkEli']))
		$check=$_POST['checkEli'];
	else  
		$check=0;


	$existeimagen=true;

	if (empty($_FILES['archivo']['name'])){
		$existeimagen=false;
	}



	$llaveRes1=$_POST["llavePrimR1"];
	$Respuesta1=$_POST["Res11"];
	$Argumentacion1=$_POST['Arg11'];

	$llaveRes2=$_POST["llavePrimR2"];
	$Respuesta2=$_POST["Res21"];
	$Argumentacion2=$_POST['Arg21'];
	
	$llaveRes3=$_POST["llavePrimR3"];
	$Respuesta3=$_POST["Res31"];
	$Argumentacion3=$_POST['Arg31'];
	
	$llaveRes4=$_POST["llavePrimR4"];
	$Respuesta4=$_POST["Res41"];
	$Argumentacion4=$_POST['Arg41'];

	$Radio=$_POST['optradio1'];
	$id=0;

	$Resp1=0;
	$Resp2=0;
	$Resp3=0;
	$Resp4=0;


	if($Radio==0)
		$Resp1=true;
	elseif ($Radio==1)
		$Resp2=true;
	elseif ($Radio==2)
		$Resp3=true;
	elseif ($Radio==3)
		$Resp4=true;



 	$link=mysqli_connect("localhost","root","");
     $acentos = $link->query("SET NAMES 'utf8'");
	mysqli_select_db($link,"examen");




      
header("Content-Type: text/html;charset=utf-8");
//eliminar imagen
if($check==1)
	$result=mysqli_query($link,"DELETE FROM imagenes where IdPregunta = $idP");




				//guardar imagen
			if($existeimagen==true)
			{
				$binario_nombre=$_FILES['archivo']['name'];
				move_uploaded_file($_FILES['archivo']['tmp_name'],"../imagenes/" . $_FILES['archivo']['name']);

				$variable="imagenes/".$binario_nombre;
			

				//para saber si existe una imagen
				$res=mysqli_query($link,"select * from imagenes where IdPregunta= $idP");

				if(mysqli_num_rows($res)>0)
				{
					
					
					$sql = "UPDATE imagenes SET Ubicacion= '$variable' where IdPregunta= $idP";
					$res=mysqli_query($link,$sql);
				}
				else
				{
					

					$sql = "INSERT INTO `imagenes` (`idImagen`, `Ubicacion`, `IdPregunta`) VALUES (NULL,'".$variable."', ".$idP.")";
					$res=mysqli_query($link,$sql);
				}
			}
				
				

			//cambios pregunta
			$sql = "UPDATE preguntas SET Area= '$Area', DefOper= '$Definicion', BaseReac= '$Base'  where IdPreg= $idP";
			$res=mysqli_query($link,$sql);


			//cambio respuesta 1
			$sql = "UPDATE respuestas SET Respuesta= '$Respuesta1', Argumento= '$Argumentacion1', Tipo= $Resp1  where IdRespuesta= $llaveRes1";
			$res=mysqli_query($link,$sql);

			//cambio respuesta 2
			$sql = "UPDATE respuestas SET Respuesta= '$Respuesta2', Argumento= '$Argumentacion2', Tipo= $Resp2  where IdRespuesta= $llaveRes2";
			$res=mysqli_query($link,$sql);

			//cambio respuesta 3
			$sql = "UPDATE respuestas SET Respuesta= '$Respuesta3', Argumento= '$Argumentacion3', Tipo= $Resp3  where IdRespuesta= $llaveRes3";
			$res=mysqli_query($link,$sql);


			//cambio respuesta 4
			$sql = "UPDATE respuestas SET Respuesta= '$Respuesta4', Argumento= '$Argumentacion4', Tipo= $Resp4  where IdRespuesta= $llaveRes4";
			$res=mysqli_query($link,$sql);
			

			 header("Location: ../Visualizar.php?Modificado");

	mysqli_close($link);

?>
