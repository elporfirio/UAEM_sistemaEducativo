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


function enviarDatos(curp){
	//donde se mostrará lo resultados
	
	divResultado = document.getElementById("resultado"+curp);
	divFormulario = document.getElementById("formulario"+curp);
	
	//valores de los inputs
	
	cur=document.frm_profesor.curp.value;
	nom=document.frm_profesor.nombre.value;
	app=document.frm_profesor.apellido_p.value;
	apm=document.frm_profesor.apellido_m.value;
	ano=document.frm_profesor.ano.value;
	mes=document.frm_profesor.mes.value;
	dia=document.frm_profesor.dia.value;
	sex=document.frm_profesor.sexo.value;
	edo=document.frm_profesor.estado_civil.value;
	pro=document.frm_profesor.profesion.value;
	ced=document.frm_profesor.cedula.value;
	mai=document.frm_profesor.mail.value;
	mac=document.frm_profesor.mail_company.value;
	mov=document.frm_profesor.movil.value;
	
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
	ajax.send("curp="+cur+"&nombre="+nom+"&apellido_p="+app+"&apellido_m="+apm+"&ano="+ano+"&mes="+mes+"&dia="+dia+"&sexo="+sex+"&estado_civil="+edo+"&profesion="+pro+"&cedula="+ced+"&mail="+mai+"&mail_company="+mac+"&movil="+movil)
}


function pedirDatos(curp){
	
	//donde se mostrará el formulario con los datos
	divFormulario = document.getElementById("formulario"+curp);
	
	
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
	ajax.send("idemp="+curp)
	
	
}