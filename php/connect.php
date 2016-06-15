<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nestorfe_prop";
$db = mysql_connect($dbhost,$dbuser,$dbpass) or die('No se puede conectar a la base de datos.');
mysql_select_db($dbname) or die('Problema al seleccionar la base de datos.');
mysql_set_charset ('utf8',$db);
?>