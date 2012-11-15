<?php
include("../func/funciones.php");
$a_editar =  $_POST["id"] ;
$consultaEmail ="select cp.Compras_idCompras,
       cp.productos_idproductos,
        p.nombre_producto,
       cp.detalle_cantidad,
       cp.Precio_compra,
       cp.estado_compra,
        u.email_usuario as comprador,
        u.nombre_apellidos_usu,
	p.ruta_img1,
       co.compra_fecha  	
from compras_has_productos as cp inner join productos as p on
cp.productos_idproductos = p.idproductos 
inner join compras as co on 
cp.Compras_idCompras=co.idCompras inner join usuarios as u on
co.usuarios_idusuarios=u.idusuarios where  cp.Compras_idCompras = '$a_editar' ";
$resultado = dime($consultaEmail);
$columna = mysql_fetch_array($resultado);
$ema = $columna["comprador"];

//$a_email =  $_POST["emailC"] ; 
//echo $a_editar;
$nombre="Incawasi org.";
$email_contacto ="webmaster@incawasi.org";
#para el mail de confimarciín de  incawasi 
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
 $mail->From = "webmaster@incawasi.org";// de quien envia
$mail->FromName = "Remitente".$nombre;// nombre de quien Envia (empresa)
$mail->Subject = "Formulario de Contactenos:";// contenido del correo
//$mail->AddAddress("oscuridadtye@hotmail.com","Marlon MArtos Quiroz inca2");
$mail->AddAddress("$ema","marlon inca02, ema");
$mail->AddCC("marlon@kuraka.net");
$mail->AddBCC("diosgoogle@hotmail.com");
 
$body  = "Hola <strong>Estimado cliente</strong><br>";
$body .= $comentarios."<i>comentarios<i>.<br><br>";
$body .= $nombre."<br>".$email_contacto."<br>".$empresa."<br>".$cargo."<br>".$pais."<br>".$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
echo "Datos enviados<br>";
echo $nombre."<br>".$email_contacto."<br>".$empresa."<br>".$cargo."<br>".$pais."<br>".$telefono."<br>".$comentarios;
#Actualizamos la BD el estado a atendido
$query2="UPDATE compras_has_productos set estado_compra= '1' where Compras_idCompras = '$a_editar' ";
 $resultado =mysql_query($query2) or die(mysql_error());
 if($resultado) echo "<script>document.location.href='panel2.php';</script>\n";
   else   echo "Ocurrió un error !!<script>document.location.href='ups.php';</script>\n";
?>
