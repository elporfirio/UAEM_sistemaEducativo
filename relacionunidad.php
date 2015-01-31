<!-- el toño es mi hijo y que xD -->


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>codigo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p>Curp del Profesor:
    <select name="curp" id="curp">
      
      <?php

$conexion=mysql_connect("localhost","root") or die ("probelmas en al conexion");

mysql_select_db("alta_profesor",$conexion) or die ("probelmas en la ocnexion ");

$registros= mysql_query("select curp from asignatura_ua",$conexion) or die ("probelmaas en el select".mysql_error());

while ($reg=mysql_fecth_array($registros))
	{
	echo ("<option value=\"".$reg['curp']."\">".$reg['curp']."</option>");
	}
?>
    </select>
    </p>
  <p>Codigo de la Materia:
    <select name="codigo" id="codigo">
      <?php

$conexion=mysql_connect("localhost","root") or die ("probelmas en al conexion");

mysql_select_db("alta_profesor",$conexion) or die ("probelmas en la ocnexion ");
  
$registros= mysql_query("select codigo from unidad_aprendizaje",$conexion) or die ("probelmaas en el select".mysql_error());
 
while ($reg=mysql_fecth_array($registros))
	{
  	echo ("<option value=\"".$reg['codigo']."\">".$reg['codigo']."</option>");
  	}
?>
        </select>
    
    
  </p>
  <p>creditos:
    <label></label>
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
