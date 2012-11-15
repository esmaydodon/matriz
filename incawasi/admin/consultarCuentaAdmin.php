<?
include("../func/funciones.php");
$idc = $_POST['id'];
$consulta = dime("select idusuarios,nombre_apellidos_usu,nick_usuario,pass_usuario,email_usuario,tipo_usuario_idtipo_usuario from usuarios where tipo_usuario_idtipo_usuario = $idc ");
while($usuario = mysql_fetch_array($consulta)){
	echo "<b>Nombre Usuario:</b>". $usuario['nombre_apellidos_usu']."<br><b>Nick De Usuadio:</b>". $usuario['nick_usuario']."<br><b>Email De Usuario:</b>".$usuario['email_usuario']."<br>";
	echo "<a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosCuenta(".$usuario['idusuarios'].")'>Modificar Cuenta</a>";
	} 
?>