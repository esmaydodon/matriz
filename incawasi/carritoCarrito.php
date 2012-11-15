<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("func/conexion.php");
include("func/bd.php");
?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ivvertical - cajamarcaparanormal@hotmail.com</title>
<style type="text/css">
<!--.img { border:0px;}-->
body{
	background: #fff;

}
 .noti{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:200px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
div.noti {/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/ }  
  

.noti img{
	border: 0px;
	float:left;
	margin: 2px 7px 2px 0px;
	}	
.noti-pie{clear:both;}
.noti-pie img{ margin: 1px;}
#contenedor{
	font-size:12pt;
	text-align: left;
	background-color:#fff;
	width: 880px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 1px solid  #dfedfe;
}
.columna_derecha{
	float:left;
	width:250px;
	height:850px;
	background: #000/* url(imagenes/8.jpg) repeat-x;*/
}  
#noticias{ width:600px;
height:200px;}
#videos{ float: left;}
#pie{color:#AAA; font-size:10pt;
margin: 0px;
padding: 0px;
width: 100%;
background:  #000  url(../imagenes/bg-footer.png) repeat-x;
clear:both;}
.noti-pie{ width:100%; height:50px; margin-right:0px;}
a:link {
	color: #325E94;
}
a:visited {
	color: #4A4A4A;
}
#articulos{
	width:700px;
	height:728px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
</style> 
</head>

<body>

<div id="contenedor">
<? 	$consulta_productos=dime("select nombre_producto,descripcion_producto,precio from productos"); while ($producto=mysql_fetch_array($consulta_productos)){
	;
	echo"<div class='noti'>
              <h2>".$producto['nombre_producto'] ."</h2>
                 <div  ><img src='../ccMixter - Featured Samples_files/militiamix.jpg' /></div>
                ".$producto['descripcion_producto']."<br />
              <br />precio:".$producto['precio']."
              <a title='http://ccmixter.org/files/bradstanfield/21468' rel='nofollow' class='cc_format_link' href='#'>comprar</a>.
<div  class='noti-pie' >
  <form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
  <input type='hidden' name='cmd' value='_s-xclick'>
<table>

</table>
<input type='hidden' name='currency_code' value='USD'>
<input type='hidden' name='encrypted' value='-----BEGIN PKCS7-----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-----END PKCS7-----
'>
<input type='image' src='https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_SM.gif' border='0' name='submit' alt='PayPal. La forma rápida y segura de pagar en Internet.'>
<img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
</form>
</div>
</div>";
	} ?>
<div class="noti">
                 <div  ><img src="img/lineas.jpg" width="200" height="202"/></div>
                  <!--<script> new Ajax.Updater('cath_1', 'http://ccmixter.org/api/query?limit=page&f=html&t=avatar&user=bradstanfield', { method: 'get' } );</script>-->
   <br />
              <br />
              <!--<a title="http://ccmixter.org/files/bradstanfield/21468" rel="nofollow" class="cc_format_link" href="#">comprar</a>.-->
<div  class="noti-pie" >
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="tamaños">tamaños</td></tr><tr><td><select name="os0">
	<option value="opcion 1">opcion 1 $10.00</option>
	<option value="Opción 2">Opción 2 $20.00</option>
	<option value="Opción 3">Opción 3 $30.00</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
<br class="clearfloat" />
</div>
</div>
<br class="clearfloat" />
</div>
</body></html>