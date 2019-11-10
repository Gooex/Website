

<?php



$idP=$_POST['id'];


 $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");
    

$result=mysqli_query($link,"SELECT IdProfesor FROM preguntas WHERE IdPreg=$idP");
$row=$result->fetch_assoc();



$id=$row['IdProfesor'];

    if($result=mysqli_query($link,"DELETE FROM preguntas where IdPreg = $idP"))
    {
        
                

    $link=mysqli_connect("localhost","root","");
    $acentos = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link,"examen");
    $result=mysqli_query($link,"SELECT BaseReac, IdPreg FROM preguntas WHERE IdProfesor=$id"); 
   
header("Content-Type: text/html;charset=utf-8");

if ($result){
    
    echo '<div class="table-responsive">
    <table class="table table-striped table-hover">
            <tr>
                <th class="col-n text-center">Pregunta</th>
                <th class="col-btns text-center">Visualizar</th>
                <th class="col-btns text-center">Modificar</th>
                <th class="col-btns text-center">Eliminar</th>

            </tr>';
    while ($row=$result->fetch_assoc()){
        echo '<tr>
                <td class="">'.$row['BaseReac'].'</td>
                <td>
                 <a onclick="valoresPregunta('.$row['IdPreg'].');" data-toggle="modal" data-target="#Mostrar"><i class="icon-search material-icons">search</i></a> 
                </td>
                <td>
                 <a onclick="valoresPregunta2('.$row['IdPreg'].');" data-toggle="modal" data-target="#modificar"><i class="icon-edit material-icons">mode_edit</i></a> 
                </td>
                <td>
                     <a onclick="eliminarPregunta('.$row['IdPreg'].');" ><i class="icon-delete material-icons">delete</i></a> 
                </td>
               
                </tr>';
    }
    
    echo '</table>
            </div>';
    }
          
    } 
    else{
        echo 1;
    }








?>
