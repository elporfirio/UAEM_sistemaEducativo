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
    <form action="registro_profesor.php" method="post" name="formaltas" id="formaltas">
      <h1>Ingresa los Datos requeridos</h1>
       <p class="Estilo1">Ingresa todos los datos requerido por el formulario y haz &quot;click&quot; en el boton &quot;Dar de Alta&quot;</p>
      <p>
    <label>Curp:
      <input name="curp" type="text" id="curp" size="16" />
      </label>
      </p>
      <p>
        <label>
          Nombre:
          <input name="nombre" type="text" id="nombre" size="15" />
        </label>
      </p>
      <p>
        <label>Apellido Paterno:
          <input name="apellido_p" type="text" id="apellido_p" size="15" />
        </label>
        <label>Apellido Materno:
          <input name="apellido_m" type="text" id="apellido_m" size="15" />
        </label>
      </p>
      <p>Fecha de Nacimiento: 
    <label>
    <select name="dia" id="dia">
      <option value="null" selected="selected">dia</option>
      <option value="01">1</option>
      <option value="02">2</option>
      <option value="03">3</option>
      <option value="04">4</option>
      <option value="05">5</option>
      <option value="06">6</option>
      <option value="07">7</option>
      <option value="08">8</option>
      <option value="09">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    </label>
    <label>
    <select name="mes" id="mes">
      <option value="null" selected="selected">mes</option>
      <option value="01">enero</option>
      <option value="02">febrero</option>
      <option value="03">marzo</option>
      <option value="04">abril</option>
      <option value="05">mayo</option>
      <option value="06">junio</option>
      <option value="07">julio</option>
      <option value="08">agosto</option>
      <option value="09">septiembre</option>
      <option value="10">octubre</option>
      <option value="11">noviembre</option>
      <option value="12">diciembre</option>
    </select>
    </label>
    <label>
    <select name="ano" id="ano">
   		<option value="null" selected="selected">año</option>
   		<?php
		
		$fecha_hoy=getdate();
		$ano_actual = $fecha_hoy['year'];

   		for ($i = ($ano_actual - 100); $i<=$ano_actual;$i ++)
		{
   		echo("<option value='$i'>$i</option>");
		}
		?>
    </select>
    </label>
  </p>
      <p>Sexo:</p>
      <p>
    <label>
    <input name="sexo" type="radio" id="Sexo_0" value="m" checked="checked" />
    Masculino    </label>
    <br />
    <label>
    <input name="sexo" type="radio" id="Sexo_1" value="f" />
    Femenino</label>
  </p>
  <p>
    <label>Estado Civl:
    <select name="estado_civil" id="estado_civil">
      <option value="null">selecciona una</option>
      <option value="soltero">Solter@</option>
      <option value="casado">Casad@</option>
      <option value="unido">Union Libre</option>
    </select>
    </label>
  </p>
  <p>
    <label>Profesión:
    <select name="profesion" id="profesion">
      <option value="null" selected="selected">seleccione una</option>
      <option value="Admon. Empresas">Admon. Empresas</option>
      <option value="Cinecias de la Comunicación">Ciencias de la Comunicación</option>
      <option value="Derecho">Derecho</option>
      <option value="Diseño Grafico">Diseño Grafico</option>
      <option value="Educacion Artistica">Educacion Artistica</option>
      <option value="Ingeniero Civil">Ingeniero Civil</option>
      <option value="Quimica">Quimica</option>
      <option value="Informatica">Informática</option>
    </select>
</label>
  </p>
  <p>
    <label>No. de Cedula:
      <input name="cedula" type="text" id="cedula" size="20" />
      </label>
  </p>
  <p>
    <label>Correo Electronico:
    <input name="mail" type="text" id="mail" size="20" />
    </label>
  @ 
  <label>
  <select name="mail_company" id="mail_company">
    <option value="null">selecciona una</option>
    <option value="hotmail.com">hotmail.com</option>
    <option value="gmail.com">gmail.com</option>
    <option value="yahoo.com">yahoo.com</option>
  </select>
  </label>
  </p>
  <p>    
    <label>No. de Movil:
      <input name="movil" type="text" id="movil" size="14" />
      </label>
  </p>
    <label>
      <input type="button" name="enviar" value="Dar de Alta" onclick="verificar()"/> 
      <input type="reset" name="resetear" id="resetear" value="Borrar Datos Formulario" />
    </label>
    </form>
  </div>
  
  <div id="footer">
 <img src="../../imagenes/back_footer.png" /> </div>
</div>
</div>
</body>
</html>
