<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
include("../func/funciones.php");
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
<!--paara mostrar submenus-->
 $("#productos").click(function(evento)
      {  $("#detalle").css("display", "none"); 
	   $("#detalle2").css("display", "block");
	   	    
		  $("#submenuProducto").css("display", "block");  
          $(".opcionesMenu2").css( { color: "#FFFFFF", background: "#ACC7ED" }); 
		  $("#productos").css( { color: "#000", background: "#ACC7ED" }); 
		  $("#ocultarSubmenuProductos").css("color", "#FF0000"); 
		
		 /* $("#menuCuenta").hide("slow");*/
		  
/*		   $("#submenuProducto").animate({
         'border-bottom-width': "20",
         'font-size': '25pt'||
      });*/

 
	  });
	  
	  
	 <!--ocultarSubmenuProductos -->
 $("#ocultarSubmenuProductos").click(function(evento)
      {
		  $("#submenuProducto").css("display", "none");  
		   $("#productos").css( { color: "#000", background: "transparent" });
 
	  });	  
	  
	  
 $("#menuCuenta").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#submenuProductoCuenta").css("display", "block");  
		  $("#menuCuenta").css( { color: "#000", background: "#ACC7ED" }); 
         $(".opcionesMenu2menu").css( { color: "#FFFFFF", background: "#ACC7ED" })
		   $("#ocultarSubmenuCuenta").css("color", "#FF0000"); 	
		   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	
	  
 $("#divGestionarCuenta").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	 	  
 $("#divMisDatos").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	  
	  
	  
	  
	  
	  
	   /*para mostrar el formnulario de producto*/ 
	    $("#divNuevoProducto").click(function(evento)
      {
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	     $("#detalle2").css("display", "block");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#formularioProductos").css("display", "block"); 
	  }); 
	 <!--ocultarSubmenuMenus -->ocultarSubmenuCuenta
 $("#ocultarSubmenuCuenta").click(function(evento)
      {
		  $("#submenuProductoCuenta").css("display", "none");  
		   $("#menuCuenta").css( { color: "#000", background: "transparent" });
		   	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
 
	  });		  
    $("#gestionarProductos").click(function(evento)
      {
		  $("#detalle2").css("display", "none");  
 
	  });	
  })


     
	 
  function checkMe()/*para comparar claves nueva clave  modificar para la bd*/
{
  if (document.FormClave.PWD1.value == document.FormClave.PWD2.value)
  {
    document.FormClave.laclave.value=document.FormClave.PWD1.value;
    document.FormClave.submit();
  }
  else
    alert("Passwords no concuerdan!");
}
</script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>

<link href="../incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<style type="text/css">
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
	width:200px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 .notiDetalle{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:550px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/} 
	 .notiDetalle2{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:550px;
	height:280px;
	float: right;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/} 
}
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
background:  #000  url(../../imagenes/bg-footer.png) repeat-x;
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
.opcionesMenu {
	text-align:center; padding:10px 0px 10px 0px;
cursor:pointer;
	}
.opcionesMenu2{
	text-align:center; padding:10px 0px 10px 0px;
	}
.opcionesMenu2 a{
text-decoration: none;
cursor:pointer;
	}	
 .opcionesMenu2menu{
	text-align:center; padding:10px 0px 10px 0px;
	}
#submenuProducto{  display:none;}

#submenuProductoCuenta{  display:none;}

.opcionesMenu2menu a {
text-decoration: none;
cursor:pointer;
}

#detalle{ display: none;}

#detalle2{ display: none;}
#divNuevoProducto{cursor:pointer; }
#formularioProductos{ display: none;}


</style> 
</head>

<body class="incawasi">

<div id="container">
  <div id="header">
  <div class="mneu_home"><a href="../incawasi/home_espanol.html">inicio</a> &nbsp;<a href="../incawasi/legal.html">legal</a></div>
  <div class="title"><img src="../incawasi/imagenes/titles/bienvenidos.png" width="295" height="62" alt="welcome incawasi" /></div>
<div class="logo"><img src="../incawasi/imagenes/logo.png" width="209" height="97" alt="incawasi" /></div>

<div class="menu_espa">
  <ul>
    <li><a href="../incawasi/quienesosmos.html"><img src="../incawasi/imagenes/menu/quienes_somos.png" width="96" height="20" alt="about us incawasi" border="0" /></a></li>
    <li><a href="../incawasi/dondetrabajamos.html"><img src="../incawasi/imagenes/menu/donde_trabajamos.png" width="123" height="20" border="0"/></a></li>
    <li><a href="../incawasi/quehacemos.html"><img src="../incawasi/imagenes/menu/que_hacemos.png" width="88" height="20" alt="what we do" border="0" /></a></li>
    <li><a href="../incawasi/voluntarios.html"><img src="../incawasi/imagenes/menu/voluntarios.png" width="78" height="20" alt="volunteers" border="0"/></a></li>
    <li><a href="../incawasi/donaciones_sponsor.html"><img src="../incawasi/imagenes/menu/donaciones.png" width="154" height="20" alt="donate and sponsors" border="0"/></a></li>
    <li><a href="../incawasi/galeria.html"><img src="../incawasi/imagenes/menu/galeria.png" width="46" height="20" alt="gallery" border="0"/></a></li>
    <li><a href="../incawasi/contactanos.html"><img src="../incawasi/imagenes/menu/contactos.png" width="70" height="20" alt="contact" border="0"/></a></li>
    
  </ul>
</div>
<!-- end #header -->
</div>
  <div id="mainContent">
    <div id="contenedor_carrito">
    <div class="noti">
            <!--     para cuenta-->
                  <div class="opcionesMenu" id="menuCuenta">cuenta</div>
                 <div id="submenuProductoCuenta">
                 	<div class="opcionesMenu2menu" id="divMisDatos"> <a onclick="consultaCuenta('1')" >Mis Datos</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                 	<div class="opcionesMenu2menu" id="divGestionarCuenta"><a onclick="pedirDatosCuenta('1')" >Gestionar Cuenta</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                    <div class="opcionesMenu2menu" id="ocultarSubmenuCuenta">Ocultar</div>
                 </div>
     <!--     para cuenta-->
                  <div class="opcionesMenu" id="productos">Productos</div>
                 <div id="submenuProducto">
                 	<div class="opcionesMenu2" id="divNuevoProducto">Nuevo Producto</div>
                 	<div class="opcionesMenu2" id="gestionarProductos" onclick="gestionarP()">Gestionar Productos</div>
                    <div class="opcionesMenu2" id="buscarProductos">Buscar Productos</div>
                    <div class="opcionesMenu2" id="verCompras" onclick="compras()">compras:</div>
                    <div class="opcionesMenu2" id="ocultarSubmenuProductos">Ocultar</div>
                 </div>      
          
    </div>
     <div class="notiDetalle" id="detalle"></div>
     
<div class="notiDetalle2" id="detalle2">
<div id="formularioProductos">
<form action="RegistrandoProducto.php" method="post" enctype="multipart/form-data" >
cadenatexto:<input type="text" name="cadenatexto" size="20" maxlength="100" value="" /> <br>
txtDescripcion:<input  type="text" name="txtDescripcion" size="15" maxlength="500" id="producto_text"class="cuenta_text" /><br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
    <br/>  
<b>Enviar un nuevo archivo: </b> <br />
    <input name="file1" type="file" id="file1" />
    <br />
    txtPrecio:<input type="text" name="txtPrecio" size="20" maxlength="100" value="" /> <br />
    <input type="submit" value="Enviar" />
</form> </div></div>

<div class="notiDetalle2" id="detalle3"><!-- GESTIONARRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR -->

</div>
 <div id="detalle31"></div>
   </div>
<div class="parrafo">
    <p align="justify">&nbsp;</p></div>
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha">
      <ul>
        <li> <a href="../incawasi/index.html">English</a></li>
        <li class="selcte_foot"> Español</li>
      </ul>
    </div><p>Incawasi</p>  
  <!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>