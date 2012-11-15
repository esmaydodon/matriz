<?
include("func/funciones.php");

//Leer POST del sistema de PayPal y añadir 'cmd'
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}
//header para el sistema de paypal
$header  = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
//header para el correo
$headers = 'From: marlon@kuraka.net' . "\r\n" .
           'Reply-To: marlonmartos@hotmailcom' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
//Si estamos usando el testeo de paypal:
$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
//En caso de querer usar PayPal oficialmente:
//$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
if (!$fp) {
// ERROR DE HTTP
}else{
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {

//Almacenamos todos los valores recibidos por $_POST.
foreach($_POST as $key => $value){
        $recibido.= $key." = ". $value."\r\n";
}
//foreach (array_expression as $value)
 //   sentencias
//foreach (array_expression as $key => $value)
 //   sentencias
//Enviamos por correo todos los datos , esto es solo para que veáis como funciona
//En un caso real accederíamos a una BBDD y almacenaríamos los datos.
// > Comprobando que payment_status es Completed
// > Comprobando que txn_id no ha sido previamente procesado
// > Comprobando que receiver_email es tu email primario de paypal
// > Comprobando que payment_amount/payment_currency son procesos de pago correctos
// Poner aquí código de inicialización en base de datos ////----------------------------------

 if($_POST['payment_status']=='Completed' || $_POST['payment_status']=='Processed') {// Suponemos que el item_number que nosotros enviamos es del formato: XXXXX-YYYY
	// Donde XXXXX es el tipo de pago e YYYY es el identificador único del pago
	//$tipo_venta_aux = explode('-',$_POST['item_number']);
	//$tipo_venta = $tipo_venta_aux[0];$item_pagado = $tipo_venta_aux[1];
	$pago_valido = true;
        // Verificamos en base de datos
	/*switch($tipo_venta) {
		case 'VENTA':
			// Verificamos que es una venta existente y pendiente de pago
			$pago_valido = true;
			break;
		case 'ALQUILER':
			// Verificamos que es un alquiler existente y pendiente de pago
			$pago_valido = true;
			break;
		case 'PAGO_MENSUAL':
			// Verificamos que es un pago mensual existente y pendiente de pago
			$pago_valido = true;
			break;
	}*/
	if($pago_valido == true) {
		// Actualizamos el estado a pagado y hacemos lo que nos interese.
		// Como por ejemplo notificar al cliente de que el pago ha sido registrado.
	// abr ya ingresado a la bd el usuario o cliente previamente!!!  (nn!) 
		#tener cuidado con datos  resividos O.O ##############################################
			$id = $_POST['item_number_1'];
	$nombre =$_POST['nombre_producto'];
	$preci= $_POST['amount_1'];
	 $idcompra = $_GET['compraid'];
		$idcompra = $idcompra + 1;	
/*			$insertaCompras= mysql_query("INSERT INTO compras_has_productos(Compras_idCompras,productos_idproductos,Precio_compra,detalle_cantidad)  
VALUES  ('$idcompra','$id','$preci','1')");*/
//echo $insertaCompras;
##############################################operacion01
		$email = $_POST['payer_email'];
		$sistema = mysql_query("select * from usuarios where email_usuario = '$email'");
		 if(isset($sistema)){
			  mysql_query("INSERT INTO compras_has_productos(Compras_idCompras,productos_idproductos,Precio_compra,detalle_cantidad)  
VALUES  ('$idcompra','$id','$preci','1'");
 }//UPDATE users SET date_expire = '$doubleday' where email = '$email'
		
		##############################################

	}
}
// Poner aquí código de finalización en base de datos //-----------------------------------
mail("marlonmartos@hotmail.com", "NOTIFICACION DE PAGO", $recibido , $headers);
}else if (strcmp ($res, "INVALID") == 0) {
mail("marlonmartos@hotmail.com", "NOTIFICACION DE PAGO INVALIDA", "invalido",$headers);
}
}fclose ($fp);
}
?>