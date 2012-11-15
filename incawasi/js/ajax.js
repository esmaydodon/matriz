function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}

	return xmlhttp;
}
/*carrito*/
//compras
function compras(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","listarCompras.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	
	}
function gestionarP(){
	idCuenta = 1;
	divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","consultarProductos.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	//en realidad para na esto
	}
function eliminarProducto(idProducto){
		divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","eliminarProductos.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idProducto)	
	}
function atender(idCompra){
		divContenido = document.getElementById('detalle3');
	ajax=objetoAjax();
	ajax.open("POST","atenderCompra.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){//alert(idCuenta); 
		divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCompra)	
	}		
function consultaCuenta(idCuenta){
	divContenido = document.getElementById('detalle');
	ajax=objetoAjax();
	ajax.open("POST","consultarCuentaAdmin.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){/*alert(idCuenta);*/
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCuenta)	
	}
	//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	function registrarCliente(){ //alert("hola"); 
var nombreCliente =document.getElementById("NombreComprador").value;
var emailCliente =document.getElementById("EmailComprador").value;
var paisCliente =document.getElementById("pais").value;
var idCliente =document.getElementById("idCliente").value;
var tipoc =document.getElementById("tipoc1").value;
var montoo =document.getElementById("monto").value;
var fecha =document.getElementById("fecha1").value;
var IDproducto =document.getElementById("idp").value;
divContenido = document.getElementById('mensaje');
	ajax=objetoAjax();
	ajax.open("POST","registranDocliente.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("id="+idCliente+"&nom="+nombreCliente+"&ema="+emailCliente+"&pai="+paisCliente+"&tipo="+tipoc+"&mon="+montoo+"&fecha2="+fecha+"&idproduc="+IDproducto)	
	}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
	function registrarAquien(){ //alert("hola"); 
var idusuario =document.getElementById("idusuario").value;//losaco de un hidden generado registrarCliente
var nombre1 =document.getElementById("nombre1").value;
var nombre2 =document.getElementById("nombre2").value;
var emailAquien =document.getElementById("aquienDedicaEmail").value;
var mensaje =document.getElementById("aquienDedicaMensaje").value;
divContenido = document.getElementById('mensaje2');
	ajax=objetoAjax();
	ajax.open("POST","registrandoDedicatoria.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
     ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");		
	 ajax.send("idu="+idusuario+"&nom="+nombre1+"&ema="+emailAquien+"&nom2="+nombre2+"&men="+mensaje)	
	}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
function pedirDatosCuenta(idUsuario){
	divContenido = document.getElementById('detalle');
	ajax=objetoAjax();
	ajax.open("POST","modificarCuentaAdmin.php");
	ajax.onreadystatechange=function(){
		if(ajax.readyState ==4){
			divContenido.innerHTML=ajax.responseText}}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+idUsuario);		
/*	alert(idUsuario);*/
	}	
/*carrito-end*/
function previo(idArticulo1){
	divResultado=  document.getElementById('previo');
	ajax=objetoAjax();
	ajax.open('POST','Articuloprevio.php',true);

	ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idArticulo1)
//alert(idArticulo1);
	}
function Pagina(nropagina){
	//donde se mostrará los registros
	divContenido = document.getElementById('contenedor_carrito');

	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open('GET', 'muestraArticulos.php?pag='+nropagina);
	//divContenido.innerHTML= '<img src="anim.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}

//dejar de promocionarproducto.php
   function promocionar(promocionado)
   {
divResultado=  document.getElementById('promocionar');

var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
if (eliminar){
//id=document.formulario.productos.value;	//XMLHttpRequest.open ( sMetodo, sURL [, bSincronia [, sUsuario [, sPwd ] ] ] );
ajax=objetoAjax();
//alert(idproductox);
//ajax.open(“POST”, “ejemploajax2.php”,true);
ajax.open('POST','dejardepromocionar.php',true);
//ajax.open(“GET”, “ejemploajax2.php?t1=”+t1+”&t2=”+t2,true);
//ajax.Open("GET","dejardepromocionar.php?idProducto="+idproductox,true);

ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idProducto="+promocionado)
//ajax.send(“t1=”+t1+”&t2=”+t2) //post
//ajax.send(null)
}
} 


//promoxionarproducto.php
   function promoxionar(promoxionado) 
   {// alert(promoxionado);
divResultado=  document.getElementById('promocionar');

var eliminar = confirm("De verdad desea  Promocionar el Producto?")
if (eliminar){
//id=document.formulario.productos.value;	//XMLHttpRequest.open ( sMetodo, sURL [, bSincronia [, sUsuario [, sPwd ] ] ] );
ajax=objetoAjax();
//alert(idproductox);
//ajax.open(“POST”, “ejemploajax2.php”,true);
ajax.open('POST','promocionando.php',true); 
//ajax.open(“GET”, “ejemploajax2.php?t1=”+t1+”&t2=”+t2,true);
//ajax.Open("GET","dejardepromocionar.php?idProducto="+idproductox,true);

ajax.onreadystatechange=function(){
if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
divResultado.innerHTML = ajax.responseText
//}
}}

ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idProducto="+promoxionado)
//ajax.send(“t1=”+t1+”&t2=”+t2) //post
//ajax.send(null)
}
} 
function EliminaArticulo(idadticulo) {
var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	if (eliminar){
//	alert(idadticulo);
	divResultado=  document.getElementById('DivMostarArticulos');
	ajax=objetoAjax();
	ajax.open('POST','EliminandoArticulo.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idadticulo)
//ajax.send(“t1=”+t1+”&t2=”+t2) //post
//ajax.send(null)
}
	
	}
	
	
	function editarArticulo(idadticulo) {
var eliminar = confirm("De verdad desea Dejar de Promocionar el Producto?")
	if (eliminar){
	//alert(idadticulo);
	divResultado=  document.getElementById('previo');
	ajax=objetoAjax();
	ajax.open('POST','editandoarticulo.php',true); 
    ajax.onreadystatechange=function(){
    if(ajax.readyState==4){// se a recibido respuesta del servidor?
//if(ajax.status == 200){ //comprovar si la respuesta es valida	
     divResultado.innerHTML = ajax.responseText
//}
}}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
ajax.send("idArticulo="+idadticulo)
//ajax.send(“t1=”+t1+”&t2=”+t2) //post
//ajax.send(null)
}
	
	}
	
	
	