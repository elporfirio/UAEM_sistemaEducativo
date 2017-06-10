<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema Educativo - Alta de Unidad de Aprendizaje// by Porfirio Chávez González</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 10px}
-->
</style>
</head>
<?php
//obtenemos la informacion de conexion

include("../../conectar.php");

//obtenemos la informacion de los formularios
$codigo = $_POST["codigo"];
$unidad_aprendizaje = $_POST["unidad_aprendizaje"];
$creditos = $_POST["creditos"];
$plan_estudio = $_POST["plan_estudio"];
$observaciones = $_POST["observaciones"];

//datos de la consulta
$consulta="insert into unidad_aprendizaje values ('$codigo','$unidad_aprendizaje','$creditos','$plan_estudio','$observaciones')";

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
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="alta_ua.php">alta</a></li>
      			<li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="../baja/baja_ua.php">baja</a></li>
      			<li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../consultas/consultar_ua.php">consultar</a></li>
      			<li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido">
    <?php
	
	//resultado de la consulta
	if ($hacerconsulta)
			{
			echo ("<h1>Resultado de la Alta</h1>");
			echo ("<br> Satisfactorio </br><hr>");
			echo ("Se ha dado de alta una Unidad de Aprendizaje con los siguientes datos:<br>");
			echo ("<strong>Codigo: </strong> $codigo <br>");
			echo ("<strong>Nombre de la U.A.: </strong> $unidad_aprendizaje <br>");
			echo ("<strong>No. de Creditos </strong> $creditos <br>");
			echo ("<strong>Plan de Estudio: </strong> $plan_estudio <br>");
			echo ("<hr>");
			}
		else
			{
			echo ("<h1>Resultado de la consulta</h1>");
			echo ("<br> Erroneo </br><hr>");
			echo ("Ha ocurrido un problema:<br>");
	
			echo ("Error No: $nuerror <br> <strong>$error</strong>");
			}
		?>
        <input type="button" onClick="document.location='alta_ua.php'"  value="&lt;&lt; Regresar al Formulario de Alta">
    </div>
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
<?php

	mysqli_close ($conectar);
?>
</body>
</html>
