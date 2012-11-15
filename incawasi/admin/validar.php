<?php 
//include ("includes/header.php");
include("../func/funciones.php");
        $nickN = quitar($_POST["usuario_text"]); 
        $passN = quitar($_POST["pass_text"]);

     if($nickN != "" && $passN != "") 
       { 
        $result = dime("SELECT pass_usuario FROM usuarios WHERE nick_usuario='$nickN'");      
        if($row = mysql_fetch_array($result)) //si devuelve filas entonces si existe las melas estas 
        { 
        if($row[0] == $passN) //ahora comprobamos si el pass_textword es correcto
        { 
        setcookie("usNick",$nickN,time()+3600); 
        setcookie("usPass",$passN,time()+3600); 
        ?>
<link href="../impre.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #FF0000}
.Estilo2 {color: #0066FF}
-->
</style>
 
        <div align="center">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><img src="../images/loader.gif" width="16" height="16" /></p>
          <p><span class="Estilo1"><span class="Estilo2">Ingreso exitoso, ahora sera dirigido a la pagina principal</span>.</span> 
            <SCRIPT LANGUAGE="javascript"> 
        location.href = "panel.php"; 
            </SCRIPT> 
            <? 
        } 
        else 
        { 
        echo "pass_textword incorrecto"; 
        } 
        } 
        else 

        { 
       echo "usuario_text no existente en la base de datos"; 
		 ?>
		    <SCRIPT LANGUAGE="javascript"> 
        location.href = "barado.php"; 
            </SCRIPT>
		    <? 
        } 
        mysql_free_result($result); 
       } 
        else 

      { 
      echo "Debe especificar un nick y pass_textword"; 
        } 
        mysql_close(); 
        ?>
          </p>
</div>
