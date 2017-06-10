<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Profesor</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 10px}
-->
</style>
<script type="text/javascript" src="../modificar/ajax.js"></script>
</head>

<body>
<div id="contenido">
	<div id="header"><img src="../../imagenes/uaem_head.png" width="689" height="88" /></div>
<div id="menu_profesor" >
     		<p><ul>
      			<li class="seccion" style="background:url(../../imagenes/alta.png) bottom left no-repeat;"><a href="../alta/alta_profesor.php">alta</a></li>
			  <li class="seccion" style="background:url(../../imagenes/baja.png) bottom left no-repeat;"><a href="../baja/baja_profesor.php">baja</a></li>
       		  <li class="seccion" style="background:url(../../imagenes/consultar.png) bottom left no-repeat;"><a href="../consultas/consulta_profesor.php">consultar</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/modificar.png) bottom left no-repeat;"><a href="../modificar/modificar_profesor.php">modificar</a></li>
      			<li class="seccion" style="background:url(../../imagenes/asignar.png) bottom left no-repeat;"><a href="asignar_ua.php">Asignar U.A.</a></li>
    		</ul></p>
  		</div>
<div id="menu_ua">
      		<p><ul>
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="../alta/alta_ua.php">alta</a></li>
      			<li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="../baja/baja_ua.php">baja</a></li>
      			<li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/consultas/consultar_ua.php">consultar</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido">
    <h1>Unidad de Aprendizaje<br />
    </h1>
    <p class="Estilo1"><a href="asignar_ua.php">ASIGNAR</a> | CONSULTAR POR U.A. | CONSULTAR POR PROFESOR</p>
    
		<?php
		include("../../conectar.php");
		
		$curp = $_POST["profesor"];
		$codigo = $_POST["unidades"];
		
		//revisar las unidades que ya imparte
		$checar = "select * from asignatura_ua WHERE curp = $curp";
		$chekeo = mysqli_query($conectar, $checar);
		if($chekeo instanceof mysqli_result){
            $unidades_impartidas = mysqli_num_rows($chekeo);
        } else {
		    $unidades_impartidas = 0;
        }
		
		if($unidades_impartidas < 4)
			{
			//datos de la consulta
			$consulta="insert into asignatura_ua values ('$curp','$codigo', 0)";

			//se hace la consulta
			$hacerconsulta=mysqli_query($conectar, $consulta);

			//errores por si los hay
			$error = mysqli_error($conectar);
			$nuerror = mysqli_errno($conectar);
			if($hacerconsulta)
				echo("El profesor a sido asignado correctamente con la Unidad de Aprendizaje <br><br><br>");
			else
				echo("$nuerror -- $error");
			}
		else
			{
			echo ("El profesor ya ha alcanzado el maximo de 4 materias impartidas <br><br><br>");
			}
		?>
	<input type="button" onClick="document.location='asignar_ua.php'"  value="&lt;&lt; Regresar al Formulario de Asignacion">
  </div>
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
