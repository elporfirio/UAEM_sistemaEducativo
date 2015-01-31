<?php

include("../../conectar.php");

$RegistrosAMostrar=4;

//estos valores los recibo por GET
if(isset($_GET['pag']))
	{
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
  	$PagAct=$_GET['pag'];
  
//caso contrario los iniciamos
 	}
else
	{
  	$RegistrosAEmpezar=0;
  	$PagAct=1;
	}

$Resultado=mysql_query("SELECT * FROM unidad_aprendizaje LIMIT $RegistrosAEmpezar, $RegistrosAMostrar",$conectar);

$color = 0;
echo ("<hr>");
if(is_resource($Resultado)){
	while($MostrarFila=mysql_fetch_array($Resultado))
	{
		if ($color == 0)
		{
			$casilla = "casilla_borrado";
			$color = 1;
		}
		else
		{
			$casilla = "casilla_borrado_par";
			$color = 0;
		}
		echo ("<div class=\"$casilla\"><br>");
		echo ("Codigo de Materia: <strong>".$MostrarFila['codigo']."</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
		echo ("Creditos: <strong>".$MostrarFila['creditos']."</strong><br>");
		echo ("Nombre: <strong>".$MostrarFila['unidad_aprendizaje']."</strong><br>");
		echo ("Plan de Estudio: <strong>".$MostrarFila['plan_estudio']."</strong><br>");
		echo ("Observaciones: <i>".$MostrarFila['observaciones']."</i><br><br></div>");
	}
}


 //******--------determinar las páginas---------******//

$unidadesAprendizaje = mysql_query("SELECT * FROM unidad_aprendizaje",$conectar);
if(is_resource($unidadesAprendizaje)){
	$NroRegistros=mysql_num_rows($unidadesAprendizaje);
}

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

 //verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
 
 // si hay residuo usamos funcion floor para que me
 // devuelva la parte entera, SIN REDONDEAR, y le sumamos
 // una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;
 
 //desplazamiento
 
 if($PagAct>1) 
 	echo ("<a style=\"cursor: hand\" onclick=\"Pagina('$PagAnt')\"> << </a> ");
 	echo ("<strong><i>Pagina ".$PagAct."/".$PagUlt."</i></strong>");
 
 if($PagAct<$PagUlt)  
 	echo ("<a style=\"cursor: hand\" onclick=\"Pagina('$PagSig')\"> >> </a> ");
	?>
