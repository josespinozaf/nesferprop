<?php
include ("php/connect.php");
if(isset($_POST['IngresarPropiedad'])){
$direccion= $_REQUEST['direccion'];
$tipo1= $_REQUEST['tipo'];
$contrato= $_REQUEST['contrato'];
$precio= $_REQUEST['precio'];
$area= $_REQUEST['area'];
$mconstruidos= $_REQUEST['mconstruidos'];
$añoconstruccion= $_REQUEST['añoconstruccion'];
$comuna= $_REQUEST['comuna'];
$habitaciones= $_REQUEST['habitaciones'];
$baños= $_REQUEST['baños'];
$descripcion= $_REQUEST['descripcion'];
	
//comprobamos si ha ocurrido un error.
	if ( !isset($_FILES["imagen1"]) || $_FILES["imagen1"]["error"] > 0 || 
		 !isset($_FILES["imagen2"]) || $_FILES["imagen2"]["error"] > 0 || 
		 !isset($_FILES["imagen3"]) || $_FILES["imagen3"]["error"] > 0){
	echo "ha ocurrido un error, faltan las fotos";
	}														
	else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 16MB
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 16384;
	for ($i = 1; $i <= 3; $i++) {
		if (in_array($_FILES['imagen'.$i.'']['type'], $permitidos) && $_FILES['imagen'.$i.'']['size'] <= $limite_kb * 1024){

		//este es el archivo temporal
		$imagen_temporal  = $_FILES['imagen'.$i.'']['tmp_name'];
		//este es el tipo de archivo
		$tipo = $_FILES['imagen'.$i.'']['type'];
		//leer el archivo temporal en binario
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);

                //escapar los caracteres
       $data = mysql_escape_string($data);

	   $resultado = mysql_query("INSERT INTO imagenes(direccion, imagen, tipo_imagen) VALUES ('".$direccion."','".$data."', '".$tipo."')", $db); 
	   
	  if ($resultado){
		echo "Felicitaciones, la imagen".$i." ha sido subida exitosamente. Esta pagina se redireccionará<br>";
					} 
	  else {
		echo "Oh, ocurrió un error al copiar el archivo de la imagen.".$i."<br>";
					}
      }
      else {
      	echo "Cuidado, archivo no permitido, es tipo de archivo prohibido o excede el tamaño de $limite_kb Kilobytes <br>";
      }
	}
	$resultado1 = mysql_query("INSERT INTO `propiedades`(`direccion`, `tipo`, `contrato`, `precio`, `area`, `mconstruidos`, `anoconstruccion`, `comuna`, `descripcion`, `habitaciones`, `banos`)
			VALUES ('".$direccion."','".$tipo1."','".$contrato."',".$precio.",".$area.",".$mconstruidos.",".$añoconstruccion.",'".$comuna."','".$descripcion."',".$habitaciones.",".$baños.")", $db);
	 if ($resultado1){
		echo "Felicitaciones, el ingreso de la propiedad está completado<br>";
					} 
	  else {
		echo "Oh, ocurrió un error. <br>".mysql_error();
					}
      } 
	
	}
	 header("Refresh: 3; URL=../../administracion.php");

?>
