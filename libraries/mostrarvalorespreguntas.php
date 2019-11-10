<?php



$id=$_POST['id'];

    $link=mysqli_connect("localhost","root","");
     $acentos = $link->query("SET NAMES 'utf8'");
	mysqli_select_db($link,"examen");




      
header("Content-Type: text/html;charset=utf-8");
    $result=mysqli_query($link,"SELECT Area, DefOper, BaseReac FROM preguntas WHERE IdPreg= $id"); 
   

$row = $result ->fetch_assoc();

$result2=mysqli_query($link,"SELECT IdRespuesta, Respuesta, Argumento, Tipo FROM respuestas WHERE IdPregunta= $id"); 
   $row2 = $result2 ->fetch_assoc();

   $id1=$row2['IdRespuesta'];

   $result3=mysqli_query($link,"SELECT IdRespuesta, Respuesta, Argumento, Tipo FROM respuestas WHERE IdPregunta= $id && IdRespuesta != $id1"); 
   $row3 = $result3 ->fetch_assoc();
    $id2=$row3['IdRespuesta'];

   $result4=mysqli_query($link,"SELECT IdRespuesta, Respuesta, Argumento, Tipo FROM respuestas WHERE IdPregunta= $id && IdRespuesta != $id1  && IdRespuesta != $id2"); 
   $row4 = $result4 ->fetch_assoc();
       $id3=$row4['IdRespuesta'];

   $result5=mysqli_query($link,"SELECT Respuesta, Argumento, Tipo FROM respuestas WHERE IdPregunta= $id && IdRespuesta != $id1 && IdRespuesta != $id2 && IdRespuesta != $id3"); 
   $row5 = $result5 ->fetch_assoc();

//echo $row['BaseReac'];


   $result6=mysqli_query($link,"SELECT Ubicacion FROM imagenes WHERE IdPregunta= $id"); 
   


	if(mysqli_num_rows($result6)>0)
	{

		$row6 = $result6 ->fetch_assoc();
			$datos = array(
		
				0 => $row['Area'],
				1 => $row['DefOper'],
				2 => $row['BaseReac'],
				3 => $row2['Respuesta'],
				4 => $row2['Argumento'],
				5 => $row2['Tipo'],
				6 => $row3['Respuesta'],
				7 => $row3['Argumento'],
				8 => $row3['Tipo'],
				9 => $row4['Respuesta'],
				10 => $row4['Argumento'],
				11 => $row4['Tipo'],
				12 => $row5['Respuesta'],
				13 => $row5['Argumento'],
				14 => $row5['Tipo'],
				15 => $row6['Ubicacion']
		
		);
	}
	else
	{

	$datos = array(
		
				0 => $row['Area'],
				1 => $row['DefOper'],
				2 => $row['BaseReac'],
				3 => $row2['Respuesta'],
				4 => $row2['Argumento'],
				5 => $row2['Tipo'],
				6 => $row3['Respuesta'],
				7 => $row3['Argumento'],
				8 => $row3['Tipo'],
				9 => $row4['Respuesta'],
				10 => $row4['Argumento'],
				11 => $row4['Tipo'],
				12 => $row5['Respuesta'],
				13 => $row5['Argumento'],
				14 => $row5['Tipo'],
				15 => 0
		
		);

	}


		
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($datos);


?>
