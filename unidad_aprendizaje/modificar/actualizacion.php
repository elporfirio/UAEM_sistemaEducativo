<?php
//Desarrollado por Jesus Liραn
//webmaster@ribosomatic.com
//ribosomatic.com
//Puedes hacer lo que quieras con el cσdigo
//pero visita la web cuando te acuerdes

//Configuracion de la conexion a base de datos
include("../../conectar.php");


$codigo = $_POST["codigo"];
$unidad_aprendizaje = $_POST["unidad_aprendizaje"];
$creditos = $_POST["creditos"];
$plan_estudio = $_POST["plan_estudio"];
$observaciones = $_POST["observaciones"];

//datos de la consulta
$consulta="UPDATE unidad_aprendizaje SET unidad_aprendizaje='$unidad_aprendizaje', creditos='$creditos', plan_estudio='$plan_estudio', observaciones='$observaciones' WHERE codigo='$codigo'";

//se hace la consulta
$hacerconsulta=mysql_query ($consulta,$conectar);

//errores por si los hay
$error = mysql_error();
$nuerror = mysql_errno();

?>