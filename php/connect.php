<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
//header("Content-Type: text/html;charset=utf-8");
//$dbhost = "localhost:3306";
//$dbuser = "nestorfe";
//$dbpass = "Pagina123="; 
$dbname = "nestorfe_prop";
$db = mysql_connect($dbhost,$dbuser,$dbpass) or die('No se puede conectar a la base de datos.');
mysql_select_db($dbname) or die('Problema al seleccionar la base de datos.');
mysql_set_charset ('utf8',$db);
?>