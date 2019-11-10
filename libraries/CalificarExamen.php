

<?php
session_start();

//EJECUTAMOS LA CONSULTA DE BUSQUEDA
$crono=$_POST['crono'];

$IndexNombres=0;


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





 
 $positivos=0;
 $negativos=0;

//echo $datos;



    $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");
    header("Content-Type: text/html;charset=utf-8");
   
    for ($i=0; $i < $Tamanio; $i++) { 

        $idTem=$IdPreguntas[$i];

        $result3=mysqli_query($link,"SELECT IdRespuesta, Tipo FROM respuestas where IdPregunta=  $idTem"); 
        $row3 = $result3 ->fetch_assoc();
        $id1=$row3['IdRespuesta'];

         $result4=mysqli_query($link,"SELECT IdRespuesta, Tipo  FROM respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1");
        $row4 = $result4 ->fetch_assoc();
        $id2=$row4['IdRespuesta'];

        $result5=mysqli_query($link,"SELECT IdRespuesta, Tipo FROM respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1  && IdRespuesta != $id2");
        $row5 = $result5 ->fetch_assoc();
        $id3=$row5['IdRespuesta'];

        $result6=mysqli_query($link,"SELECT Tipo  FROM Respuestas WHERE IdPregunta= $idTem && IdRespuesta != $id1 && IdRespuesta != $id2 && IdRespuesta != $id3");
        $row6 = $result6 ->fetch_assoc();

        


        if(($row3['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $positivos++;
        if(($row3['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $negativos++;
        

   $IndexRadioIndividuales++;         
        
        if(($row4['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $positivos++;
        if(($row4['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $negativos++;
        
   $IndexRadioIndividuales++;  

        if(($row5['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $positivos++;
        if(($row5['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $negativos++;
       

$IndexRadioIndividuales++;

        if(($row6['Tipo']==1)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $positivos++;
        if(($row6['Tipo']==0)&&($RadioIndividual[$IndexRadioIndividuales]==true))
            $negativos++;
        

$IndexRadioIndividuales++;


    }


 $fecha=date('Y-m-d');



$prom=((10)/($negativos+$positivos))*$positivos;


$idalumno=intval($_SESSION['tipo']);

$res=mysqli_query($link,"insert into Historial(IdHistorial, Fecha, Correctas, Incorrectas, Promedio, IdAlumno,Cronometro)values(null, '$fecha',$positivos, $negativos,$prom,$idalumno,'$crono')");

//echo $res;

    $datos = array(
        
                0 => $negativos,
                1 => $positivos
        );

   header('Content-type: application/json; charset=utf-8');
  echo json_encode($datos);




?>