// validar 300 caracteres

// var Max_Length = 10;
// var length = $("#validacionCaracteres").val().length;
// if (length > Max_Length) {
//   $("#validacionCaracteres").after("<p style='color:red'>the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters</p>");
// }

// function validacionCaracteres(){
//     var MaxLength = 10;
//     var caracteres = document.getElementById("validacionCaracteres").value.length;
//     alert("validacionCaracteres");
//     if(MaxLength > caracteres){
//         document.getElementById("caracteresVal").innerHTML="<p style='color:red'>the max length of "+Max_Length + " characters is reached, you typed in  " + length + "characters</p>";
//     }
// }

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

$("#contEducacion").on('keypress', function() {
    var limit = 30;
    $("#contEducacion").attr('maxlength', limit);
    var init = $(this).val().length;
    
    if(init<limit){
      init++;
      $('#caracteres').text("Máximo 30 caracteres:" + init); 
    }
    
  });