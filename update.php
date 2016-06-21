<?php
if(isset($_POST['Editar'])){
include("php/connect.php");
$direccion = $_POST["direccion"];
$atributo = $_POST["atributo"];
$cambio = $_POST["cambio"];

if (!$direccion || !$atributo || !$cambio){
	echo "Estimado, no ha enviado todos los datos del formulario anterior. Esta página se redireccionará.";
	header("Refresh: 3; URL=../../editar.php");
}
else{
	$sql="UPDATE `propiedades` SET `".$atributo."`='".$cambio."' WHERE `direccion`= '".$direccion."'";
	$result= mysql_query($sql, $db);
	if (!$result){
			echo "No se ha podido actualizar la información.";
			die(mysql_error());
			header ("Refresh: 3; URL=../../index.php");
	}
	else{
			echo "Se ha actualizado con éxito";
			header ("Refresh: 3; URL=../../index.php");
	}

}
}
?>