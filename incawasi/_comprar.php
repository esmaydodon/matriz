<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("func/funciones.php");
$id_producto = quitar($_GET["idproducto"]); 
$precio_producto = quitar($_GET["pre"]); 
$nombre_producto = quitar($_GET["nombre"]); 
//modificado 22/11/12
?>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
<link href="incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/ajax.js" ></script>
<SCRIPT LANGUAGE="JavaScript">
 $(document).ready(function(){
	 $("#botonRegistrarUsuario").click(function(evento)
      {  $("#primerPaso").css( { background: "#C1FFC1" }); 
	   		$("#primerPaso").hide("slow");//ocultamos paso1
			$("#paso2").css("display","block"); //mostramos paso 2
	  });
	  
	  	 $("#paso120").click(function(evento)
      { $("#paso2").css( { background: "#C1FFC1" });
			$("#paso2").hide("slow");
	$("#paso3").css("display","block");
 
	  });
	 })
/*jQuery.ajax({
type: "POST", 
url: "registranDocliente.php",
data:'idc='+idCliente,'nom='+nombreCliente,'ema='+EmailComprador,'pais='+pais,
success: function(a) {
jQuery('#poblacionList').html(a);
var to=document.getElementById("Buscando");
to.innerHTML="";
}
});*/
/*//-- Llamada GET
jQuery('#test').load('servidor.php');
//-- Llamada GET
jQuery('#test').load('servidor.php', 'nombre=John&apellido=Doe');
//-- Llamada POST
jQuery('#test').load('servidor.php', {nombre: 'John', apellido: 'Doe'});*/
/*function registrarCliente2(){
	var nombreCliente =document.getElementById("NombreComprador").value;
	var emailCliente =document.getElementById("EmailComprador").value;
	var paisCliente =document.getElementById("pais").value;
	var idCliente =document.getElementById("idCliente").value;
//Envio las variables nombre=Pepe, apellido= Grillo al archivo mi_php.php
$.post("registranDocliente.php",{'idc':idCliente,'nom':nombreCliente,'ema':EmailComprador,'pais':pais},function(data){
//$('.results').html(data);//Mostramos un alert del resultado devuelto por el php
  alert('...');
});
}*/
/*jQuery.post('procesadora.php', {}, function(data){
 jQuery('#test').text(data);
 
});*/

/*$.ajax({
  url: 'response.php?action=sample1',
  success: function(data) {
    $('.results').html(data);
  }
});*/

/*$.ajax({
  type: 'POST',
  url: 'response.php?action=sample2',
  data: 'name=Andrew&nickname=Aramis',
  success: function(data){
    $('.results').html(data);
  }
});*/
/*echo 'Sample 2 - success, name = ' . $_POST['name'] . ', nickname= ' . $_POST['nickname'];*/
</SCRIPT>
<style type="text/css">
#paso3{ display:none;}
#paso2{ display:none;}
#contenedor_carrito{
	font-size:11pt;
	text-align: left;
	background-color:#fff;
	width: 798px;
	height:600px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 1px solid  #dfedfe;
	font: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

 .noti{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:350px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 
.noti img{
	border: 0px;
	float:left;
	margin: 2px 7px 2px 0px;
	}	
.noti-pie{clear:both;}
.noti-pie img{ margin: 1px;}
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
.required{
	padding-left:10px 3px 10px 5px;
	 }
	 /* .websearch2 input.text, .websearch2 select.dd {*/
 input.text {
border: 0;
color: #333;
display: block;
float: left;
margin: 0;
margin-top: 7px;
outline: none;
padding: 0;
text-align: left;
width: 286px;
}
#comprador{  }
#envio{  }
.requerido{ color:#B00; }
.opcional{ color: #0A0;}
.columna{ margin-left:35px;}
</style> 
</head>

<body class="incawasi">

<div id="container">
  <div id="header">
  <div class="mneu_home"><a href="incawasi/home_espanol.html">inicio</a> &nbsp;<a href="incawasi/legal.html">legal</a></div>
  <div class="title"><img src="incawasi/imagenes/titles/bienvenidos.png" width="295" height="62" alt="welcome incawasi" /></div>
<div class="logo"><img src="incawasi/imagenes/logo.png" width="209" height="97" alt="incawasi" /></div>

<div class="menu_espa">
  <ul>
    <li><a href="incawasi/quienesosmos.html"><img src="incawasi/imagenes/menu/quienes_somos.png" width="96" height="20" alt="about us incawasi" border="0" /></a></li>
    <li><a href="incawasi/dondetrabajamos.html"><img src="incawasi/imagenes/menu/donde_trabajamos.png" width="123" height="20" border="0"/></a></li>
    <li><a href="incawasi/quehacemos.html"><img src="incawasi/imagenes/menu/que_hacemos.png" width="88" height="20" alt="what we do" border="0" /></a></li>
    <li><a href="incawasi/voluntarios.html"><img src="incawasi/imagenes/menu/voluntarios.png" width="78" height="20" alt="volunteers" border="0"/></a></li>
    <li><a href="incawasi/donaciones_sponsor.html"><img src="incawasi/imagenes/menu/donaciones.png" width="154" height="20" alt="donate and sponsors" border="0"/></a></li>
    <li><a href="incawasi/galeria.html"><img src="incawasi/imagenes/menu/galeria.png" width="46" height="20" alt="gallery" border="0"/></a></li>
    <li><a href="incawasi/contactanos.html"><img src="incawasi/imagenes/menu/contactos.png" width="70" height="20" alt="contact" border="0"/></a></li>
    
  </ul>
</div>
<!-- end #header -->
</div>
  <div id="mainContent">
    <div id="contenedor_carrito">
    <div id="detalle_compra">
   <br>
<? $consulta_productos=dime("select idproductos,nombre_producto,descripcion_producto,precio,ruta_img1 from productos where idproductos = $id_producto "); 
while ($producto=mysql_fetch_array($consulta_productos)){
$cadena = ereg_replace( "([     ]+)","%20",$producto['ruta_img1']);
//echo"<img  src=admin/".$cadena." width='211px' height='103px'>";
}?>
      
    </div>
<div id="contenedor_formularios">
 <div id="comprador">
       <!--    clienteeeeeeeeeeeeee   nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->
  <div id="From_comprador">
  <div id="primerPaso">
  Name:<input type="text" name="NombreComprador" id="NombreComprador"/><br>
  Email:<input type="text" name="EmailComprador" id="EmailComprador"/><br>
  <input name='tipoc1' type='hidden' id='tipoc1' size='30' maxlength='20'  value="3"><br>
  Country:<? $consulata_paises=dime("select idpais,pais from paises");
    echo"<select id ='pais' name='pais' class='select'><option value=''>Pais</option>";
		while($pais=mysql_fetch_array($consulata_paises)){
    	echo"<option value='".$pais['idpais'] ."'>".$pais['pais'] ."</option>";}
	echo"</select>";
?><br>
    <?php 
$res = mysql_query("SELECT MAX(idusuarios)  FROM usuarios");$numero=mysql_fetch_array($res);//echo $numero[0]; para sumarlo luego
echo " <input name='idCliente' type='hidden' id='idCliente' size='30' maxlength='20'  value=".$numero[0].">";
 
 ?>
  <input type='hidden' name='namefecha1' id ='fecha1' value='<? echo date("Y/m/d H:i:s"); ?>' /><br>
 <input type="hidden" name="monto" id ="monto" value="<? echo $precio_producto;?>" />
   <input type="button"  id="botonRegistrarUsuario" value="Next" onclick="registrarCliente()">
 </div>  </div>
    <div id="mensaje"> </div>
  
<!--  end  clienteeeeeeeeeeeeee   nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->
<!--   paraquien   nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn-->  
<div id="paso2"><h1>Recipient Details:</h1>
Recipient First Name:<input type="text" name="nombre1" id="nombre1" /><br>
Recipient Last  Name:<input type="text" name="nombre2" id="nombre2" /><br>
Recipient Email:<input type="text" name="aquienDedicaEmail" id="aquienDedicaEmail" /><br>
Personal Message:<textarea name='aquienDedicaMensaje' id='aquienDedicaMensaje' cols='50%' rows='3' tabindex='4'></textarea><br>
<input type='hidden' id='idp' name='idproducto'  value='<? echo $id_producto;?>' />";

<input type="button"  id="paso120" value="Next2" onclick="registrarAquien()"></div>
 <div id="mensaje2"> </div></div>    
<!--  end  paraquien -------------------------------------->  
<!---------------------------------------------------------------------------------FORMULARIO PARA PAYPAL-->
<div id="paso3">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<!--#--------------------------------------------------------------------------------------notify_url>
<?php $resultado = dime("SELECT MAX(idCompras)  FROM compras") or die(mysql_error());
$numero=mysql_fetch_array($resultado);
echo "<input name='notify_url' type='hidden' value='paypal_ipn.php?compraid=".$numero[0]."'>"; 
//https://your_host/live_ipn_mail.php?ipn_email=email_address
//$ email = $ _GET ['ipn_email']; 
?>
<!--#--------------------------------------------------------------------------------------notify_url>
<input name="cmd" type="hidden" value="_cart"> <!--cmd=_notify-validat-->
<input name="upload" type="hidden" value="1">
<input name="business" type="hidden" value="marlon_1319077527_biz@hotmail.com">
<input name="shopping_url" type="hidden" value="http://incawasi.kuraka.net/">
<input name="currency_code" type="hidden" value="EUR">
<input name="return" type="hidden" value="http://www.incawasi.kuraka.net/mensaje_de_exito.php">
<!--EeMAIL<input type="text" name="payer_email" value="" />-->
<input name="rm" type="hidden" value="2">
<!--<input name='notify_url' type='hidden' value='http://www.incawasi.kuraka.net/paypal_ipn.php'>-->
<? /*echo "IdProducto:".$id_producto."<br>Nombre Del Producto:".$nombre_producto."<br>Precio Del Producto".$precio_producto;*/
/* $consulta_productos=dime("select idproductos,nombre_producto,descripcion_producto,precio,ruta_img1 from productos where idproductos = $id_producto "); 
while ($producto=mysql_fetch_array($consulta_productos)){
$cadena = ereg_replace( "([     ]+)","%20",$producto['ruta_img1']);
echo"<img  src=admin/".$cadena." width='211px' height='103px'>";
}*/?>
<input name="item_number_1" type="hidden" value="<? echo $id_producto;?> ">
<input name="item_name_1" type="hidden" value="<? echo $nombre_producto;?>"> 
<input name="amount_1" type="hidden" value="<? echo $precio_producto;?>"> 
<input name="quantity_1" type="hidden" value="1"> 
<!--#PIRULETAS3 ; Nombre: Piruletas ; Valor : 3.00 , Cantidad : 5
<input name="item_number_2" type="hidden" value="PIRULETAS3">
<input name="item_name_2" type="hidden" value="Piruletas"> 
<input name="amount_2" type="hidden" value="3.00"> 
<input name="quantity_2" type="hidden" value="5"> -->
<input type="image" border="0" name="submit" src="http://images.paypal.com/images/x-click-but5.gif" alt="Pagar"> 
</form>
</div>
</div>

<div id="envio">
</div>

    </div>
    </div>
<div class="parrafo">
    <p align="justify">&nbsp;</p></div>
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha">
      <ul>
        <li> <a href="incawasi/index.html">English</a></li>
        <li class="selcte_foot"> Español</li>
      </ul>
    </div><p>Incawasi</p>  
  <!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>