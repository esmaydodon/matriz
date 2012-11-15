<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<? include("ya.php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ivvertical - cajamarcaparanormal@hotmail.com</title>
 <link rel="stylesheet" type="text/css" href="../css/admin.css"/> 
<!--<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>-->

 <style type="text/css"> 
<!--  
.cuenta_text {
border: 1px solid #F00;;
font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
font-size: 15px;
padding: 3px;
-webkit-appearance: none;
-webkit-border-radius: 0;
color:#09F;
}
--> 
</style>
</head>

<body>

<div id="contenedor">
<!--<div id="articulos"></div>-->
<div class="noti">
              <h2>Productos (+)</h2>
    <div  ></div>
    <div  class="noti-pie"  > <?  $consulta_productos= dime("SELECT idproductos,nombre_producto,precio FROM productos")  or die(mysql_error()); 
while ($productos = mysql_fetch_array($consulta_productos))
{echo "<div style='clear:both';><div style='float:left;'><img src='imagenes/195681_100001147844515_3482776_q.jpg' width='50' height='50' /></div><div style='float:left;'><a href='detalleProducto.php?idproducto=". $productos['idproductos']."'>".$productos['nombre_producto']." </a></div></div><br>
";}?><div style=" clear:both;">formulario
<form action="RegistrandoProducto.php" method="post" enctype="multipart/form-data">
<input type="text" name="txtNombreProducto" size="15" maxlength="50" id="producto_text" class="cuenta_text" /><br>
<input  type="text" name="txtDescripcion" size="15" maxlength="50" id="producto_text"class="cuenta_text" /><br>
    <b>Campo de tipo texto:</b> <br />
    <input type="text" name="cadenatexto" size="20" maxlength="100" value="" />
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    <br/>  
<b>Enviar un nuevo archivo: </b> <br />
    <input name="file1" type="file" id="file1" />
    <br />
    <input type="submit" value="Enviar" />
</form>
<!--aqui es el otro de ejemplo-->
<!--<form action="imagen_articulo.php" method="post" enctype="multipart/form-data">
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
  </form>-->
</div>
</div>
</div><div class="noti">
              <h2>Cuenta</h2>
                 <div  ></div>
    <div  class="noti-pie" >
    <form target="paypal" action="actualizarCuenta.php" method="post">
<h1>usuario:</h1><input type="text" name="txtUsuario" size="15" maxlength="50" id="usuario_text" class="cuenta_text" /><br>
<h1>contraseña:</h1><input  type="password" name="txtContrasenia" size="15" maxlength="50" id="contrasenia_text"class="cuenta_text" />  
  </form>
</div>
</div><div class="noti">
              <h2>Remix the "People"!</h2>
    <div  ><img src="ccMixter - Featured Samples_files/militiamix.jpg" /></div>
                  <!--<script> new Ajax.Updater('cath_1', 'http://ccmixter.org/api/query?limit=page&f=html&t=avatar&user=bradstanfield', { method: 'get' } );</script>-->
               Freedom People is the musical love child of <a title="http://ccmixter.org/people/bradstanfield/profile" rel="nofollow" class="cc_format_link" href="http://ccmixter.org/people/bradstanfield/profile">Brad Stanfield</a> &amp; Periel Marr who share <br />
              <br />
              <a title="http://ccmixter.org/files/bradstanfield/21468" rel="nofollow" class="cc_format_link" href="#">comprar</a>.
<div  class="noti-pie" >
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="tamaños">tamaños</td></tr><tr>
  <td>&nbsp;</td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>

<!--<div id="videos">fd</div>-->
<div id="pie">
  <p>    www.kuraka.net <br>
  </p>
</div></div>
</body></html>