<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("func/funciones.php");
?>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/jquery-1.6.4.js"></script>
<title>Bienvenidos</title>
<link href="incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#contenedor_carrito{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:11pt;
	text-align: left;
	background-color:#fff;
	width: 100%;
	height:420px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 0px solid  #dfedfe;}

 .noti{
	border: 0px solid  #dfedfe;
	padding: 3px;;
	width:770px;
	float:left;
	margin:10px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 
.noti img{
	border: 0px;
	float:left;
	margin: 0px 10px 10px 0px;
	}	
.noti-pie{clear:both; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-size:14px; text-align:justify;}
.noti-pie img{ margin: 1px;}
.columna_derecha{
	float:left;
	width:250px;

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
p { padding-top:10px;}
h3 { font-size: 24px;
    line-height: 0px; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; color:#4075b1;}
</style> 
</head>

<body class="incawasi">

<div id="container">
  <div id="header">
  <div class="mneu_home"><a href="incawasi/index.html">Home</a> &nbsp;<a href="incawasi/legal.html">legal</a></div>
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
    <? 
$idp = $_GET["idp1"];
include("func/funciones.php");  
$consulta_productos=dime("select idproductos,nombre_producto,descripcion_producto,precio,ruta_img1 from productos where idproductos = $idp "); 
while ($producto=mysql_fetch_array($consulta_productos)){
	;
$cadena = ereg_replace( "([     ]+)","%20",$producto['ruta_img1']);// desaparecer espacio en blanco y cjuntar  as caracteres
	echo"<div class='noti'>
<div><img  src=admin/".$cadena." width='520px' height='260px'></div><br><br>
<h3 style=' float: left;'>".$producto['nombre_producto'] ."</h3><br><br><br><br>
<h1>Donation: ".$producto['precio']." €UR.</h1>
<p>This is the card you can send to the person in honor of whom you make 
the donation. You can either send it 
by email or print it out. 
Thank you for your contribution.</p>
<div  class='noti-pie' >
  ".$producto['descripcion_producto']."
              <a  rel='nofollow' class='cc_format_link' href='comprar.php?idproducto=".$producto['idproductos']."&pre=".$producto['precio']."&nombre=".$producto['nombre_producto']."'>Buy</a>. 
</div>
</div>";
	}
?>

		    </div>
<div class="parrafo">
    <p align="justify">&nbsp;</p></div>
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha">
      <ul>
        <!--<li> <a href="incawasi/index.html">English</a></li> -->
        <li class="selcte_foot"> English</li>
      </ul>
    </div><p>Incawasi</p>  
  <!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>