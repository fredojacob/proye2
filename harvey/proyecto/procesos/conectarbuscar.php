
<?php
// INCLUYO LA CONEXCION QUE TRAER LOS DATOS 
//Include("procesos/conectar.php");

//DECLARO OTRA VEZ MIS HOSTIN MI USUARIO PASSWORD  EL NOMBRE DE NUESTRA BD
$db_host="localhost";
$db_usuario="root";
$db_password="";
$db_nombre="open_iso";
//CONEXION NORMAL
$con = mysql_connect($db_host, $db_usuario, $db_password, $db_nombre);
//or die(" proeblema al conectarce ");
mysql_select_db($db_nombre, $con)
or die("problema al conectar bd");

// FUNCION MYSQL QUE EXTRAE LOS DATOS DE LA MYSQL DB
	$registro=mysql_query("SELECT * FROM  nuevo WHERE Nombres ='$_POST[cod_proceso]'");
	//or die (" problema en consulta: mysql_error()");
	//FUNCION QUE MUESTRA EN PANTALLA UTILIZANDO FUNCION MYSQL_FETCH
	while ($reg=mysql_fetch_array($registro)) {
// MUESTRA EN PANTALLA 
	echo "Los datos del proceso son los siguientes: ";
	echo "<br>";
	echo $reg['Codproceso'] ;
	echo "<br>";
	echo $reg['Edicion'] ;
	
}

?>


	