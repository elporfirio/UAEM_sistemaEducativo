<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>conexion al localhost</title>
</head>

<?php
	$servidor="localhost";
	$usuario="root";
	$clave="root";
    $basededatos="sistema_educativo";
	$conectar=mysqli_connect($servidor, $usuario, $clave, $basededatos);
 ?>
<body>
</body>
</html>
