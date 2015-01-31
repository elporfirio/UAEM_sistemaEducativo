<?php
$contrasena= $_POST['contrasena'];
if ($contrasena == "uaem")
	{
	header("location: bienvenida.php");
	exit;
	}
else
	{
	echo "NO TIENES AUTORIZACION A VER EL SITIO"; 
	}
?>