var contador = 0;
var fin_contador = 70; // Tiempo en en el que deseas que redireccione la funcion.
var iniciado = false;
function cuenta(){
	if(contador >= fin_contador){
		window.location.href = "taller1.html";
	}else{
		document.getElementById("contador").innerHTML  = "Comenzamos en " + fin_contador + " seg";
		fin_contador = fin_contador - 1;
	}
}

function ini(){ 
	cuenta();
	setInterval("cuenta()",1000);
}