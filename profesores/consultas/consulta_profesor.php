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
			<form action="consulta_profesor_esp.php" method="post" name="tipobusqueda" id="tipobusqueda">
      		<h1>Consulta de Profesores</h1>
     		 <table width="455">
     		   <tr>
       		   <td width="147"><label>
        	    <input name="busqueda_profesor" type="radio" id="busqueda_profesor_0" value="todos" checked="checked" />
        	    Mostrar Todos</label></td>
         	  <td width="137"><label>
         	   <input type="radio" name="busqueda_profesor" value="buscar" id="busqueda_profesor_1" />
         	   Busqueda</label></td>
         	   <td width="155">
          	  <label>
        		<input type="submit" name="button" id="button" value="Consultar Profesores" />
        		</label>
                	</td> 
       			 </tr>
     	 	</table>
     		</form>
	      
		<?php
		include("../../conectar.php");
		
		$consulta = "SELECT * FROM profesor order by nombre";
 
		$hacerconsulta = mysql_query($consulta, $conectar);

		if (is_resource($hacerconsulta)){
			$numeroregistros = mysql_num_rows($hacerconsulta);
		}

		
		echo "<br> Hay <strong>$numeroregistros</strong> Profesores en Total, Registrados \n";

		if($numeroregistros > 0)
			{
			
			while ($profe = mysql_fetch_array($hacerconsulta,MYSQL_ASSOC))
				{
				echo ("<hr>");
				echo ("Curp: " .$profe["curp"]. "&nbsp;&nbsp;&nbsp;Número de Cedula: " .$profe["cedula"]. "<br>");
				echo ("Nombre: " .$profe["nombre"]."&nbsp;".$profe["apellido_p"]."&nbsp;".$profe["apellido_m"]. "<br>");
				echo ("Edad: " .$profe["edad"]. "<br>");
				echo ("Carrera/Profesión: " .$profe["profesion"]. "<br>");
				echo ("Correo Electronico: " .$profe["mail"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefono: " .$profe["movil"]. "<br>");
				
				}
			}
		else
			echo ("no hay nada que hacer");
		?>

  		</div>
<div id="footer">
 			<img src="../../imagenes/back_footer.png" /> </div>
		</div>
</div>
</html>
