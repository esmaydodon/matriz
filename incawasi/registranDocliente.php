<?php 
include("func/funciones.php");
#ID producto, precio cantidad defaul 1 ($idproducto,$precio,$cantidad) ásar x js
$idp = $_POST['idproduc']; 
$nom_comprador = quitar($_POST['nom']); 
$ema_comprador= quitar($_POST['ema' ]);
$id_comprador= quitar($_POST['id']);
$tipo_usuario = quitar($_POST['tipo']);
$pai_usuario = quitar($_POST['pai']);
$monto = quitar($_POST['mon']);
$fecha = quitar($_POST['fecha2']);
$id_comprador =$id_comprador+1;
$consulta = "INSERT INTO usuarios( idusuarios,
                                  nombre_apellidos_usu,
                                  email_usuario,
								  tipo_usuario_idtipo_usuario,
								  pais_usuario ) values
								  ('$id_comprador',
								  '$nom_comprador',
								  '$ema_comprador',
								  '$tipo_usuario',
								  '$pai_usuario')"  ;
$resultado = dime($consulta) or die(mysql_error());$last_usuario_id = mysql_insert_id();
$consulta2 ="INSERT INTO compras (usuarios_idusuarios,compra_total,compra_fecha)  VALUES  ($last_usuario_id,'$monto','$fecha')";
$resultado2 = dime($consulta2) or die(mysql_error());$last_compra_id = mysql_insert_id();
#comenzamos a registrar detalle de orden / compra veremos eso de  estado = :-)
$cadena= "INSERT INTO compras_has_productos (Compras_idCompras,productos_idproductos,Precio_compra,detalle_cantidad,estado_compra) VALUES ($last_compra_id, $idp,$monto,1,0)";
$consultaDetalle = dime($cadena);
//$Resultado2= dime($consulta2)or die(mysql_error());
if ($resultado and $consulta2 ){
	
	echo"    <input name='idusuario'id='idusuario' type='hidden' value='".$last_usuario_id."'> 
		  <input name='compraid' id='compraid' type='hidden' value='".$last_compra_id."'> ";
	}else{
		echo"<b style='color:red;'><h1>F5.   error.</h1></b>";
		}
?> 
 
