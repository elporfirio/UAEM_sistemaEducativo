<?php

//Configuracion de la conexion a base de datos
include("../../conectar.php");

//consulta los datos del empleado por su id
$idemp=$_POST['idemp'];

$sql=mysqli_query($conectar,"SELECT * FROM profesor WHERE curp=$idemp");

$row = mysqli_fetch_array($sql);

//valores de las consultas
$curp = $row['curp'];
$nombre = $row['nombre'];
$apellido_p = $row['apellido_p'];
$apellido_m = $row['apellido_m'];
$sexo= $row['sexo'];
$estado_civil = $row['estado_civil'];
$profesion = $row['profesion'];
$cedula = $row['cedula'];
$movil= $row['movil'];


$mail = explode("@","".$row['mail']."");



$fecha_nacimiento = $row['fecha_nacimiento'];

list($ano,$mes,$dia) = explode("-",$fecha_nacimiento);

?>

<!--muestra los datos consultados en los campos del formulario -->

 <form name="frm_profesor" action="" onsubmit="enviarDatos(<?php echo $curp; ?>); return false">
      <h1>Ingresa los Datos requeridos</h1>
       <p class="Estilo1">Ingresa todos los datos requerido por el formulario y haz &quot;click&quot; en el boton &quot;Dar de Alta&quot;</p>
      <p>
    <label>Curp: <strong><?php echo $curp; ?></strong>
      <input name="curp" type="text" id="curp" size="16" value="<?php echo $curp; ?>" />
      </label>
      </p>
      <p>
        <label>
          Nombre:
          <input name="nombre" type="text" id="nombre" size="15" value="<?php echo $nombre; ?>" />
        </label>
     </p>
      <p>
        <label>Apellido Paterno:
          <input name="apellido_p" type="text" id="apellido_p" size="15" value="<?php echo $apellido_p; ?>" />
        </label>
        <label>Apellido Materno:
          <input name="apellido_m" type="text" id="apellido_m" size="15" value="<?php echo $apellido_m; ?>" />
        </label>
      </p>
      <p>Fecha de Nacimiento: 
    <label>
    <select name="dia" id="dia">
      <option value="<?php echo $dia; ?>" selected="selected"><?php echo $dia; ?></option>
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
      <option value="<?php echo $mes; ?>" selected="selected"><?php echo $mes; ?></option>
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
   		<option value="<?php echo $ano; ?>" selected="selected"><?php echo $ano; ?></option>
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
    <input name="sexo" type="radio" id="Sexo_0" value="masculino" <?php if($sexo == "masculino") echo ("checked=\"checked\"");?>/>
    Masculino    </label>
    <br />
    <label>
    <input name="sexo" type="radio" id="Sexo_1" value="femenino" <?php if($sexo == "femenino") echo ("checked=\"checked\""); ?>/>
    Femenino</label>
  </p>
  <p>
    <label>Estado Civl:
    <select name="estado_civil" id="estado_civil">
      <option value="<?php echo $estado_civil; ?>"><?php echo $estado_civil; ?></option>
      <option value="soltero">Solter@</option>
      <option value="casado">Casad@</option>
      <option value="unido">Union Libre</option>
    </select>
    </label>
  </p>
  <p>
    <label>Profesi�n:
    <select name="profesion" id="profesion">
      <option value="<?php echo $profesion; ?>" selected="selected"><?php echo $profesion; ?></option>
      <option value="Admon. Empresas">Admon. Empresas</option>
      <option value="Cinecias de la Comunicaci�n">Ciencias de la Comunicaci�n</option>
      <option value="Derecho">Derecho</option>
      <option value="Dise�o Grafico">Dise�o Grafico</option>
      <option value="Educacion Artistica">Educacion Artistica</option>
      <option value="Ingeniero Civil">Ingeniero Civil</option>
      <option value="Quimica">Quimica</option>
      <option value="Informatica">Inform�tica</option>
    </select>
</label>
  </p>
  <p>
    <label>No. de Cedula:
      <input name="cedula" type="text" id="cedula" size="20" value="<?php echo $cedula; ?>"/>
      </label>
  </p>
  <p>
    <label>Correo Electronico:
    <input name="mail" type="text" id="mail" size="20" value="<?php echo $mail[0]; ?>"/>
    </label>
  @ 
  <label>
  <select name="mail_company" id="mail_company">
    <option value="<?php echo $mail[1]; ?>"><?php echo $mail[1]; ?></option>
    <option value="hotmail.com">hotmail.com</option>
    <option value="gmail.com">gmail.com</option>
    <option value="yahoo.com">yahoo.com</option>
  </select>
  </label>
  </p>
  <p>    
    <label>No. de Movil:
      <input name="movil" type="text" id="movil" size="14" value="<?php echo $movil; ?>" />
      </label>
  </p> 
      <center><input type="submit" name="submit" value="Actualizar datos del Profesor"/></center>
          
        </p>
      </div>
</form>