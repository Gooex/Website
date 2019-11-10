
<?php
    session_start();    
	$mat=$_REQUEST['mat'];
	$pass=$_REQUEST['passwd'];
	$band=0;
	$bn=0;
	
	$link=mysqli_connect("localhost","root","");
	 $acentos = $link->query("SET NAMES 'utf8'");
	mysqli_select_db($link,"examen");




      
header("Content-Type: text/html;charset=utf-8");
	
	$sql=mysqli_query($link,"select * from profesor where IdProf='$mat'");
	if($row=mysqli_fetch_array($sql))
	{       $ps=$row['Pass'];
			$nom=$row['Nombre'];
		if($pass==$ps)
		{	
			$_SESSION['tipo']="$mat";
			$_SESSION['Nombre']="$nom";
			header("Location: Index2.php");
		}
		else
		{	
			echo '<script language="javascript">alert("CONTRASEÑA INCONRRECTA");window.history.back();</script> ';
		}
	}else{$band=$band+1;}
	
	$sql2=mysqli_query($link,"select * from alumno where Matricula='$mat'");
	if($row=mysqli_fetch_array($sql2))
	{       $ps=$row['Password'];
			$nom=$row['Nombre'];
		if($pass==$ps)
		{	$_SESSION['tipo']="$mat";
			$_SESSION['Nombre']="$nom";
			header("Location: Index3.php");
		}
		else
		{	
			echo '<script language="javascript">alert("CONTRASEÑA INCONRRECTA");window.history.back();</script> ';
			
		}
	}else{$band=$band+1;}
	
	if($band==2)
	{
	echo '<script language="javascript">alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR");window.history.back();</script> ';
	}
	
	
?>

