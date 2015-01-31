<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema Educativo - Baja de Unidad de Aprendizaje// by Porfirio Chávez González</title>
<link href="../../estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {font-size: 10px}
-->
</style>
<script language="javascript" type="text/javascript">
function confirmar()
	{
	if (confirm("Desea dar de baja las Unidades Seleccionadas?"))
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
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="../alta/alta_ua.php">alta</a></li>
      			<li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="baja_ua.php">baja</a></li>
      			<li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../consultas/consultar_ua.php">consultar</a></li>
      			<li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido">
    <h1>Baja de Unidad de Aprendizaje<br />
    </h1>
    <?php
	include("../../conectar.php");
			
	if(!empty($_POST['campos'])) 
		{
		$aLista=$_POST['campos'];
		$sQuery="DELETE FROM unidad_aprendizaje where codigo IN (".implode(',',$aLista).");";
		$ua_borradas = implode(' , ',$aLista);
		}
		
		$borrado = mysql_query($sQuery, $conectar);
				
	if($borrado)
		echo ("Se han borrado satisfactoriamente las unidades<br><br> $ua_borradas");

	mysql_close($conectar);
	?>
    <p><input type="button" onClick="document.location='baja_ua.php'"  value="&lt;&lt; Regresar a la Baja de Unidades de Aprendizaje"></p>
  </div>
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
