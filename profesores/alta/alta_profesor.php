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
	if (document.formaltas.curp.value.length==0)  
   		{  
    	alert('Falta ingresar el Curp') 
    	document.formaltas.curp.focus()     
		}  
	else 
		{
		v1=0;
		if (document.formaltas.nombre.value.length==0) 
			{
			alert('Falta el Nombre del Empleado')
			document.formaltas.nombre.focus()
			}
		else
			{
			v2=0;
			if (document.formaltas.apellido_p.value.length==0) 
				{
				alert('Falta el apellido Paterno')
				document.formaltas.apellido_p.focus()
				}
			else
				{
				v3=0;
				if (document.formaltas.apellido_m.value.length==0) 
					{
					alert('Falta el apellido Materno')
					document.formaltas.apellido_m.focus()
					}
				else
					{
					v4=0;
					if(document.formaltas.dia.value=='null')
						{
						alert('Falta elegir el dia de Nacimiento')
						document.formaltas.dia.focus()
						}
					else
						{
						v5=0;
						if(document.formaltas.mes.value=='null')
							{
							alert('Falta elegir el mes de Nacimiento')
							document.formaltas.mes.focus()
							}
						else
							{
							v6=0;
							if(document.formaltas.ano.value=='null')
								{
								alert('Falta elegir el año de Nacimiento')
								document.formaltas.ano.focus()
								}
							else
								{
								v7=0;
								if(document.formaltas.estado_civil.value=='null')
									{
									alert('Falta el estado Civil')
									document.formaltas.estado_civil.value.focus()
									} 
								else
									{
									v8=0;
									if(document.formaltas.profesion.value=='null')
										{
										alert('Falta elegir una Profesion')
										document.formaltas.profesion.value.focus()
										} 
									else
										{
										v9=0;
										if(document.formaltas.cedula.value.length==0)
											{
											alert('Falta ingresar la Cedula')
											document.formaltas.cedula.value.focus()
											} 
										else
											{
											v10=0;
											if(document.formaltas.mail.value.length<=4)
												{
												alert('Falta un Correo Electronico valido')
												document.formaltas.mail.focus()
												}
											else
												{
												v11=0;
												if(document.formaltas.mail_company.value=="null")
													{
													alert('Falta elegir una compañia de Servicio de Correo')
													document.formaltas.mail_company.focus()
													}
												else
													{
													v12=0;
													if(document.formaltas.movil.value.length==0)
														{
														alert('Falta ingresar el numero telefono')
														document.formaltas.movil.focus()
														}
													else
														{
														v13=0;
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}					
   
//Luego de la verificacion hacemos el envio del formulario  
  	if(v1==0 && v2==0 && v3==0 && v4==0 && v5==0 && v6==0 && v7==0 && v8==0  && v9==0 && v10==0  && v11==0 && v12==0)  
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
      			<li class="seccion" style="background:url(../../imagenes/alta_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/alta/alta_ua.php">alta</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/baja_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/baja/baja_ua.php">baja</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/consultar_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/consultas/consultar_ua.php">consultar</a></li>
   			  <li class="seccion" style="background:url(../../imagenes/modificar_ua.png) bottom left no-repeat;"><a href="../../unidad_aprendizaje/modificar/modificar_ua.php">modificar</a></li>
   			 </ul></p>
  		</div>
<div id="fondo_contenido">
  <div id="elcontenido"> 
  </div>
  
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
