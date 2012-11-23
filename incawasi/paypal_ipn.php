<?
session_start(); 
$cliente=$_SESSION['cliente'];
// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
#--------------------------------------------------------
mysql_connect("localhost", "kurakane_root", "1234") or die(mysql_error());
mysql_select_db("kurakane_carrito") or die(mysql_error());
#--------------------------------------------------------
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
//$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
$fp = fsockopen('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

// assign posted variables to local variables
/*$item_name = $_POST['item_name_1'];
$item_number = $_POST['item_number_1'];
$payment_status = $_POST['payment_status']; $email = $_POST['payer_email'];
$payment_amount = $_POST['amount_1'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];*/
$idCompra=$_GET['compraid'];# la uqe paso en (paypal_ipn.php?compraid=".$numero[0].")
$item_name = $_POST['item_name'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$txn_id = $_POST['txn_id'];
$payer_email = $_POST['payer_email'];
$name = $_POST['first_name'] . " " . $_POST['last_name'];
$address_street = $_POST['address_street'];
$address_zip = $_POST['address_zip'];
$address_city = $_POST['address_city'];
$contact_phone = $_POST['contact_phone'];
$email = $_POST['payer_email'];

/*$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$payment_type = $_POST['payment_type'];
$custom_key = $_POST['custom'];*/
 


if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {
	
/*	PayPal responde al envío con una sola palabra en el cuerpo de la respuesta: VERIFICADA
o NO V¡LIDA.
Cuando reciba una respuesta VERIFICADA realice las siguientes comprobaciones: 
1. Compruebe que el payment_status es Completado.
2. Si el payment_status es Completado, compruebe el txn_id con la última transacción 
de PayPal que ha procesado para asegurarse que no es un duplicado.
3. Después de comprobar el payment_status y txn_id, asegúrese de que el 
receiver_email es una dirección de correo electrónico registrado en su cuenta PayPal.
4. Compruebe que el precio, mc_gross y la divisa, mc_currency, son correctos para 
el artículo, item_name o el item_number.
5. Compruebe que el secreto compartido devuelto es correcto.
----------------------------------------------------------
Una vez que haya completado las comprobaciones anteriores, puede actualizar su base 
de datos con la información proporcionada 
-----------------------------------------------------------*/
// check the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct
// process payment
#--------------------------------------------------------opera3
#IMPORTANTE:Después de recibir el COMPROBADO mensaje, hay varios cheques importantes que usted debe realizar antes de poder asumir que el mensaje es legítimo y no procesados ​​ya:Confirmar que el estado de pago es Terminado.Utilice el ID de transacción (txn_id = 61E67681CH3238416) para verificar que la transacción no ha sido procesada, lo que impide que las transacciones duplicadas que se procese.Validar que la dirección del receptor de correo electrónico está registrado a su nombre.Verifique que el precio, la descripción del artículo, y así sucesivamente, coinciden con la transacción en su sitio web

 if($_POST['payment_status']=='Completed' || $_POST['payment_status']=='Processed') 
 {#check the payment_status is completed
#------------------------------------------1--
 $password = mt_rand(1000, 9999);
#-------------------------------
/*mysql_query("INSERT INTO usuarios (email_usuario, pass_usuario) VALUES('". mysql_escape_string($email) ."', '".md5($password)."' ) ") or die(mysql_error());*/
mysql_query("INSERT INTO users SET id = '$rand', realname = '$name', acc_type = '$acctype', username = '$email', password = '$md5pass', normal_password = '$address_city', email = '$email', address = '$address_street', zip_code = '$address_zip', number = '$contact_phone', date_registered = '$aaa', date_expire = '$bbb'") or die(mysql_error());
#-------------------------------email conprador--
$to      = $email;
$subject = 'Download Area | Login Credentials';
if($cliente){
	 foreach($cliente as $k => $c){
             if(!$c || !isset($c[md5($c['idcliente'])]['identificador']) || $c[md5($c['idcliente'])]['identificador']!= md5($c['idcliente'])){ 
$cadenaAgregarQuitar="<a href='borracarCliente.php?SID&id=".$c['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>'";	
		}else{
	$cadenaAgregarQuitar="<a  class='ocultar_para_imprimir'  href='agregaCliente.php?SID&id=".$c['idcliente']."&dedo=".$dedonde."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>'";
	}
		 $clientecadena="<h2>Nombre:".$c['nombre_apellidos_usu']."<br>";
		   $clientecadena.=" email_usuario:".$c['email_usuario']."<br>";
		   $clientecadena.="DNI:".$c['dni_cliente']."<br>";
		  $clientecadena.="telefono_usuario:".$c['telefono_usuario'].$cadenaAgregarQuitar."</h2>"; }
	 }
$message = $clientecadena.'

Thank you for your purchase

Your account information
-------------------------
Email: '.$email.'
Password: '.$password.'
-------------------------

You can now login at http://yourdomain.com/PayPal/';
$headers = 'From:test@yourdomain.com' . "\r\n";

mail($to, $subject, $message, $headers);
#-------------------------------email webmaster--
// PAYMENT INVALID & INVESTIGATE MANUALY!
$to      = 'marlonmartos@hotmail.com';
$subject = 'Download Area | Invalid Payment';
$message = '

Dear Administrator,

A payment has been made but is flagged as INVALID.
Please verify the payment manualy and contact the buyer.

Buyer Email: '.$email.'
';
$headers = 'From:noreply@yourdomain.com' . "\r\n";

mail("marlonmartos@hotmail.com", $subject, $message, $headers);
#------------------------------------------1--
}#check the payment_status is completed
}
else if (strcmp ($res, "INVALID") == 0) {
// log for manual investigation
}
}
fclose ($fp);
}