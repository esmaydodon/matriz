<?
include("../func/funciones.php");
$idc = $_POST['id'];
$consulta = dime("select idproductos,nombre_producto,descripcion_producto,precio,ruta_img1  from productos   ");
while($productos = mysql_fetch_array($consulta)){
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "<b>Nombre:</b>". $productos['nombre_producto']."<br><b>descripcion :</b>". $productos['descripcion_producto']."<br><b>precio:</b>".$productos['precio']."<br><img  src=".$cadena." width='105px' height='51px'>";
	echo "<a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarProducto(".$productos['idproductos'].")'>Eliminar Cuenta</a>";
	} 
?>