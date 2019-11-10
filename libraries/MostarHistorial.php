
<?php 

//echo $_SESSION['tipo'];


    $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");

    $idalum=intval($_SESSION['tipo']);
    $result=mysqli_query($link,"SELECT Fecha, Correctas, Incorrectas, Promedio, Cronometro FROM Historial where IdAlumno=$idalum"); 

    if($result)
    {
    	 echo '<div class="table-responsive"><table class="table table-striped table-hover">';
    	 echo '
		        <tr>
		            <th class="active text-center" scope="col" colspan="5"><h1><strong class="glyphicon glyphicon-list-alt" >  Historial </strong></h1> </th>
		              
		        </tr>';


        echo '
        <tr>
            <th  class="col-btns text-center glyphicon glyphicon-calendar"> Fecha</th>
            <th  class="col-btns text-center glyphicon glyphicon-time"> Tiempo</th>
            <th  class="col-btns text-center glyphicon glyphicon-ok"> Preguntas Correctas</th>
            <th  class="col-btns text-center glyphicon glyphicon-remove"> Preguntas Incorrectas</th>
            <th  class="col-btns text-center glyphicon glyphicon-pencil"> Promedio</th>
        </tr>';


        	$suma=0;
        	$temp=0;
        	$total=0;
    	 while ($row=$result->fetch_assoc()){
    	 	$total=$total+1;
    	 	echo '
		     
		        <tr>
            <td  class="tam-btn text-center">'.$row['Fecha'].'</td>
            <td  class="tam-btn text-center">'.$row['Cronometro'].'</td>
            <td  class="tam-btn text-center">'.$row['Correctas'].'</td>
            <td  class="tam-btn text-center">'.$row['Incorrectas'].'</td>';

            $temp=$row['Promedio'];
            $suma=$temp+$suma;

            $temp= number_format($temp,2);

echo 	    '<td  class="tam-btn text-center">'.$temp.'</td>
   
        </tr>';

    	 }

    	 $prom=$suma / $total;

    	 $prom= number_format($prom,2);

    	 echo '     
		        <tr>
            <td colspan="4" class="tam-btn text-center">Promedio total</td>
            <td colspan="1" class="tam-btn text-center">'.$prom.'</td>
        </tr>';




    	  echo '</table>
            </div>';
    }











?>