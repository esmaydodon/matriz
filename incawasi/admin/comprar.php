<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("func/funciones.php");
?>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
<link href="incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#contenedor_carrito{
	font-size:11pt;
	text-align: left;
	background-color:#fff;
	width: 798px;
	height:600px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 1px solid  #dfedfe;
	font: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

 .noti{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:350px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 
.noti img{
	border: 0px;
	float:left;
	margin: 2px 7px 2px 0px;
	}	
.noti-pie{clear:both;}
.noti-pie img{ margin: 1px;}
.columna_derecha{
	float:left;
	width:250px;
	height:850px;
	background: #000/* url(imagenes/8.jpg) repeat-x;*/
}  
#noticias{ width:600px;
height:200px;}
#videos{ float: left;}
#pie{color:#AAA; font-size:10pt;
margin: 0px;
padding: 0px;
width: 100%;
background:  #000  url(../imagenes/bg-footer.png) repeat-x;
clear:both;}
.noti-pie{ width:100%; height:50px; margin-right:0px;}
a:link {
	color: #325E94;
}
a:visited {
	color: #4A4A4A;
}
#articulos{
	width:700px;
	height:728px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
</style> 
</head>

<body class="incawasi">

<div id="container">
  <div id="header">
  <div class="mneu_home"><a href="incawasi/home_espanol.html">inicio</a> &nbsp;<a href="incawasi/legal.html">legal</a></div>
  <div class="title"><img src="incawasi/imagenes/titles/bienvenidos.png" width="295" height="62" alt="welcome incawasi" /></div>
<div class="logo"><img src="incawasi/imagenes/logo.png" width="209" height="97" alt="incawasi" /></div>

<div class="menu_espa">
  <ul>
    <li><a href="incawasi/quienesosmos.html"><img src="incawasi/imagenes/menu/quienes_somos.png" width="96" height="20" alt="about us incawasi" border="0" /></a></li>
    <li><a href="incawasi/dondetrabajamos.html"><img src="incawasi/imagenes/menu/donde_trabajamos.png" width="123" height="20" border="0"/></a></li>
    <li><a href="incawasi/quehacemos.html"><img src="incawasi/imagenes/menu/que_hacemos.png" width="88" height="20" alt="what we do" border="0" /></a></li>
    <li><a href="incawasi/voluntarios.html"><img src="incawasi/imagenes/menu/voluntarios.png" width="78" height="20" alt="volunteers" border="0"/></a></li>
    <li><a href="incawasi/donaciones_sponsor.html"><img src="incawasi/imagenes/menu/donaciones.png" width="154" height="20" alt="donate and sponsors" border="0"/></a></li>
    <li><a href="incawasi/galeria.html"><img src="incawasi/imagenes/menu/galeria.png" width="46" height="20" alt="gallery" border="0"/></a></li>
    <li><a href="incawasi/contactanos.html"><img src="incawasi/imagenes/menu/contactos.png" width="70" height="20" alt="contact" border="0"/></a></li>
    
  </ul>
</div>
<!-- end #header -->
</div>
  <div id="mainContent">
    <div id="contenedor_carrito">
    <? 	echo "";?>
    <div id="datos1">
      <table>
        <tbody>
          <tr>
            <td><h2>Datos de cliente</h2>
              <div><strong class="required">E-mail *</strong> <span class="invalid">
                <input type="text" name="email" value="" maxlength="64" class="mail" />
              </span></div>
              <div class="hidden"><strong class="required">Contraseña *</strong> <span>
                <input type="password" name="clave" value="" maxlength="16" class="password norequired" disabled="disabled" />
              </span></div>
              <div class="hidden"><strong>&nbsp;</strong> <span class="radiocheck">
                <input type="checkbox" name="recordar" value="" disabled="disabled" />
                Recordarme en este equipo</span></div>
              <div class="button hidden">
                <input type="button" name="enviar" value="Login »" />
              </div>
              <div><strong class="required">Nombres *</strong> <span>
                <input type="text" name="nombres" value="" maxlength="32" class="name" disabled="disabled" />
              </span></div>
              <div><strong class="required">Apellidos *</strong> <span>
                <input type="text" name="apellidos" value="" maxlength="64" class="name" disabled="disabled" />
              </span></div>
              <div><strong>DNI</strong> <span>
                <input type="text" name="dni" value="" maxlength="8" class="dni norequired" disabled="disabled" />
              </span></div>
              <div><strong>Dirección</strong> <span>
                <input type="text" name="direccion" value="" maxlength="128" class="name norequired" disabled="disabled" />
              </span></div>
              <div><strong class="required">Pais *</strong> <span>
                <select name="pais" class="select" disabled="disabled">
                  <option value="">&nbsp;</option>
                  <option value="1">AD - Andorra</option>
                  <option value="2">AE - Emiratos Árabes Unidos</option>
                  <option value="3">AF - Afganistán</option>
                  <option value="4">AG - Antigua y Barbuda</option>
                  <option value="5">AI - Anguilla</option>
                  <option value="6">AL - Albania</option>
                  <option value="7">AM - Armenia</option>
                  <option value="8">AN - Antillas Holandesas</option>
                  <option value="9">AO - Angola</option>
                  <option value="10">AQ - Antártida</option>
                  <option value="11">AR - Argentina</option>
                  <option value="12">AS - Samoa Americana</option>
                  <option value="13">AT - Austria</option>
                  <option value="14">AU - Australia</option>
                  <option value="15">AW - Aruba</option>
                  <option value="16">AZ - Azerbaiyán</option>
                  <option value="17">BA - Bosnia y Herzegovina</option>
                  <option value="18">BB - Barbados</option>
                  <option value="19">BD - Bangladesh</option>
                  <option value="20">BE - Bélgica</option>
                  <option value="21">BF - Burkina Faso</option>
                  <option value="22">BG - Bulgaria</option>
                  <option value="23">BH - Bahréin</option>
                  <option value="24">BI - Burundi</option>
                  <option value="25">BJ - Benin</option>
                  <option value="26">BM - Bermudas</option>
                  <option value="27">BN - Brunéi</option>
                  <option value="28">BO - Bolivia</option>
                  <option value="29">BR - Brasil</option>
                  <option value="30">BS - Bahamas</option>
                  <option value="31">BT - Bhután</option>
                  <option value="32">BV - Isla Bouvet</option>
                  <option value="33">BW - Botsuana</option>
                  <option value="34">BY - Bielorrusia</option>
                  <option value="35">BZ - Belice</option>
                  <option value="36">CA - Canadá</option>
                  <option value="37">CC - Islas Cocos</option>
                  <option value="38">CD - República Democrática del Congo</option>
                  <option value="39">CF - República Centroafricana</option>
                  <option value="40">CG - Congo</option>
                  <option value="41">CH - Suiza</option>
                  <option value="42">CI - Costa de Marfil</option>
                  <option value="43">CK - Islas Cook</option>
                  <option value="44">CL - Chile</option>
                  <option value="45">CM - Camerún</option>
                  <option value="46">CN - China</option>
                  <option value="47">CO - Colombia</option>
                  <option value="48">CR - Costa Rica</option>
                  <option value="49">CS - Serbia y Montenegro</option>
                  <option value="50">CU - Cuba</option>
                  <option value="51">CV - Cabo Verde</option>
                  <option value="52">CX - Isla de Navidad</option>
                  <option value="53">CY - Chipre</option>
                  <option value="54">CZ - República Checa</option>
                  <option value="55">DE - Alemania</option>
                  <option value="56">DJ - Yibuti</option>
                  <option value="57">DK - Dinamarca</option>
                  <option value="58">DM - Dominica</option>
                  <option value="59">DO - República Dominicana</option>
                  <option value="60">DZ - Argelia</option>
                  <option value="61">EC - Ecuador</option>
                  <option value="62">EE - Estonia</option>
                  <option value="63">EG - Egipto</option>
                  <option value="64">EH - Sahara Occidental</option>
                  <option value="65">ER - Eritrea</option>
                  <option value="66">ES - España</option>
                  <option value="67">ET - Etiopía</option>
                  <option value="68">FI - Finlandia</option>
                  <option value="69">FJ - Fiyi</option>
                  <option value="70">FK - Islas Malvinas</option>
                  <option value="71">FM - Micronesia</option>
                  <option value="72">FO - Islas Feroe</option>
                  <option value="73">FR - Francia</option>
                  <option value="74">GA - Gabón</option>
                  <option value="75">GB - Reino Unido</option>
                  <option value="76">GD - Granada</option>
                  <option value="77">GE - Georgia</option>
                  <option value="78">GF - Guayana Francesa</option>
                  <option value="79">GH - Ghana</option>
                  <option value="80">GI - Gibraltar</option>
                  <option value="81">GL - Groenlandia</option>
                  <option value="82">GM - Gambia</option>
                  <option value="83">GN - Guinea</option>
                  <option value="84">GP - Guadalupe</option>
                  <option value="85">GQ - Guinea Ecuatorial</option>
                  <option value="86">GR - Grecia</option>
                  <option value="87">GS - Islas Georgias del Sur y Sandwich del Sur</option>
                  <option value="88">GT - Guatemala</option>
                  <option value="89">GU - Guam</option>
                  <option value="90">GW - Guinea-Bissau</option>
                  <option value="91">GY - Guyana</option>
                  <option value="92">HK - Hong Kong</option>
                  <option value="93">HM - Islas Heard y McDonald</option>
                  <option value="94">HN - Honduras</option>
                  <option value="95">HR - Croacia</option>
                  <option value="96">HT - Haití</option>
                  <option value="97">HU - Hungría</option>
                  <option value="98">ID - Indonesia</option>
                  <option value="99">IE - Irlanda</option>
                  <option value="100">IL - Israel</option>
                  <option value="101">IN - India</option>
                  <option value="102">IO - Territorio Británico del Océano Índico</option>
                  <option value="103">IQ - Iraq</option>
                  <option value="104">IR - Irán</option>
                  <option value="105">IS - Islandia</option>
                  <option value="106">IT - Italia</option>
                  <option value="107">JM - Jamaica</option>
                  <option value="108">JO - Jordania</option>
                  <option value="109">JP - Japón</option>
                  <option value="110">KE - Kenia</option>
                  <option value="111">KG - Kirguistán</option>
                  <option value="112">KH - Camboya</option>
                  <option value="113">KI - Kiribati</option>
                  <option value="114">KM - Comoras</option>
                  <option value="115">KN - San Cristóbal y Nevis</option>
                  <option value="116">KP - Corea del Norte</option>
                  <option value="117">KR - Corea del Sur</option>
                  <option value="118">KW - Kuwait</option>
                  <option value="119">KY - Islas Caimán</option>
                  <option value="120">KZ - Kazajstán</option>
                  <option value="121">LA - Laos</option>
                  <option value="122">LB - Líbano</option>
                  <option value="123">LC - Santa Lucía</option>
                  <option value="124">LI - Liechtenstein</option>
                  <option value="125">LK - Sri Lanka</option>
                  <option value="126">LR - Liberia</option>
                  <option value="127">LS - Lesotho</option>
                  <option value="128">LT - Lituania</option>
                  <option value="129">LU - Luxemburgo</option>
                  <option value="130">LV - Letonia</option>
                  <option value="131">LY - Libia</option>
                  <option value="132">MA - Marruecos</option>
                  <option value="133">MC - Mónaco</option>
                  <option value="134">MD - Moldavia</option>
                  <option value="135">MG - Madagascar</option>
                  <option value="136">MH - Islas Marshall</option>
                  <option value="137">MK - ARY Macedonia</option>
                  <option value="138">ML - Malí</option>
                  <option value="139">MM - Myanmar</option>
                  <option value="140">MN - Mongolia</option>
                  <option value="141">MO - Macao</option>
                  <option value="142">MP - Islas Marianas del Norte</option>
                  <option value="143">MQ - Martinica</option>
                  <option value="144">MR - Mauritania</option>
                  <option value="145">MS - Montserrat</option>
                  <option value="146">MT - Malta</option>
                  <option value="147">MU - Mauricio</option>
                  <option value="148">MV - Maldivas</option>
                  <option value="149">MW - Malawi</option>
                  <option value="150">MX - México</option>
                  <option value="151">MY - Malasia</option>
                  <option value="152">MZ - Mozambique</option>
                  <option value="153">NA - Namibia</option>
                  <option value="154">NC - Nueva Caledonia</option>
                  <option value="155">NE - Níger</option>
                  <option value="156">NF - Isla Norfolk</option>
                  <option value="157">NG - Nigeria</option>
                  <option value="158">NI - Nicaragua</option>
                  <option value="159">NL - Países Bajos</option>
                  <option value="160">NO - Noruega</option>
                  <option value="161">NP - Nepal</option>
                  <option value="162">NR - Nauru</option>
                  <option value="163">NU - Niue</option>
                  <option value="164">NZ - Nueva Zelanda</option>
                  <option value="165">OM - Omán</option>
                  <option value="166">PA - Panamá</option>
                  <option value="167">PE - Perú</option>
                  <option value="168">PF - Polinesia Francesa</option>
                  <option value="169">PG - Papúa Nueva Guinea</option>
                  <option value="170">PH - Filipinas</option>
                  <option value="171">PK - Pakistán</option>
                  <option value="172">PL - Polonia</option>
                  <option value="173">PM - San Pedro y Miquelón</option>
                  <option value="174">PN - Islas Pitcairn</option>
                  <option value="175">PR - Puerto Rico</option>
                  <option value="176">PS - Palestina</option>
                  <option value="177">PT - Portugal</option>
                  <option value="178">PW - Palau</option>
                  <option value="179">PY - Paraguay</option>
                  <option value="180">QA - Qatar</option>
                  <option value="181">RE - Reunión</option>
                  <option value="182">RO - Rumania</option>
                  <option value="183">RU - Rusia</option>
                  <option value="184">RW - Ruanda</option>
                  <option value="185">SA - Arabia Saudí</option>
                  <option value="186">SB - Islas Salomón</option>
                  <option value="187">SC - Seychelles</option>
                  <option value="188">SD - Sudán</option>
                  <option value="189">SE - Suecia</option>
                  <option value="190">SG - Singapur</option>
                  <option value="191">SH - Santa Helena</option>
                  <option value="192">SI - Eslovenia</option>
                  <option value="193">SJ - Svalbard y Jan Mayen</option>
                  <option value="194">SK - Eslovaquia</option>
                  <option value="195">SL - Sierra Leona</option>
                  <option value="196">SM - San Marino</option>
                  <option value="197">SN - Senegal</option>
                  <option value="198">SO - Somalia</option>
                  <option value="199">SR - Surinam</option>
                  <option value="200">ST - Santo Tomé y Príncipe</option>
                  <option value="201">SV - El Salvador</option>
                  <option value="202">SY - Siria</option>
                  <option value="203">SZ - Suazilandia</option>
                  <option value="204">TC - Islas Turcas y Caicos</option>
                  <option value="205">TD - Chad</option>
                  <option value="206">TF - Territorios Australes Franceses</option>
                  <option value="207">TG - Togo</option>
                  <option value="208">TH - Tailandia</option>
                  <option value="209">TJ - Tayikistán</option>
                  <option value="210">TK - Tokelau</option>
                  <option value="211">TL - Timor Oriental</option>
                  <option value="212">TM - Turkmenistán</option>
                  <option value="213">TN - Túnez</option>
                  <option value="214">TO - Tonga</option>
                  <option value="215">TR - Turquía</option>
                  <option value="216">TT - Trinidad y Tobago</option>
                  <option value="217">TV - Tuvalu</option>
                  <option value="218">TW - Taiwán</option>
                  <option value="219">TZ - Tanzania</option>
                  <option value="220">UA - Ucrania</option>
                  <option value="221">UG - Uganda</option>
                  <option value="222">UM - Islas ultramarinas de Estados Unidos</option>
                  <option value="223">US - Estados Unidos</option>
                  <option value="224">UY - Uruguay</option>
                  <option value="225">UZ - Uzbekistán</option>
                  <option value="226">VA - Ciudad del Vaticano</option>
                  <option value="227">VC - San Vicente y las Granadinas</option>
                  <option value="228">VE - Venezuela</option>
                  <option value="229">VG - Islas Vírgenes Británicas</option>
                  <option value="230">VI - Islas Vírgenes de los Estados Unidos</option>
                  <option value="231">VN - Vietnam</option>
                  <option value="232">VU - Vanuatu</option>
                  <option value="233">WF - Wallis y Futuna</option>
                  <option value="234">WS - Samoa</option>
                  <option value="235">YE - Yemen</option>
                  <option value="236">YT - Mayotte</option>
                  <option value="237">ZA - Sudáfrica</option>
                  <option value="238">ZM - Zambia</option>
                  <option value="239">ZW - Zimbabue</option>
                  <option value="240" selected="selected">__ - Otros paises</option>
                </select>
              </span> </div>
              <div><strong class="required">Teléfono *</strong> <span>
                <input type="text" name="telefono" value="" maxlength="24" class="telephone" disabled="disabled" />
              </span></div>
              <div><strong>Celular</strong> <span>
                <input type="text" name="celular" value="" maxlength="24" class="telephone norequired" disabled="disabled" />
              </span></div></td>
            <td><h2>Datos de envío</h2>
              <div><strong class="required">Nombre *</strong> <span>
                <input type="text" name="e_nombre" value="" maxlength="128" class="content " />
              </span></div>
              <div><strong class="required">Dirección de entrega *</strong> <span>
                <input type="text" name="e_direccion" value="" maxlength="128" class="content " />
              </span></div>
              <div><strong class="required">Tipo de residencia *</strong><span>
                <select name="e_tiporesidencia" class="select">
                  <option value="">&nbsp;</option>
                  <option value="0">Casa</option>
                  <option value="1">Oficina</option>
                </select>
              </span></div>
              <div><strong class="required">Referencia del lugar *</strong> <span>
                <textarea name="e_referencia" class="content" rows="3" cols="30"></textarea>
              </span></div>
              <div><strong class="required">Distrito/Destino *</strong> <span>
                <select name="e_destino" class="select">
                  <option value="">&nbsp;</option>
                  <optgroup label="Lima"></optgroup>
                  <option value="4" class="15">&nbsp; &nbsp;Barranco</option>
                  <option value="5" class="15">&nbsp; &nbsp;Breña</option>
                  <option value="6" class="50">&nbsp; &nbsp;Carabayllo</option>
                  <option value="7" class="50">&nbsp; &nbsp;Chaclacayo</option>
                  <option value="8" class="15">&nbsp; &nbsp;Chorrillos - Cedros - Pantanos</option>
                  <option value="9" class="50">&nbsp; &nbsp;Cieneguilla</option>
                  <option value="10" class="35">&nbsp; &nbsp;Comas</option>
                  <option value="11" class="30">&nbsp; &nbsp;El Agustino</option>
                  <option value="12" class="35">&nbsp; &nbsp;Independencia</option>
                  <option value="13" class="15">&nbsp; &nbsp;Jesús María</option>
                  <option value="14" class="25">&nbsp; &nbsp;La Molina</option>
                  <option value="15" class="15">&nbsp; &nbsp;La Victoria</option>
                  <option value="16" class="25">&nbsp; &nbsp;Lima</option>
                  <option value="17" class="15">&nbsp; &nbsp;Lince</option>
                  <option value="18" class="25">&nbsp; &nbsp;Los Olivos</option>
                  <option value="19" class="50">&nbsp; &nbsp;Chosica</option>
                  <option value="20" class="40">&nbsp; &nbsp;Lurín</option>
                  <option value="21" class="15">&nbsp; &nbsp;Magdalena del Mar</option>
                  <option value="22" class="15">&nbsp; &nbsp;Miraflores</option>
                  <option value="23" class="50">&nbsp; &nbsp;Pachacámac</option>
                  <option value="25" class="15">&nbsp; &nbsp;Pueblo Libre</option>
                  <option value="26" class="50">&nbsp; &nbsp;Puente Piedra</option>
                  <option value="29" class="25">&nbsp; &nbsp;Rímac</option>
                  <option value="31" class="15">&nbsp; &nbsp;San Borja</option>
                  <option value="32" class="15">&nbsp; &nbsp;San Isidro</option>
                  <option value="33" class="35">&nbsp; &nbsp;San Juan de Lurigancho</option>
                  <option value="34" class="35">&nbsp; &nbsp;San Juan de Miraflores</option>
                  <option value="35" class="20">&nbsp; &nbsp;San Luis</option>
                  <option value="36" class="25">&nbsp; &nbsp;San Martín de Porres</option>
                  <option value="37" class="15">&nbsp; &nbsp;San Miguel</option>
                  <option value="38" class="30">&nbsp; &nbsp;Santa Anita</option>
                  <option value="41" class="15">&nbsp; &nbsp;Santiago de Surco</option>
                  <option value="42" class="15">&nbsp; &nbsp;Surquillo</option>
                  <option value="43" class="35">&nbsp; &nbsp;Villa El Salvador</option>
                  <option value="44" class="35">&nbsp; &nbsp;Villa María del Triunfo</option>
                  <option value="65" class="50">&nbsp; &nbsp;Baldearios del Sur (Hasta Pucusana)</option>
                  <option value="66" class="25">&nbsp; &nbsp;Ate</option>
                  <option value="67" class="25">&nbsp; &nbsp;Callao - La Perla</option>
                  <option value="68" class="25">&nbsp; &nbsp;Callao - Bellavista</option>
                  <option value="69" class="25">&nbsp; &nbsp;Callao - Centro</option>
                  <option value="70" class="25">&nbsp; &nbsp;Callao - Industrial</option>
                  <option value="71" class="35">&nbsp; &nbsp;La Planicie - Musa</option>
                  <option value="72" class="35">&nbsp; &nbsp;Los Olivos</option>
                  <option value="73" class="45">&nbsp; &nbsp;Sancho</option>
                  <option value="74" class="35">&nbsp; &nbsp;Callao - Aeropuerto</option>
                  <option value="75" class="35">&nbsp; &nbsp;Callao - La Punta</option>
                  <option value="76" class="35">&nbsp; &nbsp;Canto Grande</option>
                  <option value="77" class="50">&nbsp; &nbsp;Ancon</option>
                  <option value="78" class="50">&nbsp; &nbsp;Lurin</option>
                  <option value="79" class="50">&nbsp; &nbsp;Ventanilla</option>
                  <option value="80" class="50">&nbsp; &nbsp;Chosica</option>
                  <option value="81" class="0">&nbsp; &nbsp;Tienda</option>
                  <option value="82" class="0">&nbsp; &nbsp;</option>
                </select>
              </span></div>
              <div class="hidden"><strong>&nbsp;</strong> <span id="checkDestino" class="shipping"></span></div>
              <div><strong>Teléfono</strong> <span>
                <input type="text" name="e_telefono" value="" maxlength="128" class="telephone norequired" />
              </span></div>
              <div><strong>Celular</strong> <span>
                <input type="text" name="e_celular" value="" maxlength="128" class="telephone norequired" />
              </span></div>
              <div><strong class="required">Fecha de Entrega *</strong> <span>
                <select name="e_fecha" class="select">
                  <option value="">&nbsp;</option>
                  <option value="01/10/2011">Sábado 01, Octubre 2011</option>
                  <option value="02/10/2011">Domingo 02, Octubre 2011</option>
                  <option value="03/10/2011">Lunes 03, Octubre 2011</option>
                  <option value="04/10/2011">Martes 04, Octubre 2011</option>
                  <option value="05/10/2011">Miércoles 05, Octubre 2011</option>
                  <option value="06/10/2011">Jueves 06, Octubre 2011</option>
                  <option value="07/10/2011">Viernes 07, Octubre 2011</option>
                  <option value="08/10/2011">Sábado 08, Octubre 2011</option>
                  <option value="09/10/2011">Domingo 09, Octubre 2011</option>
                  <option value="10/10/2011">Lunes 10, Octubre 2011</option>
                  <option value="11/10/2011">Martes 11, Octubre 2011</option>
                  <option value="12/10/2011">Miércoles 12, Octubre 2011</option>
                  <option value="13/10/2011">Jueves 13, Octubre 2011</option>
                  <option value="14/10/2011">Viernes 14, Octubre 2011</option>
                  <option value="15/10/2011">Sábado 15, Octubre 2011</option>
                  <option value="16/10/2011">Domingo 16, Octubre 2011</option>
                  <option value="17/10/2011">Lunes 17, Octubre 2011</option>
                  <option value="18/10/2011">Martes 18, Octubre 2011</option>
                  <option value="19/10/2011">Miércoles 19, Octubre 2011</option>
                  <option value="20/10/2011">Jueves 20, Octubre 2011</option>
                  <option value="21/10/2011">Viernes 21, Octubre 2011</option>
                  <option value="22/10/2011">Sábado 22, Octubre 2011</option>
                  <option value="23/10/2011">Domingo 23, Octubre 2011</option>
                  <option value="24/10/2011">Lunes 24, Octubre 2011</option>
                  <option value="25/10/2011">Martes 25, Octubre 2011</option>
                  <option value="26/10/2011">Miércoles 26, Octubre 2011</option>
                  <option value="27/10/2011">Jueves 27, Octubre 2011</option>
                  <option value="28/10/2011">Viernes 28, Octubre 2011</option>
                  <option value="29/10/2011">Sábado 29, Octubre 2011</option>
                  <option value="30/10/2011">Domingo 30, Octubre 2011</option>
                  <option value="31/10/2011">Lunes 31, Octubre 2011</option>
                  <option value="01/11/2011">Martes 01, Noviembre 2011</option>
                  <option value="02/11/2011">Miércoles 02, Noviembre 2011</option>
                  <option value="03/11/2011">Jueves 03, Noviembre 2011</option>
                  <option value="04/11/2011">Viernes 04, Noviembre 2011</option>
                  <option value="05/11/2011">Sábado 05, Noviembre 2011</option>
                  <option value="06/11/2011">Domingo 06, Noviembre 2011</option>
                  <option value="07/11/2011">Lunes 07, Noviembre 2011</option>
                  <option value="08/11/2011">Martes 08, Noviembre 2011</option>
                  <option value="09/11/2011">Miércoles 09, Noviembre 2011</option>
                  <option value="10/11/2011">Jueves 10, Noviembre 2011</option>
                  <option value="11/11/2011">Viernes 11, Noviembre 2011</option>
                  <option value="12/11/2011">Sábado 12, Noviembre 2011</option>
                  <option value="13/11/2011">Domingo 13, Noviembre 2011</option>
                  <option value="14/11/2011">Lunes 14, Noviembre 2011</option>
                </select>
              </span> </div>
              <div><strong class="required">Horario de Entrega *</strong> <span>
                <select name="e_hora" class="select">
                  <option value="">&nbsp;</option>
                  <option value="0">De 8am a 10pm</option>
                </select>
              </span> </div>
              <div><strong class="required">Mensaje *</strong> <span>
                <textarea name="e_mensaje" class="content" rows="3" cols="30"></textarea>
              </span></div>
              <div><strong>Observaciones</strong> <span>
                <textarea name="e_comentarios" class="content norequired" rows="3" cols="30"></textarea>
              </span></div></td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
<div class="parrafo">
    <p align="justify">&nbsp;</p></div>
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha">
      <ul>
        <li> <a href="incawasi/index.html">English</a></li>
        <li class="selcte_foot"> Español</li>
      </ul>
    </div><p>Incawasi</p>  
  <!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>