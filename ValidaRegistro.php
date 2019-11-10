
<?php
       
	$name=$_POST['name'];
	$mat=$_POST['mat'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$ti=$_POST['tipo'];
	
	
	$band=0;
	$ban=0;
				
	$link=mysqli_connect("localhost","root","");
	 $acentos = $link->query("SET NAMES 'utf8'");
	mysqli_select_db($link,"examen");




      
header("Content-Type: text/html;charset=utf-8");
	$resul=mysqli_query($link," select * from alumno");
	$resul2=mysqli_query($link," select * from profesor");
	while($row=mysqli_fetch_array($resul))
		{
		$ma=$row['Matricula'];
		$no=$row['Nombre'];
		if($name==$no){
		$band=$band+1;}
		if($mat==$ma){
		$ban=$ban+1;}
		}
	while($row=mysqli_fetch_array($resul2))
		{
		$id=$row['IdProf'];
		$nom=$row['Nombre'];
		if($name==$nom){
		$band=$band+1;}
		if($mat==$id){
		$ban=$ban+1;}
		}


	if($band==0)
	{
		if($ban==0)
		{
		if($pass==$rpass && strlen($mat) == 9 && ctype_digit($mat))
		{	
		if($ti==1){
			mysqli_select_db($link,"examen");
			$res=mysqli_query($link,"insert into alumno(Matricula,Nombre,Password)
                        values('$mat','$name','$pass')");
			echo ' <script language="javascript">alert("Alumno registrado con éxito");window.history.back();</script> ';
		
		}else{
			mysqli_select_db($link,"examen");
			$res=mysqli_query($link,"insert into profesor(IdProf,Nombre,Pass)
                        values('$mat','$name','$pass')");
			echo ' <script language="javascript">alert("Profesor registrado con éxito");window.history.back();</script> ';
		}
	
		}else{
		
		echo '<script language="javascript">alert("Atencion, contraseñas o matricula incorrectas , verifique sus datos");window.history.back();</script> ';
			}
		}else{
		echo ' <script language="javascript">alert("Atencion, ya existe el matricula/id designado , verifique sus datos");window.history.back();</script> ';
		}

	}else{
	echo ' <script language="javascript">alert("Atencion, ya existe el nombre designado, verifique sus datos");window.history.back();</script> ';
	
	
	}
		
		
		


	mysqli_close($link);
?>

	


