<style type="text/css">
<!--
@import url("../impre.css");
-->
</style><?php 
include("../func/funciones.php");
include('login.php');
if($adminCorrecto and $loginCorrecto) { 
echo "Amo:<b>".$nickUsuarioL."</b>|<a href='cpaneltotal.php'>Super Administrador</a><br>|<a href='destruir.php'>Salir</a><br>"; 
		}elseif($loginCorrecto) 
		{
			 echo "Hola:<b>".$nickUsuarioL."</b>|<a href='destruir.php'>Salir</a><br>"; 
		}
// si soy el amo  chvr Y SINO solo saludo al USUARIO
		 else { echo "El sistema no te ha reconocido";
		?> <SCRIPT LANGUAGE="javascript"> 
        location.href = "barado.php"; 
        </SCRIPT> <? 
	} 
?>
