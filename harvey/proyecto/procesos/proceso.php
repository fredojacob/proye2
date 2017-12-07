<?php

include 'conexion.php';
$codproceso = $_POST["codproceso"];
$edicion=$_POST["edicion"];
$fechaproceso=$_POST["fechaproceso"];
$fecharevison=$_POST["fecharevison"];
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$observaciones=$_POST["observaciones"];
$misionproceso=$_POST["misionproceso"];
$actividad=$_POST["actividad"];
$entrada=$_POST["entrada"];
$salida=$_POST["salida"];
$procesorelacionado=$_POST["procesorelacionado"];
$recurso=$_POST["recurso"];


/*ECHO "SERVIODR<br>";
echo "fecha prceso: $fechaproceso <br>";
echo "nombres : $nombres <br>";
*/

$conexion=new conexion();
$cn= $conexion->conecta();
$sql="INSERT INTO PROCESO (fecha_proceso,fecha_revision,editorial,edicion,resp_nombres,resp_apellidos,resp_observacion) VALUES (?,?,?,?,?,?,?);";
$statement=$cn->prepare ($sql);
//ENLAZAR PARAMETROS CON LA CONSULTA SQL CON LOS VALORES OBTENIDOS DEL FORMULARIO
$statement->bindParam(1,$fechaproceso,PDO::PARAM_STR);
$statement->bindParam(2,$fecharevison,PDO::PARAM_STR);
$statement->bindParam(3,$editorial,PDO::PARAM_STR);
$statement->bindParam(4,$edicion,PDO::PARAM_STR);
$statement->bindParam(5,$nombres,PDO::PARAM_STR);
$statement->bindParam(6,$apellidos,PDO::PARAM_STR);
$statement->bindParam(7,$observaciones,PDO::PARAM_STR);
echo $statement->execute() ? "se registro":"error";
//"?" es una condicion ternario condicion?true:false

$statement->closeCursor();
$conexion=null;

  ?>	