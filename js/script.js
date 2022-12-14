// validar 300 caracteres

//educación
function validacioncaracteres(){
    var maxTamano = 300;
    var texto = document.getElementById("contEducacion").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("caracteresMed").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("caracteresMed").innerHTML = charRemain+' restantes';
    }
}
//salud
function validacioncaracteresSalud(){
    var maxTamano = 300;
    var texto = document.getElementById("contSalud").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_salud").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_salud").innerHTML = charRemain+' restantes';
    }
}
//cultura
function validacioncaracteresCultura(){
    var maxTamano = 300;
    var texto = document.getElementById("contCultura").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_cultura").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_cultura").innerHTML = charRemain+' restantes';
    }
}
//participación
function validacioncaracteresParticipacion(){
    var maxTamano = 300;
    var texto = document.getElementById("contParticipacion").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_participacion").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_participacion").innerHTML = charRemain+' restantes';
    }
}
//medio ambiente
function validacioncaracteresMAmbiente(){
    var maxTamano = 300;
    var texto = document.getElementById("contMAmbiente").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_mambiente").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_mambiente").innerHTML = charRemain+' restantes';
    }
}
//inclusión
function validacioncaracteresInclusion(){
    var maxTamano = 300;
    var texto = document.getElementById("contInclusion").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_inclusion").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_inclusion").innerHTML = charRemain+' restantes';
    }
}
//emprendimiento
function validacioncaracteresEmprendimiento(){
    var maxTamano = 300;
    var texto = document.getElementById("contEmprendimiento").value;
    
    var text = texto.length;
    var charRemain = (maxTamano - text);

    if(charRemain < 0){
        document.getElementById("contador_emprendimiento").innerHTML = '<span class="text-danger">Has excedido el límite de <strong>'+maxTamano+' caracteres</strong></span>';
    }else{
        document.getElementById("contador_emprendimiento").innerHTML = charRemain+' restantes';
    }
}

//   Bloqueo de residencia

  function EnableDisabled(){
    checkBox = document.getElementById("checkExtranjero");
    
    if(checkBox.checked == true){
        document.getElementById("extranjero").disabled = false;
        document.getElementById("extranjero").required = true;
        document.getElementById("extranjero").setAttribute("name","procedencia");


        document.getElementById("municipio").disabled = true;
        document.getElementById("municipio").required = false;
        document.getElementById("municipio").removeAttribute("name");

    }
    else if(checkBox.checked == false){
        document.getElementById("extranjero").disabled = true;
        document.getElementById("extranjero").required = false;
        document.getElementById("extranjero").removeAttribute("name");

        document.getElementById("municipio").disabled = false;
        document.getElementById("municipio").required = true;
        document.getElementById("municipio").setAttribute("name","procedencia");



    }
  }

  function validarSubmit(){
    var texto1 = document.getElementById("contEducacion").value;
    var texto2 = document.getElementById("contSalud").value;
    var texto3 = document.getElementById("contCultura").value;
    var texto4 = document.getElementById("contParticipacion").value;
    var texto5 = document.getElementById("contMAmbiente").value;
    var texto6 = document.getElementById("contInclusion").value;
    var texto7 = document.getElementById("contEmprendimiento").value;

    var sumaSubmit = texto1 + texto2 + texto3 + texto4 + texto5 + texto6 + texto7;

    if (sumaSubmit == ""){
        document.getElementById("buttonSubmit").disabled = true;
        console.log(sumaSubmit);
        // alert(sumaSubmit);
    }
    else{
        document.getElementById("buttonSubmit").disabled = false;
        console.log('Válido');
        // alert(sumaSubmit);
    }
  }

//   video on load

$(function validarSubmit2() {
    $('#myModal').modal('show');
});

// transiciones

var i = 0;
var images = [];
var slideTime = 3000; // 3 seconds

images[0] = 'assets/brand/img/jovenes/jov_01.jpeg';
images[1] = 'assets/brand/img/jovenes/jov_02.jpeg';
images[2] = 'assets/brand/img/jovenes/jov_03.jpeg';

function changePicture() {
    document.getElementById("back").style.backgroundImage = "url(" + images[i] + ")";

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture;