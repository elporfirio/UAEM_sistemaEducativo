<?php

//Configuracion de la conexion a base de datos
include("../../conectar.php");

//consulta los datos del empleado por su id
$idemp=$_POST['codigo'];

$sql=mysqli_query($conectar,"SELECT * FROM unidad_aprendizaje WHERE codigo=$idemp");

$row = mysqli_fetch_array($sql);

//valores de las consultas
$codigo=$row['codigo'];
$unidad_aprendizaje=$row['unidad_aprendizaje'];
$creditos=$row['creditos'];
$plan_estudio=$row['plan_estudio'];
$observaciones=$row['observaciones'];

?>

<!--muestra los datos consultados en los campos del formulario -->

<form name="frm_materia" action="" onsubmit="enviarDatosmateria(<?php echo $codigo; ?>); return false">
  
  <div align="center">
        <table width="83%" border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td width="39%" height="240"><p>Codigo de Materia: <strong><?php echo $codigo; ?></strong>
                <br />
                <input name="codigo" type="hidden" id="codigo" maxlength="6" value="<?php echo $codigo; ?>" />
                </p>
                <p>Nombre de la Materia:<br />
                  <input name="unidad_aprendizaje" type="text" id="unidad_aprendizaje" maxlength="30" value="<?php echo $unidad_aprendizaje; ?>"/>
                </p>
                <p>No. de Creditos:<br />
                  <input name="creditos" type="text" id="creditos" maxlength="3" value="<?php echo $creditos; ?>" />
                </p>
                <p>Plan de Estudio:
                  <select name="plan_estudio" id="plan_estudio">
                    <option value="<?php echo $plan_estudio; ?>" selected="selected"><?php echo $plan_estudio; ?></option>
                    <option value="Rigido">Plan Rigido</option>
                    <option value="Flexible">Plan Flexible</option>
                   </select>
                </p>
              <p>&nbsp;</p>
              </td>
              <td width="61%"><p>Observaciones:</p>
                <p>
                  <textarea name="observaciones" cols="30" rows="5" wrap="virtual" id="observaciones"><?php echo $observaciones; ?></textarea>
                </p></td>
            </tr>
              </table>
        <p>
          <input type="submit" name="Enviar" id="enviar" value="Actualizar datos de la Unidad de Aprendizaje"/>
        </p>
      </div>
</form>