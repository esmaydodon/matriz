<?php 

include("../func/funciones.php");

//Separa nombre de extension desde el punto. Luego toma extension le añade un punto y renombra con valor rand el nombre del fichero.
//permitiendo subir archivos existentes para otras secciones sin reescribir ficheros en servidor.
function renombrar($nombre_foto)
{
$random=mt_rand(1,15000);
    $ext = substr(strrchr($nombre_foto,"."),1);    
    $xext = ".".$ext;
    $n = basename($nombre_foto, $xext);
    $nombre_foto = $n . "-" . $random . $xext;
return $nombre_foto;
}  
$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
//tomo el valor de un elemento de tipo texto del formulario 
$cadenatexto = quitar($_POST["cadenatexto"]); 
echo "nombreProducto_$cadenatexto: " . $cadenatexto . "<br><br>"; 

//datos del arhivo 
$n_file1 = $_FILES['file1']['name'];#nombre                  TERMINAL ELECTRICO.bmp
$n_file1_tmp = $_FILES['file1']['tmp_name'];#nombre temporal C:\WINDOWS\Temp\php273A.tmp
$n_file1_size = $_FILES['file1']['size'];#tamaño             57694
$n_file1_type = $_FILES['file1']['type'];#tipo               image/bmp	
 //DEBUG DE SUBIDA DE FICHERO 1
/*    echo "archivo imagen.tipo:".$n_file1."<br/>";//TERMINAL ELECTRICO.bmp  
    echo "nombre temporal C:\WINDOWS\Temp\ :".$n_file1_tmp."<br/>";//  C:\WINDOWS\Temp\php273A.tmp  
    echo "tamaño:".$n_file1_size."<br/>"; //57694   
    echo "n_file1_type:.extemncion".$n_file1_type."<br/>";// image/bmp	 : .bmp */
    if ($n_file1 == '') //  
        { 
        $n_file1 = ""; $sin_file1 = "TRUE"; 
    } else {
          $n_file1 = $cadenatexto;    // CON FICHERO renombrar($n_file1);
          $sin_file1 = "FALSE";
                //$fecha_pp1 = date("Y-m-d"); # tengo problemas co esto
                    }
    
//Dirección donde se guardaran los archivos cargados
$upload_ficheros = "imagenes/contenido/";//Mover direccion temporal de FILE 1 a DIRECCION FINAL en ficheros/pdfs/
$sep=explode('image/',$n_file1_type); // Separamos image/                      //image/bmp
$tipo=$sep[1]; // Optenemos el tipo de imagen que es 

if($tipo == "gif" || $tipo == "pjpeg" || $tipo == "bmp"|| $tipo == "jpeg"|| $tipo == "png"){ 
	if ($tipo =="jpeg") $tipo2 = "jpg"; 	if ($tipo =="bmp")$tipo2 = "bmp";	if ($tipo =="pjpeg")$tipo2 = "jpg"; if ($tipo =="png") $tipo2 = "png";
if ($sin_file1 != "TRUE")
{
    $n_path_file1        =    $upload_ficheros.$n_file1.'.'.$tipo2;///////////////////////////////////////////    
    $resultado1        =    move_uploaded_file($n_file1_tmp, $n_path_file1);
    if (!$resultado1)
        {
            echo "ERROR: El archivo no pudo ser cargado al servidor";
            exit;
        }
	    }	    
} 
else echo "el tipo de archivo no es de los permitidos";// Si no es el tipo permitido lo desimos 
//ahora de mover la imagen al servisdor ahora la insertamos en la bD 
$descripcion_producto = quitar($_POST['txtDescripcion' ]);
$precio= quitar($_POST['txtPrecio' ]);
//$n_path_file1 = ereg_replace( "([     ]+)","",$n_path_file1 );///////////////////////////////////////////
$consulta = "INSERT INTO productos(nombre_producto,descripcion_producto,precio ,ruta_img1 )  
                           VALUES ('$cadenatexto','$descripcion_producto','$precio','$n_path_file1')";/*$consulta = "INSERT INTO imagenes(nombre_imagen,ruta_imagen)  VALUES ('$cadenatexto','$n_path_file1')"*********modificar aqui nada m'as****************/
/*name="txtNombreProducto" 
name="txtDescripcion" 
name="cadenatexto" 
name="MAX_FILE_SIZE" 
name="file1"*/
echo "---------".$n_path_file1;

$result = dime($consulta)or die(mysql_error());
//$last_img_id = mysql_insert_id();
//$consulta2i = "INSERT INTO productos_has_imagenes (productos_idproductos,imagenes_idimagenes) 
 //              VALUES  ($cadenatexto,$last_img_id)";
//$resultado_completo= dime($consulta2i)or die(mysql_error());
echo "<script>document.location.href='../carrito.php'</script>";
//include ("admin/includes/footer.php"); 
?> 