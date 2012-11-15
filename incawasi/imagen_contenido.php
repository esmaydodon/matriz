<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<form action="imagen_articulo.php" method="post" enctype="multipart/form-data">
  <p><b>Campo de tipo texto:</b> <br />
    <input type="text" name="cadenatexto" size="20" maxlength="100" value="" />
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    <br/>  
  Ubicacion
    <? include("func/funciones.php");
            #include('login.php');
	        $consulta_ubicacion= "select idubicacion_imagen,ubicacion_imagen_bd from ubicacion_imagen  ";
	        $resultado_ubi = dime($consulta_ubicacion);
			echo"<select name='ubicacion_imagen' id='select'>
			     <option value='0'>Ubicacion</option>";
			while($ubicacion=mysql_fetch_array($resultado_ubi))
            {
				echo "<option value='".$ubicacion['idubicacion_imagen']."'>".$ubicacion['ubicacion_imagen_bd']."</option>";}
			echo"</select>";
		  ?>
     <a href="gestionar_ubicacion.php">Gestionar Ubicacion</a><br />
    <b>Enviar un nuevo archivo: </b> <br />
    <input name="file1" type="file" id="file1" />
    <br />
    <input type="submit" value="Enviar" />
  </form>
<br>   
<span id="image"></span>
</body>
</html>