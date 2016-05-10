<meta http-equiv="refresh" content="0; url=/../nesferprop/properties_listing_list.html" />
<?php
$contrato = $_REQUEST['contrato'];
$tipo = $_REQUEST['checkbox_type_1'];
$comuna = $_REQUEST['location'];
$preciomin = $_REQUEST['inpricefrom'];
$preciomax = $_REQUEST['inpriceto'];
$areamin = $_REQUEST['inareafrom'];
$areamax = $_REQUEST['inareato'];
if ($contrato && $tipo && $comuna && $preciomax && $areamax && $preciomin && $areamin ){
// Inicio de sesion
@session_start();
@session_unset();
$_SESSION['contrato'] = $contrato;
$_SESSION['checkbox_type_1'] = $tipo;
$_SESSION['location'] = $comuna;
$_SESSION['inpricefrom'] = $preciomin;
$_SESSION['inpriceto'] = $preciomax;
$_SESSION['inareafrom'] = $areamin;
$_SESSION['inareato'] = $areamax;
}
?>