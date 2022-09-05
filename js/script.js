// validar 300 caracteres

// var Max_Length = 10;
// var length = $("#validacionCaracteres").val().length;
// if (length > Max_Length) {
//   $("#validacionCaracteres").after("<p style='color:red'>the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters</p>");
// }

// function validacionCaracteres(){
//     var MaxLength = 10;
//     var caracteres = document.getElementById("contEducacion").value.length;
//     alert("contEducacion");
//     if(MaxLength > caracteres){
//         document.getElementById("caracteresMed").innerHTML="the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters";
//     }
// }

function validacionCaracteres(obj){
    var strLength = obj.value.length;
    var maxLength = obj.dataset.max;
    var charRemain = (maxLength - strLength);

    if(charRemain < 0){
        document.getElementById("caracteresMed").innerHTML = 'Has excedido el límite de '+maxLength+' caracteres';
    }else{
        document.getElementById("caracteresMed").innerHTML = charRemain+' restantes';
    }
}

// $('#mensaje_ayuda').text('20 carácteres restantes');
//   $('#validacionCaracteres').keydown(function () {
//       var max = 20;
//       var len = $(this).val().length;
//       if (len >= max) {
//           $('#mensaje_ayuda').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar          
//           $('#mensaje_ayuda').addClass('text-danger');
//           $('#validacionCaracteres').addClass('is-invalid');
//           $('#inputsubmit').addClass('disabled');    
//           document.getElementById('inputsubmit').disabled = true;                    
//       } 
//       else {
//           var ch = max - len;
//           $('#mensaje_ayuda').text(ch + ' carácteres restantes');
//           $('#mensaje_ayuda').removeClass('text-danger');            
//           $('#validacionCaracteres').removeClass('is-invalid');            
//           $('#inputsubmit').removeClass('disabled');
//           document.getElementById('inputsubmit').disabled = false;            
//       }
//   });  




// $("#contEducacion").on('input', function() {
//     var limit = 30;
//     $("#contEducacion").attr('maxlength', limit);
//     var init = $(this).val().length;
    
//     if(init<limit){
//       init++;
//       $('#caracteres').text("Máximo 30 caracteres:" + init); 
//     }
    
//   });

//   Bloqueo de residencia

  function EnableDisabled(){
    checkBox = document.getElementById("checkExtranjero");
    
    if(checkBox.checked == true){
        document.getElementById("extranjero").disabled = false;
        document.getElementById("municipio").disabled = true;

    }
    else if(checkBox.checked == false){
        document.getElementById("extranjero").disabled = true;
        document.getElementById("municipio").disabled = false;

    }
  }