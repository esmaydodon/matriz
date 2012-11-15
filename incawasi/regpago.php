<?php 
session_start(); 
//Asignamos todos los valores guardados en la sesi�n a la variable $carro, como hicimos en las p�ginas anteriores 
$carro=$_SESSION['carro']; 
//$products es la variable que usaremos para mostrar los productos en esta p�gina (separados por '+') 
$products=''; 
//$products2 es la que usaremos para enviar a Paypal (separados por ',') 
$products2=''; 
 foreach($carro as $k => $v){ 
 $unidad=$v['cantidad']>1?" unidades de":" unidad de"; 
 $products.=$v['cantidad'].$unidad.$v['producto']."+"; 
 $products2.=$v['cantidad'].$unidad.$v['producto'].", "; 
 } 
//eliminamos el �ltimo '+': 
$products=substr($products,0,(strlen($products)-1)); 
//eliminamos la �ltima coma y el espacio que sigue a la misma: 
$products2=substr($products2,0,(strlen($products2)-2)); 
?> 
<html> 
<head> 
<title>Finalizar Compra</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!--  
.tit { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #FFFFFF; 
} 
.prod { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #333333; 
} 
h1 { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 20px; 
 color: #990000; 
} 
--> 
</style> 
</head> 
 
<body> 
<!--  Creamos el formulario para enviar a Paypal --> 
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" name="f1" id="f1" method="post"> 
<fieldset> 
 <legend class="prod"><strong>Finalizar la Compra</strong> <a href="#" onClick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle"></a></legend> 
<input type="hidden" name="shipping" value="0"> <!--: Es el costo de env�o-->
<input type="hidden" name="cbt" value="Presione aqu� para volver a www.yes.com >>"> <!--Es el mensaje que ver� en Paypal el usuario al finalizar el proceso de pago.  -->
<input type="hidden" name="cmd" value="_xclick"> 
 <input type="hidden" name="rm" value="2"><!-- Es el m�todo con que Paypal devolver� las variables a la p�gina ipn_success.php (1 es get 2 es post).--> 
 <input type="hidden" name="bn" value="nombre de la empresa vendedora"> <!--: Esta es la identificaci�n de la integraci�n que estamos haciendo-->
<input type="hidden" name="business" value="marlon@hotmail.com"><!-- Es el mail que el vendedor registr� en su cuenta de Paypal. -->
<input type="hidden" name="item_name" value="<?php echo $products2; ?>"> <!--Es el detalle de lo que estamos vendiendo.  -->
<input type="hidden" name="item_number" value="Nombre del comprador">  <!--Aqu� va el n�mero de item. Podemos completarlo con un c�digo de operaci�n o utilizarlo para otra cosa (personalmente lo utilizo para guardar el nombre del comprador, ya que cuando la operaci�n se realiza y Paypal autom�ticamente genera sendos mails al vendedor y al comprador, suele incluir este dato y al vendedor le sirve para saber r�pidamente quien es el comprador).  -->
<input type="hidden" name="amount" value="<?php echo number_format($_GET['costo'],2) ?>">  <!--Es el importe total de la operaci�n. -->
<input type="hidden" name="custom" value="<?php echo $_GET['costo'] ?>">  <!--Aqu� podemos colocar cualquier variable que luego necesitemos para realizar nuestros procesos cuando Paypal redireccione al usuario a nuestra p�gina de �xito.  -->
<input type="hidden" name="currency_code" value="USD">  <!-- La moneda en que expresamos los valores:USD,GBP,JPY,CAD,EUR-->
<input type="hidden" name="image_url" value="">  <!--Es la ruta absoluta de la imagen que aparecer� en la cabecera de la p�gina de Paypal cuando el comprador est� pagando -->  
<input type="hidden" name="return" value="http://www.nuestrodominio.com/ipn_success.php">  <!-- Aqu� colocaremos la ruta absoluta a la p�gina ipn_success.php. Es la p�gina a la que Paypal redirecciona al comprador si el pago se realiza correctamente-->
<input type="hidden" name="cancel_return" value="http://www.nuestrodominio.com/ipn_error.php">  <!--	Aqu� colocaremos la ruta absoluta a la p�gina ipn_error.php. Es la p�gina a la que Paypal redirecciona al comprador si el pago no se realiza correctamente.  -->
<input type="hidden" name="no_shipping" value="0">  <!-- -->
<input type="hidden" name="no_note" value="0">  <!-- -->
<!--  Mostramos el detalle de la compra --> 
<table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;"> 
<tr> 
<td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:</span><br> 
<span class="texto1negro"> </span><span class="prod"><strong>Productos:</strong> <?php echo $products; ?><br> 
<strong>Pecio Total:</strong> $<?php echo number_format($_GET['costo'],2) ?> </span></td> 
</tr> 
</table> 
<input type="submit" name="Submit" value="Enviar"> 
</fieldset> 
</form> 
 
</body> 
</html> 
