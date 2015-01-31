function objetoAjax(){
 var xmlhttp=false;
  try{
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  }catch(e){
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   }catch(E){
    xmlhttp = false;
   }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
   xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function Pagina(nropagina){
 //donde se mostrará los registros
 divelcontenido = document.getElementById('consultas');
 
 ajax=objetoAjax();
 //uso del medoto GET
 //indicamos el archivo que realizará el proceso de paginar
 //junto con un valor que representa el nro de pagina
 ajax.open("GET", "paginador.php?pag="+nropagina);
 divelcontenido.innerHTML= '<img src="anim.gif">';
 ajax.onreadystatechange=function() {
  if (ajax.readyState==4) {
   //mostrar resultados en esta capa
   divelcontenido.innerHTML = ajax.responseText
  }
 }
 //como hacemos uso del metodo GET
 //colocamos null ya que enviamos 
 //el valor por la url ?pag=nropagina
 ajax.send(null)
}


function enviarDatosmateria(codigo){
	//donde se mostrará lo resultados
	
	divResultado = document.getElementById("resultado"+codigo);
	divFormulario = document.getElementById("formulario"+codigo);
	
	//valores de los inputs
	alert('aqui ya se hizo ajax');
	cod=document.frm_materia.codigo.value;
	uni=document.frm_materia.unidad_aprendizaje.value;
	cre=document.frm_materia.creditos.value;
	pla=document.frm_materia.plan_estudio.value;
	obs=document.frm_materia.observaciones.value;
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	
	//usando del medoto POST
	//archivo que realizará la operacion
	//actualizacion.php
	ajax.open("POST", "actualizacion.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar los nuevos registros en esta capa
			divResultado.innerHTML = ajax.responseText
			//mostrar un mensaje de actualizacion correcta
			divFormulario.innerHTML = "<center><p style=\"border:1px solid red; width:400px;\">La actualizaci&oacute;n se realiz&oacute; correctamente</p></center>";
		}
	}
	//muy importante este encabezado ya que hacemos uso de un formulario
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("codigo="+cod+"&unidad_aprendizaje="+uni+"&creditos="+cre+"&plan_estudio="+pla+"&observaciones="+obs)
}


function pedirDatos(codigo){
	
	//donde se mostrará el formulario con los datos
	divFormulario = document.getElementById("formulario"+codigo);
	
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	
	
	
	//uso del medotod GET
	ajax.open("POST", "consulta_codigo.php");
	
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			
			//mostrar resultados en esta capa
			divFormulario.innerHTML = ajax.responseText
			
			//mostrar el formulario
			divFormulario.style.display="block";
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("codigo="+codigo)
	
	
}