<?php
$id= $_GET['id'];
$direccion= $_GET['direccion'];
if (!$id || !$direccion){
	echo "Debe seleccionar una propiedad ha eliminar";
}
else{
	include("php/connect.php");
	$sql= "DELETE FROM `propiedades` WHERE `id`=".$id."";
	$sqlfotos="DELETE FROM `imagenes` WHERE `direccion`='".$direccion."'";
	$result= mysql_query($sql,$db);
	$resultfotos= mysql_query($sqlfotos,$db);
	if($result && $resultfotos){
		echo "Se ha eliminado con éxito";
	}
	else {
		die(mysql_error());
		echo"<br>Se ha producido un error.";
	}
	if(!$result || !$resultfotos){
		echo "No se ha borrado o la propiedad o sus fotos";
	}
}
echo "<a href='../../administracion.php'>Volver</a>";
?>