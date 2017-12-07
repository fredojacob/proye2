<?php
$db_host="localhost";
$db_usuario="root";
$db_password="";
$db_nombre="open_iso";

$con = mysql_connect($db_host, $db_usuario, $db_password) or die("error en la conexion");
mysql_select_db($db_nombre, $con) or die ("la base de datos no carga o no se encontro la informacion".$db_nombre); 
?>