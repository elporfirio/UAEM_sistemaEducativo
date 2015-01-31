<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Profesor</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function verificar()  
	{  
   	//Verifica la existencia de los elementos  
   	//Verifica el titulo  
   	if (document.formbajas.campo_baja.value.length==0)  
   		{  
    	alert('Tiene que escribir un parametro de busqueda') 
    	document.formbajas.campo_baja.focus()     
		}  
    else
		v1 = 0;
	
	if (document.formbajas.tipo_dato.value== "null")  
   		{  
    	alert('Tiene que seleccionar un tipo de busqueda') 
    	document.formbajas.tipo_dato.focus()     
		}  
    else
		v2 = 0;
		
	if (v1 == 0 && v2 == 0)
		document.formbajas.submit();   
	}
   </script>
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
<form id="formbajas" name="formbajas" method="post" action="confirmar_baja.php">
            <h1>Baja de Profesores</h1>
        <p>Tipo del dato ingresado:
              <label>
              <select name="tipo_dato" id="tipo_dato">
                <option value="null"></option>
                <option value="curp">CURP</option>
                <option value="nombre">Nombre</option>
                <option value="cedula">Cedula</option>
              </select>
              </label>
</p>
            <p>Ingresa el dato a buscar para eliminar:</p>
            <p>
              <label>
              <input type="text" name="campo_baja" id="campo_baja" />
              </label>
            </p>
            <p>
              <label>
              <input type="button" name="buscar" id="buscar" value="Confirmar datos de Baja" onclick="verificar()" />
              </label>
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
  		</div>
  <div id="footer">
 			<img src="../../imagenes/back_footer.png" /> </div>
		</div>
    </div>
</html>
