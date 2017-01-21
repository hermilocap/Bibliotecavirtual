function validate() {



//validacion de buscador
var txt = document.getElementById("search");
if(txt.value== "" || txt.value== null) {
alert("Campo obligatorio...");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}

//validacion de text
var txt = document.getElementById("nombre");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese su nombre");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}


var txt = document.getElementById("autor");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese el autor");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}


var txt = document.getElementById("editorial");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese el editorial");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}

/*Validación de que se haya elegido un elemento del select */
var ciudadElegida = true; 
indiceElegido = document.getElementById("categoria").selectedIndex;
if( indiceElegido == null || indiceElegido == 0 ) {
alert("Por favor, seleccione su categoria");
ciudadElegida = false;
} 

var txt = document.getElementById("descripcion");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese  la descripcion del libro");
txt.focus();
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}

var txt = document.getElementById("destacado");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese si el libro es destacado");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}


var txt = document.getElementById("imagen");
if(txt.value== "" || txt.value== null) {
alert("Por favor, ingrese la imagen");
txt.style.border = "2px solid red";
return false;
} else {
txt.style.border = "";
}




}

