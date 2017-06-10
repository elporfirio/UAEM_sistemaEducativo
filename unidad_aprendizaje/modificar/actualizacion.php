<?php
//Desarrollado por Jesus Li��n
//webmaster@ribosomatic.com
//ribosomatic.com
//Puedes hacer lo que quieras con el c�digo
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
$hacerconsulta=mysqli_query ($conectar,$consulta);

//errores por si los hay
$error = mysqli_error($conectar);
$nuerror = mysqli_errno($conectar);

?>