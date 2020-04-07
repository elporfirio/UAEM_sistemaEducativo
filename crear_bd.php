<?php

//include("conectar.php");

$link = mysqli_connect("localhost", "root", "root", "sistema_educativo");

if($link)
	{
	echo ("se ha conectado al servidor MySQL haciendo la consulta...");
	}
else
	{
	die ("ERROR no se puedo conectar al servidor");
	}

//aqui la base de datos, se crea con PHPmyAdmin
mysqli_select_db($link, "sistema_educativo");


//Las siguientes secuencias crean las tablas
$consulta="create table if not exists profesor (";
$consulta.="curp varchar(20) not null,";
$consulta.="nombre varchar(12),";
$consulta.="apellido_p varchar(15),";
$consulta.="apellido_m varchar(15),";
$consulta.="edad smallint,";
$consulta.="sexo varchar(1),";
$consulta.="estado_civil varchar(20),";
$consulta.="profesion varchar(40),";
$consulta.="cedula varchar(20),";
$consulta.="mail varchar(30),";
$consulta.="movil varchar(20),";
$consulta.="fecha_nacimiento date,";
$consulta.="primary key (curp)";
$consulta.=");";

$consultando=mysqli_query($link, $consulta);

$consulta="create table if not exists unidad_aprendizaje (";
$consulta.="codigo varchar(10) not null,";
$consulta.="unidad_aprendizaje varchar(40),";
$consulta.="creditos smallint,";
$consulta.="plan_estudio varchar(15),";
$consulta.="observaciones varchar(255),";
$consulta.="primary key (codigo)";
$consulta.=");";

$consultando=mysqli_query($link, $consulta);

$consulta="create table if not exists asignatura_ua (";
$consulta.="curp varchar(20) not null,";
$consulta.="codigo varchar(10) not null,";
$consulta.="total_creditos smallint,";
$consulta.="foreign key (curp) references profesor(curp) on update cascade on delete restrict,";
$consulta.="foreign key (codigo) references unidad_aprendizaje(codigo) on update cascade on delete restrict";
$consulta.=");";

$consultando=mysqli_query($link, $consulta);

if ($consultando)
	echo "Se ha creado la base de datos satisfactoriamente";
else
	{
	echo "Imposible Terminar, hay un error: ";
	$error = mysqli_error($link);
	echo "$error";
	}

mysqli_close($link);
?>

	