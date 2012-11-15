<?
include("../func/funciones.php");
include('login.php');   //Destruimos las cookies. 
        setcookie("usNick","x",time()-3600); 
        setcookie("usPass","x",time()-3600); 
?>
<script language="JavaScript" type="text/javascript"> 
location.href = "on.php"; 
</script>
