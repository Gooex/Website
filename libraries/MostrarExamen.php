

<?php


$IdPreguntas = array(
        
                0 =>"NumerodePregunta1",
                1 =>"NumerodePregunta2",
                2 =>"NumerodePregunta3",
                3 =>"NumerodePregunta4",
                4 =>"NumerodePregunta5",
                5 =>"NumerodePregunta6",
                6 =>"NumerodePregunta7",
                7 =>"NumerodePregunta8",
                8 =>"NumerodePregunta9",
                9 =>"NumerodePregunta10"   
        );


//EJECUTAMOS LA CONSULTA DE BUSQUEDA
$NombresBotones = array(
        
                0 =>"opradio1",
                1 =>"opradio2",
                2 =>"opradio3",
                3 =>"opradio4",
                4 =>"opradio5",
                5 =>"opradio6",
                6 =>"opradio7",
                7 =>"opradio8",
                8 =>"opradio9",
                9 =>"opradio10"   
        );

$IndexNombres=0;

$NombresIndividuales = array(
        
                0 =>"radio11",
                1 =>"radio12",
                2 =>"radio13",
                3 =>"radio14",
                4 =>"radio21",
                5 =>"radio22",
                6 =>"radio23",
                7 =>"radio24",
                8 =>"radio31",
                9 =>"radio32",
                10 =>"radio33",
                11 =>"radio34",
                12 =>"radio41",
                13 =>"radio42",
                14 =>"radio43",
                15 =>"radio44",
                16 =>"radio51",
                17 =>"radio52",
                18 =>"radio53",
                19 =>"radio54", 
                20 =>"radio61",
                21 =>"radio62",
                22 =>"radio63",
                23 =>"radio64",
                24 =>"radio71",
                25 =>"radio72",
                26 =>"radio73",
                27 =>"radio74",
                28 =>"radio81",
                29 =>"radio82", 
                30 =>"radio83",
                31 =>"radio84",
                32 =>"radio91",
                33 =>"radio92",
                34 =>"radio93",
                35 =>"radio94",
                36 =>"radio101",
                37 =>"radio102",
                38 =>"radio103",
                39 =>"radio104",    
        );

$IndexNombresIndividuales=0;

$Var="variable";
$NumPreg=1;
$NumAle= rand(6, 10);

       
    echo  '<input style="display: none;" name="NumerodePreguntas" type="text" id="NumerodePreguntas" value="'.$NumAle.'">';
                       

    $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");
    $result=mysqli_query($link,"SELECT BaseReac, IdPreg FROM preguntas ORDER BY RAND() LIMIT $NumAle"); 
   

      
header("Content-Type: text/html;charset=utf-8");


if ($result){
    
    echo '<div class="table-responsive">
    <table class="table table-striped table-hover">';
    while ($row=$result->fetch_assoc()){
        $idpregunta= intval($row['IdPreg']);
        echo  '<input style="display: none;" name="'.$IdPreguntas[$IndexNombres].'" type="text" id="'.$IdPreguntas[$IndexNombres].'" value="'.$idpregunta.'">';
		echo '
        <tr>
            <th class="active text-center" scope="col" colspan="4"><h1><strong class="glyphicon glyphicon-list-alt" >  Pregunta '.$NumPreg.'</strong></h1> </th>
              
        </tr>

        <tr>
			<td class="text-justify" colspan="4">'.$row['BaseReac'].'</td>
        </tr>';


         $result2=mysqli_query($link,"SELECT Ubicacion FROM imagenes where IdPregunta=  $idpregunta"); 

         if(mysqli_num_rows($result2)>0)
        {
            $row2 = $result2 ->fetch_assoc();
            $imagen= $row2['Ubicacion'];

            $Var="variable".$NumPreg;



            echo '<script> var '.$Var.'= " " + "'.$imagen.'";  </script>';
            echo '<tr>
            <td colspan="4" class="text-center"><img src="'.$imagen.'" alt="Imagen de ayuda" class="img-responsive center-block" width="200" height="200"  onclick="MostrarImagenGrande('.$Var.')"></td>
              
        </tr>';
        }

        $result3=mysqli_query($link,"SELECT IdRespuesta, Respuesta FROM respuestas where IdPregunta=  $idpregunta"); 
        $row3 = $result3 ->fetch_assoc();
        $id1=$row3['IdRespuesta'];

         $result4=mysqli_query($link,"SELECT IdRespuesta, Respuesta FROM respuestas WHERE IdPregunta= $idpregunta && IdRespuesta != $id1");
        $row4 = $result4 ->fetch_assoc();
        $id2=$row4['IdRespuesta'];

        $result5=mysqli_query($link,"SELECT IdRespuesta, Respuesta FROM respuestas WHERE IdPregunta= $idpregunta && IdRespuesta != $id1  && IdRespuesta != $id2");
        $row5 = $result5 ->fetch_assoc();
        $id3=$row5['IdRespuesta'];

        $result6=mysqli_query($link,"SELECT Respuesta FROM Respuestas WHERE IdPregunta= $idpregunta && IdRespuesta != $id1 && IdRespuesta != $id2 && IdRespuesta != $id3");
        $row6 = $result6 ->fetch_assoc();




        echo '
        <tr>
            <th  class="col-btns text-center">Respuesta 1</th>
            <th  class="col-btns text-center">Respuesta 2</th>
            <th  class="col-btns text-center">Respuesta 3</th>
            <th  class="col-btns text-center">Respuesta 4</th>
              
        </tr>

        <tr>
            <td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0"> '.$row3['Respuesta'].'</td>
            <td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="1"> '.$row4['Respuesta'].'</td>
            <td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="2"> '.$row5['Respuesta'].'</td>
            <td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="3"> '.$row6['Respuesta'].'</td>
   
        </tr>';

//<input type="radio" name="optradio1" id="radio41" value="3" >
     


        $NumPreg++;
        $IndexNombres++;
	}
    
    echo '</table>
            </div>';
    
    
    
    
}



?>