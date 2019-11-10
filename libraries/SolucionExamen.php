

<?php


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
$IndexRadioIndividuales=0;


    $IdPreguntas = array();
    $IdRadio = array();
    $RadioIndividual = array();

    $Tamanio=$_POST['NumerodePreguntas'];

    for ($i=0; $i < $Tamanio; $i++) {
        array_push($IdPreguntas, ''.$_POST['NumerodePregunta'.($i+1)]);
        array_push($IdRadio, ''.$_POST['opradio'.($i+1)]); 
    }

    for ($i=0; $i < $Tamanio ; $i++) {

        if($IdRadio[$i]==0)
        {
            array_push($RadioIndividual, true);
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, false);  
        }
        elseif ($IdRadio[$i]==1)
        {
            array_push($RadioIndividual, false);
            array_push($RadioIndividual, true); 
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, false); 
        }
        elseif ($IdRadio[$i]==2)
        {
            array_push($RadioIndividual, false);
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, true); 
            array_push($RadioIndividual, false); 
        }
        elseif ($IdRadio[$i]==3)
        {
            array_push($RadioIndividual, false);
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, false); 
            array_push($RadioIndividual, true); 
        }

    }

 

//echo $datos;



    $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");
    header("Content-Type: text/html;charset=utf-8");
     echo '<div class="table-responsive"><table border="1" class="table table-striped table-hover">';

    for ($i=0; $i < $Tamanio; $i++) { 

        $idTem=$IdPreguntas[$i];
        $result=mysqli_query($link,"SELECT BaseReac FROM preguntas where IdPreg= $idTem");
        
        $row=$result->fetch_assoc();

        

         echo '
        <tr>
            <th class="active text-center" scope="col" colspan="4"><h1><strong class="glyphicon glyphicon-list-alt">  Pregunta '.($i+1).'</strong></h1> </th>
              
        </tr>

        <tr>
            <td class="text-justify" colspan="4">'.$row['BaseReac'].'</td>
        </tr>';


        $result2=mysqli_query($link,"SELECT Ubicacion FROM imagenes where IdPregunta=  $idTem"); 

         if(mysqli_num_rows($result2)>0)
        {
            $row2 = $result2 ->fetch_assoc();
            echo '<tr>
            <td colspan="4" class="text-center"><img src="'.$row2['Ubicacion'].'" alt="Imagen de ayuda" class="img-responsive center-block" width="200" height="200"></td>
              
        </tr>';
        }




        $result3=mysqli_query($link,"SELECT IdRespuesta, Tipo, Respuesta, Argumento FROM respuestas where IdPregunta=  $idTem"); 
        $row3 = $result3 ->fetch_assoc();
        $id1=$row3['IdRespuesta'];

         $result4=mysqli_query($link,"SELECT IdRespuesta, Tipo, Respuesta, Argumento FROM respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1");
        $row4 = $result4 ->fetch_assoc();
        $id2=$row4['IdRespuesta'];

        $result5=mysqli_query($link,"SELECT IdRespuesta, Tipo, Respuesta, Argumento FROM respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1  && IdRespuesta != $id2");
        $row5 = $result5 ->fetch_assoc();
        $id3=$row5['IdRespuesta'];

        $result6=mysqli_query($link,"SELECT Tipo, Respuesta, Argumento FROM Respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1 && IdRespuesta != $id2 && IdRespuesta != $id3");
        $row6 = $result6 ->fetch_assoc();




         echo '
        <tr>
            <th  class="col-btns text-center">Respuesta 1</th>
            <th  class="col-btns text-center">Respuesta 2</th>
            <th  class="col-btns text-center">Respuesta 3</th>
            <th  class="col-btns text-center">Respuesta 4</th>
              
        </tr>

        <tr>';

        if(($row3['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-success glyphicon glyphicon-ok"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row3['Respuesta'].'</td>';
        elseif(($row3['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-danger glyphicon glyphicon-remove"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row3['Respuesta'].'</td>';
        elseif(($row3['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify alert-success"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row3['Respuesta'].'</td>';
        elseif(($row3['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row3['Respuesta'].'</td>';
   

   $IndexRadioIndividuales++;         
        

        if(($row4['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-success glyphicon glyphicon-ok"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row4['Respuesta'].'</td>';
        elseif(($row4['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-danger glyphicon glyphicon-remove"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row4['Respuesta'].'</td>';
        elseif(($row4['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify alert-success"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row4['Respuesta'].'</td>';
        elseif(($row4['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row4['Respuesta'].'</td>';

   $IndexRadioIndividuales++;  


        if(($row5['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-success glyphicon glyphicon-ok"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row5['Respuesta'].'</td>';
        elseif(($row5['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-danger glyphicon glyphicon-remove"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row5['Respuesta'].'</td>';
        elseif(($row5['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify alert-success"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row5['Respuesta'].'</td>';
        elseif(($row5['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row5['Respuesta'].'</td>';

$IndexRadioIndividuales++;




    
        if(($row6['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-success glyphicon glyphicon-ok"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row6['Respuesta'].'</td>';
        elseif(($row6['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            echo '<td  class="tam-btn text-justify alert-danger glyphicon glyphicon-remove"><input checked="checked"  type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row6['Respuesta'].'</td>';
        elseif(($row6['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify alert-success"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row6['Respuesta'].'</td>';
        elseif(($row6['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==false))
            echo '<td  class="tam-btn text-justify"><input type="radio" name="'.$NombresBotones[$IndexNombres].'" id="'.$NombresIndividuales[$IndexNombresIndividuales++].'" value="0" disabled> '.$row6['Respuesta'].'</td>';

$IndexRadioIndividuales++;
$IndexNombres++;


   
       echo '




        <tr>
            <td  class="tam-btn text-justify">'.$row3['Argumento'].'</td>
            <td  class="tam-btn text-justify">'.$row4['Argumento'].'</td>
            <td  class="tam-btn text-justify">'.$row5['Argumento'].'</td>
            <td  class="tam-btn text-justify">'.$row6['Argumento'].'</td>
   
        </tr>';
    



        
    }


            echo '</table>
            </div>';





?>