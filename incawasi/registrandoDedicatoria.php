<?php 
include("func/funciones.php");
$nom_aquien = quitar($_POST['nom']); $nom_aquien2 = quitar($_POST['nom2']); 
$ema_aquien= quitar($_POST['ema']);
$id_comprador= quitar($_POST['idu']);
$men_aquien = quitar($_POST['men']);
//$fecha = quitar($_POST['fecha2']);
$consulta = "INSERT INTO paraquien
(usuarios_idusuarios,nombre,apellido,email,mensaje)  VALUES 
								  ('$id_comprador',
								  '$nom_aquien',
								   '$nom_aquien2',
								  '$ema_aquien',
								  '$men_aquien')"  ;
//echo $consulta;
$resultado = dime($consulta) or die(mysql_error());
$last_aquien_id = mysql_insert_id();
if ($resultado){
	
	echo"<h1>Ok,</h1><br>
	     <input name='idaquien'id='idusuario' type='hidden' value='".$last_aquien_id."'> ";
	}else{
		echo"<b style='color:red;'><h1>F5.   error.</h1></b>";
		}
?> 
 
