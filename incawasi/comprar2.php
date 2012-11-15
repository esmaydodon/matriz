<?php 
include("func/funciones.php");
$nom_comprador = quitar($_POST["nombre_comprador"]); 
$ema_comprador= quitar($_POST['email_comprador' ]);
$tel_comprador= quitar($_POST['telefono_comprador' ]);
$tipo_usuario = quitar($_POST['tipo_usu' ]);
$pai_usuario = quitar($_POST['pais']);
$consulta = "INSERT INTO usuarios(nombre_apellidos_usu,email_usuario,telefono_usuario,tipo_usuario_idtipo_usuario,pais_usuario ) values ('$nom_comprador','$ema_comprador','$tel_comprador',$tipo_usuario,$pai_usuario)"  ;
 echo $consulta."<br>";
 $total = quitar($_POST['monto']);
 echo $total;
?> 