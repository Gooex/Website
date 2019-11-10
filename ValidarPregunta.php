
<?php
   	session_start();
	$usuario=$_SESSION['Nombre'];    
    
	$Area=$_POST['Ar'];
	$Definicion=$_POST['DefOp'];
	$Base=$_POST['BasRe'];

	$existeimagen=true;

	if (empty($_FILES['archivo']['name'])){
		$existeimagen=false;
	}

	
	$Respuesta1=$_POST["Res1"];
	$Argumentacion1=$_POST['Arg1'];
	$Respuesta2=$_POST["Res2"];
	$Argumentacion2=$_POST['Arg2'];
	$Respuesta3=$_POST["Res3"];
	$Argumentacion3=$_POST['Arg3'];
	$Respuesta4=$_POST["Res4"];
	$Argumentacion4=$_POST['Arg4'];
	$Radio=$_POST['optradio'];
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
	$usu=mysqli_query($link,"select * from profesor where Nombre='$usuario'");
	if($row2=mysqli_fetch_array($usu))
	{       $ps=$row2['IdProf'];
	}

  	$sql="INSERT INTO `preguntas`(`IdPreg`, `Area`, `DefOper`, `BaseReac`, `IdProfesor`) VALUES (NULL,'".$Area."','".$Definicion."','".$Base."','".$ps."')";


	if($res=mysqli_query($link,$sql))
	{
		if($res = mysqli_query($link,"SELECT MAX(IdPreg) AS max FROM preguntas"))	
		{
			if ($row = mysqli_fetch_row($res)) {
				$id = trim($row[0]);
			}

			$sql="INSERT INTO `respuestas`(`IdRespuesta`, `Respuesta`, `Argumento`, `Tipo`, `IdPregunta`) VALUES (NULL,'".$Respuesta1."','".$Argumentacion1."',".$Resp1.",".$id.")";	
			$res=mysqli_query($link,$sql);

			$sql="INSERT INTO `respuestas`(`IdRespuesta`, `Respuesta`, `Argumento`, `Tipo`, `IdPregunta`) VALUES (NULL,'".$Respuesta2."','".$Argumentacion2."',".$Resp2.",".$id.")";	
			$res=mysqli_query($link,$sql);


			$sql="INSERT INTO `respuestas`(`IdRespuesta`, `Respuesta`, `Argumento`, `Tipo`, `IdPregunta`) VALUES (NULL,'".$Respuesta3."','".$Argumentacion3."',".$Resp3.",".$id.")";	
			$res=mysqli_query($link,$sql);


			$sql="INSERT INTO `respuestas`(`IdRespuesta`, `Respuesta`, `Argumento`, `Tipo`, `IdPregunta`) VALUES (NULL,'".$Respuesta4."','".$Argumentacion4."',".$Resp4.",".$id.")";	
			$res=mysqli_query($link,$sql);


			//guardar imagen
			if($existeimagen==true)
			{
				
				$binario_nombre=$_FILES['archivo']['name'];
				move_uploaded_file($_FILES['archivo']['tmp_name'],"imagenes/" . $_FILES['archivo']['name']);

				$variable="imagenes/".$binario_nombre;
				echo $variable;

				$sql = "INSERT INTO `imagenes` (`idImagen`, `Ubicacion`, `IdPregunta`) VALUES (NULL,'".$variable."', ".$id.")";
				$res=mysqli_query($link,$sql);


			}



		}
		
				echo ' <script language="javascript">alert("Guardado");window.history.back();</script> ';



	}
	


	mysqli_close($link);
	
?>

	