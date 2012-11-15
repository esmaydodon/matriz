<?php
/**
 * PHP-PayPal-IPN Ejemplo
 *
 * Esto muestra un ejemplo b�sico de c�mo utilizar el IpnListener () Clase PHP para 
 * Implementar una Notificaci�n de pago instant�nea de PayPal (IPN), gui�n oyente.
 *
 * Para un an�lisis m�s en profundidad tutorial, vea mi blog:
 * Http://www.micahcarrick.com/paypal-ipn-with-php.html
 *
 * Este c�digo est� disponible en github:
 * Https://github.com/Quixotix/PHP-PayPal-IPN
 *
 * @ Paquete PHP-PayPal-IPN
 * @ Author Miqueas Carrick
 * @ Copyright (c) 2011 - Micah Carrick
 * @ Licencia http://opensource.org/licenses/gpl-3.0.html
 */
include('ipnlistener.php');

$listener = new IpnListener();
$listener->use_sandbox = true;
$listener->force_ssl_v3 = true;

try {
    $verified = $listener->processIpn();
} catch (Exception $e) {
    // fatal error trying to process IPN.
	 // error fatal tratando de procesar IPN. 
	 //error_log($e->getMessage());
    exit(0);
}

if ($verified) {
    // IPN response was "VERIFIED"
	 // IPN respuesta fue
	  /*
    Una vez que tenga un IPN verificado que hay que hacer algunas comprobaciones m�s en el POST
    campos - por lo general con los datos que almacenan en su base de datos durante el que el
    usuario final hizo una compra (por ejemplo, en el "�xito" de la p�gina web en un pago
    bot�n est�ndar). Los campos PayPal recomienda revisar son los siguientes:
    
        1. Compruebe el $ _POST ['payment_status'] es "Completado"
	    2. Compruebe que $ _POST ['txn_id'] no ha sido previamente procesada
	    3. Compruebe que $ _POST ['receiver_email'] es su correo electr�nico de PayPal Primaria
	    4. Compruebe que _POST $ _POST ['payment_amount'] y $ ['payment_currency']
	       son correctas
		    1. Check the $_POST['payment_status'] is "Completed"
	    2. Check that $_POST['txn_id'] has not been previously processed 
	    3. Check that $_POST['receiver_email'] is your Primary PayPal email 
	    4. Check that $_POST['payment_amount'] and $_POST['payment_currency'] 
	       are correct
    
    Dado que las implementaciones de este var�a, voy a dejar estos controles fuera de este
    ejemplo y env�anos un correo electr�nico utilizando el m�todo getTextReport () para obtener toda la
    de los detalles sobre el IPN.  
  */ 
	 mail('marlonmartos@hotmail.com','Verified IPN',$listener->getTextReport());
} else {
    // IPN response was "INVALID"
	mail('marlonmartos@hotmail.com','Invalid IPN',$listener->getTextReport());
}

?>