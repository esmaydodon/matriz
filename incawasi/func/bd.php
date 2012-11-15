<?php
include("conexion.php");
function dime($sql){
  if ( ! $query = mysql_query($sql,conex)){
 
  return false;
  }
return $query;
}
// no para  whiles... :P
function nombres_campos($sql) {
  if ( ! $query = mysql_fetch_array($sql) ){
  stderr ("Error al efectuar la Sentencia SQL");
  return false;
  }
return $query;
}
function campo_bd($sql) {
$query = mysql_query($sql) or die(mysql_error());
$ovni1= mysql_fetch_array($query);
return $ovni1;
}

function cantidad($sql) {
  if ( ! $query = mysql_num_rows($sql) ){
  return false;
  }
return $query;
}
function ovni() {
	
}
return $m;
?>