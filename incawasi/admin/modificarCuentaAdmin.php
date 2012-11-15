<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?

$consulta = dime("select idusuarios,nombre_apellidos_usu,nick_usuario,pass_usuario,email_usuario,tipo_usuario_idtipo_usuario from usuarios where tipo_usuario_idtipo_usuario = $idc ");
while($usuario = mysql_fetch_array($consulta)){
echo " <form id='form2' name='FormClave' method='post' action='modificandoclave.php'>
<input type='hidden' name='idusuario' value='". $usuario['idusuarios']."'>
Nombre Y Apellidos :<input  type='text' name='nombreUsuario' value='". $usuario['nombre_apellidos_usu']."'/><br>
Email :<input  type='text' name='emailUsuario' value='".$usuario['email_usuario']."'/><br>
Nick Usuario :<input  type='text' name='nickUsuario' value='".$usuario['nick_usuario']."'/><br>
clave nuevaclave :<input type='password' name='PWD1' id='textfield3' /><input type='hidden' name='laclave'>
repita Nueva Clave:<input type='password' name='PWD2' id='textfield4' />
 <input type='button' onClick='checkMe()' value='Guardar Cambios'>
</form> 	";	
	} 
?>

</body>
</html>