<?

$nombre="Incawasi org.";
$email_contacto ="webmaster@incawasi.org";
require("class.phpmailer.php");
########################################yea
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "webmaster@incawasi.org";// de quien envia
$mail->FromName = "cer";// nombre de quien Envia (empresa)
$mail->Subject = "Datos de  su Compra";// contenido del correo
$mail->AddAddress("oscuridadtye@hotmail.com","marlon inca02, ema");
$mail->AddCC("marlon@kuraka.net");
$mail->AddBCC("diosgoogle@hotmail.com");
############## ahora cuerpo
$body  = "Hola <strong>Estimado cliente</strong><br>";
$body .= $comentarios."<br>";
$body .= $nombre."<br>"
		.$email_contacto."<br>"
		.$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
############## 
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
########################################yea end
?>