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
<script language="javascript" type="text/javascript">
function verificar()  
	{  
   	//Verifica la existencia de los elementos  
	if (document.form1.profesor.value=="null")  
   		{  
    	alert('Falta seleccionar al profesor') 
    	document.form1.profesor.focus()     
		}
	else
		{
		v1=0;
		if (document.form1.unidades.value=="null")  
   			{  
    		alert('Falta seleccionar la Unidad de Aprendizaje') 
    		document.form1.unidades.focus()     
			}
		else
			v2=0;
		}
  	
	if(v1==0 && v2==0)  
  		{ 
		if (confirm("Los datos ingresados son correctos?"))
 			document.form1.submit(); 
		}
	} 
 </script>
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
    
    	
	  <form id="form1" name="form1" method="post" action="registrar_pfua.php">
		<?php
		include("../../conectar.php");
		
		$consulta_prof = "SELECT * FROM profesor order by nombre";
 		$consulta_ua = "SELECT * FROM unidad_aprendizaje order by unidad_aprendizaje";
		
		$hacerconsulta_prof = mysqli_query($conectar, $consulta_prof);
		$hacerconsulta_ua = mysqli_query($conectar, $consulta_ua);

		if($hacerconsulta_prof instanceof mysqli_result and $hacerconsulta_ua instanceof mysqli_result){
			$profesores = mysqli_num_rows($hacerconsulta_prof);
			$unidades = mysqli_num_rows($hacerconsulta_ua);
		}

		echo "<br> Hay <strong>$profesores</strong> Profesores en Total, Registrados \n";
		echo "<br> Hay <strong>$unidades</strong> Unidades de Aprendizaje en Total, Registrados <br><hr color='white' size='1'><br><center>";

		
		echo ("<select name=\"profesor\" id=\"profesor\">");
		echo ("<option value=\"null\">Selecciona un profesor</option>");
		
		if($profesores > 0)
			{
			
			while ($profe = mysqli_fetch_array($hacerconsulta_prof))
				{
				echo ("<option value=\"".$profe["curp"]."\">".$profe["curp"]." -- ".$profe["nombre"]."</option>");
				}
			}
		else
			echo ("no hay nada que hacer");
			
    	echo ("</select><br><bR>");
		
		echo ("<select name=\"unidades\" id=\"unidades\">");
		echo ("<option value=\"null\">Selecciona una Unidad de Aprendizaje</option>");
		
		if($unidades > 0)
			{
			
			while ($profe = mysqli_fetch_array($hacerconsulta_ua))
				{
				echo ("<option value=\"".$profe["codigo"]."\">".$profe["codigo"]." -- ".$profe["unidad_aprendizaje"]."</option>");
				}
			}
		else
		echo ("no hay nada que hacer");
    	echo ("</select><br><bR><br><br>");
		?>
        <input type="button" name="enviar" id="enviar" value="Asignar el Profesor Seleccionado con la Unidad de Aprendizaje" onclick="verificar()" />
      </center>
      </form>
  </div>
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
