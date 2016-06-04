<meta http-equiv="refresh" content="0; url=/../../properties_listing_list.php" />
<?php
$contrato = @$_REQUEST['contrato'];
$tipo = @$_REQUEST['checkbox_type_1'];
$comuna = @$_REQUEST['location'];
$preciomin = @$_REQUEST['inpricefrom'];
$preciomax = @$_REQUEST['inpriceto'];

if ($contrato && $tipo && $comuna && $preciomax && $preciomin){
// Inicio de sesion
@session_start();
@session_unset();
$_SESSION['contrato'] = $contrato;
$_SESSION['checkbox_type_1'] = $tipo;
$_SESSION['location'] = $comuna;
$_SESSION['inpricefrom'] = $preciomin;
$_SESSION['inpriceto'] = $preciomax;
}
?>
