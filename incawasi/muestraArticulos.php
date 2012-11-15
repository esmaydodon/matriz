<style>
h1 { font-size: 12px;
    line-height: 0px; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; color:#4075b1; text-decoration:none;}
.noti a li { font-size: 12px;
    line-height: 0px; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; color:#4075b1; text-decoration:none;}´
.noti a li:hover { background:#7da7d9;	-moz-border-radius:3px;
border-radius:3px;}
</style>
<?
include("func/funciones.php");  
#para paginar
$RegistrosAMostrar=4;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar

$consulta_productos=dime("select idproductos,nombre_producto,descripcion_producto,precio,ruta_img1 from productos order by idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar"); 
while ($producto=mysql_fetch_array($consulta_productos)){
	;
$cadena = ereg_replace( "([     ]+)","%20",$producto['ruta_img1']);// desaparecer espacio en blanco y cjuntar  as caracteres
	echo"<div class='noti'>
<div><img  src=admin/".$cadena." width='211px' height='103px'></div><br><br>
<h2 style=' float: left;'>".$producto['nombre_producto'] ."</h2><br><br><br><br>
<h1>Donation:".$producto['precio']." EUR.</h1>
<div  class='noti-pie' >
  ".$producto['descripcion_producto']."
 <a  rel='nofollow' class='cc_format_link' href='detalle.php?idp1=".$producto['idproductos']."'> Details</a> 
</div>
</div>";
	}
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM productos"));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
echo "<br><div  style=' clear:both;'>
<a style='text-decoration:underline;cursor:pointer;' onclick=\"Page('1')\"> First </a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"Page('$PagAnt')\"> Back </a> ";
echo "<strong>Page ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a style='text-decoration:underline;cursor:pointer;' onclick=\"Page('$PagSig')\"> Next </a> ";
echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"Page('$PagUlt')\"> Last </a></div>";
?>