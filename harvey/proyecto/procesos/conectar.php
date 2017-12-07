<?php
//Include("procesos/conexion.php");
$db_host="localhost";
$db_usuario="root";
$db_password="";
$db_nombre="open_iso";

$con = mysql_connect($db_host, $db_usuario, $db_password) or die("error en la conexion");
mysql_select_db($db_nombre, $con) or die ("la base de datos no carga o no se encontro la informacion".$db_nombre); 	


		if ($_POST) {
			$Codprocesoo=$_POST["cod_proceso"];
			$Edicionn=$_POST["edicion"];
			$Fechaprocesoo=$_POST["fechaproceso"];
			$Fecharevisionn=$_POST["fecharevison"];
			$Nombress=$_POST["nombres"];
			$Apellidoss=$_POST["apellidos"];
			$Observacioness=$_POST["observaciones"];
			$Misionprocesoo=$_POST["misionproceso"];
			$Actividadd=$_POST["actividad"];
			$Entradaa=$_POST["entrada"];
			$salidaa=$_POST["salida"];
			$Procesorelacionadoo=$_POST["procesorelacionado"];

			$Query_sql="insert into nuevo (Codproceso,Edicion,Fechaproceso,Fecharevision,Nombres,Apellidos,Observaciones,Misionproceso,Actividad,Entrada,Salida,Procesorelacionado) values ('$Codprocesoo','$Edicionn','$Fechaprocesoo','$Nombress','$Apellidoss','$Observacioness','$Misionprocesoo','$Actividadd','$Entradaa','$Fecharevisionn','$salidaa','$Procesorelacionadoo')";			
			//echo $Query_sql;
			$Resp=mysql_query($Query_sql) or die(" revise su conexion esta fallando posiblemnte es el echo del la variable querySQL");
		    header("Location: verproceso.php");

		}
?>