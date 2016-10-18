<?php
if(isset($_POST['Editar1'])){
include("php/connect.php");
$direccion = $_POST["direccion"];
$atributo = $_POST["atributo"];
$cambio = $_POST["cambio"];

if (!$direccion || !$atributo || !$cambio){
	echo "Estimado, no ha enviado todos los datos del formulario anterior. Esta página se redireccionará.";
	echo "<a href='../../administracion.php'>Volver</a>";
}
else{
	$sql="UPDATE `propiedades` SET `".$atributo."`='".$cambio."' WHERE `direccion`= '".$direccion."'";
	$result= mysql_query($sql, $db);
	if (!$result){
			echo "No se ha podido actualizar la información.";
			die(mysql_error());
			echo "<a href='../../administracion.php'>Volver</a>";
	}
	else{
			echo "Se ha actualizado con éxito";
			echo "<a href='../../administracion.php'>Volver</a>";
	}

}
}
?>