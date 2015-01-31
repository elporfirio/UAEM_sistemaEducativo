<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>conexion al localhost</title>
</head>

<?php
	$servidor="localhost";
	$usuario="elporfirio";
	$clave="x21anshel";
	$conectar=mysql_connect ($servidor, $usuario, $clave);
	$basededatos="sistema_educativo";
	mysql_select_db ($basededatos, $conectar);
 ?>
<body>
</body>
</html>
