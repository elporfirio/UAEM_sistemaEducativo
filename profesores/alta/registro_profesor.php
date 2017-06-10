<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Profesor</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
</head>
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
$consulta="insert into profesor values ('$curp','$nombre','$apellido_p','$apellido_m','$edad','$sexo','$estado_civil','$profesion','$cedula','$mail_completo','$movil','$fecha_nacimiento')";

//se hace la consulta
$hacerconsulta=mysqli_query ($conectar,$consulta);

//errores por si los hay
$error = mysqli_error($conectar);
$nuerror = mysqli_errno($conectar);
?>


<body>
<div id="contenido">
	<div id="header"><img src="../../imagenes/uaem_head.png" width="689" height="88" /></div>
<div id="menu_profesor" >
     		<p><ul>
      			<li class="seccion" style="background:url(../../imagenes/alta.png) bottom left no-repeat;"><a href="../../profesores/alta/alta_profesor.php">alta</a></li>
			  <li class="seccion" style="background:url(../../imagenes/baja.png) bottom left no-repeat;"><a href="../../profesores/baja/baja_profesor.php">baja</a></li>
       		  <li class="seccion" style="background:url(../../imagenes/consultar.png) bottom left no-repeat;"><a href="../../profesores/consultas/consulta_profesor.php">consultar</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/modificar.png) bottom left no-repeat;"><a href="../../profesores/modificar/modificar_profesor.php">modificar</a></li>
      			<li class="seccion" style="background:url(../../imagenes/asignar.png) bottom left no-repeat;"><a href="../../profesores/asignar/asignar_ua.php">Asignar U.A.</a></li>
    		</ul></p>
  		</div>
<div id="menu_ua">
      		<p><ul>
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/alta/alta_ua.php">alta</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/baja/baja_ua.php">baja</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/consultas/consultar_ua.php">consultar</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido"> 
        <?php
		//resultado de la consulta
		if ($hacerconsulta)
			{
			echo ("<h1>Resultado de la consulta</h1>");
			echo ("<br> Satisfactorio </br><hr>");
			echo ("Se han ingresado los siguientes Datos:<br>");
			echo ("<strong>Curp: </strong> $curp <br>");
			echo ("<strong>Nombre: </strong> $nombre <br>");
			echo ("<strong>Apellidos </strong> $apellido_p $apellido_m <br>");
			echo ("<strong>Fecha de Nacimiento: </strong> $fecha_nacimiento <br>");
			echo ("<strong>Edad: </strong> $edad <br>");
			if ($sexo == "m")
				$tempsex = "masculino";
			else
				$tempsex = "femenino";
			echo ("<strong>Sexo: </strong> $tempsex <br>");
			echo ("<strong>Estado Civil: </strong> $estado_civil <br>");
			echo ("<strong>Profesion: </strong> $profesion <br>");
			echo ("<strong>No. de Cédula: </strong> $cedula <br>");
			echo ("<strong>E-mail: </strong> $mail_completo <br>");
			echo ("<strong>Tel. Movil: </strong> $movil <br>");
			}
		else
			{
			echo ("<h1>Resultado de la consulta</h1>");
			echo ("<br> Erroneo </br><hr>");
			echo ("Ha ocurrido un problema:<br>");
	
			echo ("Error No: $nuerror <br> <strong>$error</strong>");
			}
		?>
        <br /><input type="button" onClick="document.location='alta_profesor.php'"  value="&lt;&lt; Regresar al Formulario de Alta">
  		</div>
  		<div id="footer">
 			<img src="../../imagenes/back_footer.png" /> </div>
		</div>
<?php
		//libero datos ingresados
		mysqli_close ($conectar);
		?>
    </div>
</html>
