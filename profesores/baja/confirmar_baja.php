<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Profesor</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
</head>



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
    		<p><h1>Marca los resultados a eliminar</h1></p>
    		<?php
			include("../../conectar.php");

			$datobaja = $_POST["campo_baja"];
			$tipo = $_POST["tipo_dato"];
			
			$consulta = "SELECT * FROM profesor WHERE $tipo like '%$datobaja%';";
 
			$hacerconsulta = mysql_query($consulta, $conectar);
	
			$numeroregistros = mysql_num_rows($hacerconsulta);
		
			echo "<br> Hay <strong>$numeroregistros</strong> registros que coinciden con su busqueda.";
			
			echo ("<form id=\"formulario_borrar\" name=\"form1\" method=\"post\" action=\"borrar.php\">");

			if($numeroregistros > 0)
				{
				while ($profe = mysql_fetch_array($hacerconsulta,MYSQL_ASSOC))
					{
					echo ("<hr color=\"#2D5269\" size=\"1\">");
					echo ("Curp: " .$profe["curp"]. "&nbsp;&nbsp;&nbsp;Número de Cedula: " .$profe["cedula"]. "<br>");
					echo ("Nombre: " .$profe["nombre"]."&nbsp;".$profe["apellido_p"]."&nbsp;".$profe["apellido_m"]. "<br>");
					echo ("Carrera/Profesión: " .$profe["profesion"]. "<br>");
					echo ("Correo Electronico: " .$profe["mail"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefono: " .$profe["movil"]. "<br>");
					echo ("<div class=\"casilla_borrado\"><label><input type=\"checkbox\" name='campos[]' value='".$profe["curp"]."' /></label> <i>Selecciona para borrar</i></div>");
					}
				}
			else
				echo ("No hay datos que coincidan con su busqueda");
			?>
			<br />
    		  <br />
  		      </p>
    		<label><input type="submit" name="confirmar_elborrado" id="confirmar_elborrado" value="Borrar todos los elementos Marcados" />
          </label>
          </form>
  		</div>
<div id="footer">
 			<img src="../../imagenes/back_footer.png" /> </div>
		</div>
</div>
</html>
