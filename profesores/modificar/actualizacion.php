<?php
//obtenemos la informacion de conexion

include("../../conectar.php");

//obtenemos la informacion de los formularios
$curp = $_POST["curp"];
$nombre = $_POST["nombre"];
$apellido_p = $_POST["apellido_p"];
$apellido_m = $_POST["apellido_m"];

$ano = $_POST["ano"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];

$fecha_hoy=getdate();
$mes_actual = $fecha_hoy['mon'];
$ano_actual = $fecha_hoy['year'];
$dia_actual = $fecha_hoy['mday'];

//calculando la edad
$edad = $ano_actual - $ano;

if($mes >= $mes_actual)
	{
	if($dia >= $dia_actual)
		$edad = $edad - 1;
	}

$sexo = $_POST["sexo"];
$estado_civil = $_POST["estado_civil"];
$profesion = $_POST["profesion"];
$cedula = $_POST["cedula"];
$mail = $_POST["mail"];
$mail_company = $_POST["mail_company"];
$movil = $_POST["movil"];

//haciendo la fecha de nacimiento como cadena de caracteres para el formato de MySQL
$fecha_nacimiento = "$ano-"."$mes-"."$dia";

$mail_completo = "$mail@"."$mail_company";

//datos de la consulta
$consulta="UPDATE profesor SET curp='$curp',nombre='$nombre',apellido_p='$apellido_p',apellido_m'$apellido_m',edad='$edad',sexo='$sexo',estado_civil='$estado_civil',profesion='$profesion',cedula='$cedula',mail='$mail_completo',movil='$movil',fecha_nacimiento='$fecha_nacimiento' WHERE curp='$curp'";

//se hace la consulta
$hacerconsulta=mysqli_query ($conectar, $consulta);

//errores por si los hay
$error = mysqli_error($conectar);
$nuerror = mysqli_errno($conectar);

if($hacerconsulta)
	echo ("si se pudo pero no se que pedo");
else
	echo ("$error");
?>