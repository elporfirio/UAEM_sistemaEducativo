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

$Resultado=mysqli_query($conectar,"SELECT * FROM profesor LIMIT $RegistrosAEmpezar, $RegistrosAMostrar");

$color = 0;
echo ("<hr>");
if($Resultado instanceof mysqli_result){
	while($MostrarFila=mysqli_fetch_array($Resultado))
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
		echo ("<div id=\"formulario".$MostrarFila['curp']."\" class=\"$casilla\"><br>");
		echo ("Curp: <strong>".$MostrarFila['curp']."</strong><br>");
		echo ("Nombre: <strong>".$MostrarFila['nombre']."</strong>");
		echo ("&nbsp;&nbsp;<strong>".$MostrarFila['apellido_p']."&nbsp;&nbsp;".$MostrarFila['apellido_m']."</strong><br>");
		echo ("Fecha de Nacimiento: <strong>".$MostrarFila['fecha_nacimiento']."</strong>&nbsp;&nbsp;Edad: <strong>".$MostrarFila['edad']."&nbsp;&nbsp;</strong>Sexo:<strong>".$MostrarFila['sexo']."</strong><br>");
		echo ("Estado Civil: <strong>".$MostrarFila['estado_civil']."</Strong>&nbsp;&nbsp;Profesion: <strong>".$MostrarFila['profesion']."</strong><hr size=\"1\" color=\"white\">");
		echo ("No. de Cedula: <strong>".$MostrarFila['cedula']."</strong><br>");
		echo ("Correo Electronico: <strong>".$MostrarFila['mail']."</strong>&nbsp;&nbsp;&nbsp;Telefono: <strong>".$MostrarFila['movil']."</strong><br><br>");
		echo ("<label><input type=\"button\" value=\"Modificar Datos\" onclick=\"pedirDatos('".$MostrarFila['curp']."')\"/></label><br><br></div>");
		echo ("<div id=\"resultado".$MostrarFila['curp']."\"></div>");
	}
	echo ("<hr>");
}
 //******--------determinar las páginas---------******//

$profesores = mysqli_query($conectar,"SELECT * FROM profesor");
if($profesores instanceof mysqli_result){
	$NroRegistros=mysqli_num_rows($profesores);
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
 	echo ("<a onclick=\"Pagina('$PagAnt')\"> << </a> ");
 	echo ("<strong><i>Pagina ".$PagAct."/".$PagUlt."</i></strong>");
 
 if($PagAct<$PagUlt)  
 	echo ("<a onclick=\"Pagina('$PagSig')\"> >> </a> ");
?>
