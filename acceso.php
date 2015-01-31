<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Acceso Restringido a la página!!!</title>
<style type="text/css" media="screen">
#elpassword {
	position: relative;
	top: 90px;
}
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="principal">
  <div id="elpassword">
    <form id="form1" name="form1" method="post" action="verificar_acceso.php" class="niceform">
      <h1>Sitio Restringido</h1>
      <p>por favor ingresa tu clave de acceso </p>
      <p>
        <label>
        <input name="contrasena" type="password" id="contrasena" value="uaem" size="15" />
        </label>     
        </p>
      <p>
        <label>
        <input type="submit" name="enviar" id="enviar" value="Acceder al Sitio" />
        </label>
      </p>
    </form>
  
  </div>
</div>
</body>
</html>
