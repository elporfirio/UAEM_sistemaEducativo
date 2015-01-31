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
<script language="javascript" type="text/javascript">
function verificar()  
	{  
   	//Verifica la existencia de los elementos  
   	if (document.formaltas.codigo.value.length==0)  
   		{  
    	alert('Falta el Codigo de la Materia') 
    	document.formaltas.codigo.focus()     
		}  
    else 
		{
		v1=0;
		if (document.formaltas.unidad_aprendizaje.value.length==0) 
			{
			alert('Falta el nombre de la Materia')
			document.formaltas.unidad_aprendizaje.focus()
			}
		else
			{
			v2=0;
			if (document.formaltas.creditos.value.length==0) 
				{
				alert('Falta el numero de Creditos')
				document.formaltas.creditos.focus()
				}
			else
				{
				v3=0;
				if (document.formaltas.plan_estudio.value=="NULL") 
					{
					alert('Falta elgir el tipo de Plan de Estudio')
					document.formaltas.plan_estudio.focus()
					}
				else
					{
					v4=0;
					}
				}
			}
		}					
   
 	//Luego de la verificacion hacemos el envio del formulario  
  	if(v1==0 && v2==0 && v3==0 && v4==0)  
  		{ 
		if (confirm("Los datos ingresados son correctos?"))
 			document.formaltas.submit(); 
		}   
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
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="alta_ua.php">alta</a></li>
      			<li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="../baja/baja_ua.php">baja</a></li>
      			<li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../consultas/consultar_ua.php">consultar</a></li>
      			<li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido">
    <h1>Alta de Unidad de Aprendizaje<br />
    </h1>
    <p class="Estilo1">Ingresa todos los datos requerido por el formulario y haz &quot;click&quot; en el boton &quot;Dar de Alta&quot;</p>
    <form id="formaltas" name="formaltas" method="post" action="registro_ua.php">
      <div align="center">
        <table width="83%" border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td width="39%" height="240"><p>Codigo de Materia:
                <br />
                <input name="codigo" type="text" id="codigo" maxlength="6" />
                </p>
                <p>Nombre de la Materia:<br />
                  <input name="unidad_aprendizaje" type="text" id="unidad_aprendizaje" maxlength="30" />
                </p>
                <p>No. de Creditos:<br />
                  <input name="creditos" type="text" id="creditos" maxlength="3" />
                </p>
                <p>Plan de Estudio:
                  <select name="plan_estudio" id="plan_estudio">
                    <option value="NULL" selected="selected">Seleccione</option>
                    <option value="Rigido">Plan Rigido</option>
                    <option value="Flexible">Plan Flexible</option>
                                                        </select>
                </p>
              <p>&nbsp;</p>
              </td>
              <td width="61%"><p>Observaciones:</p>
                <p>
                  <textarea name="observaciones" cols="30" rows="5" wrap="virtual" id="observaciones"></textarea>
                </p></td>
            </tr>
              </table>
        <p>
          <input type="button" name="Botón" id="enviar" value="Dar de Alta" onclick="verificar()"/>
           <input type="reset" name="reset" id="reset" value="Borrar Valores" />
        </p>
      </div>
    </form>
    <p>&nbsp;</p>
  </div>
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
