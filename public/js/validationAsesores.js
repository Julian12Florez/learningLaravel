
$(document).ready(function() {
   $('#formularioAsesores').validate({
       rules:{
           codigo:{
               required:true,
               minlength:3,
               number:true
           },
           nombre:{
               required:true,
               minlength:3,
               string:true
           }
       },
       messages:{
        codigo:{
               required:"El código debe ser obligatorio.",
               minlength:"El minimo de caracteres debe ser 3.",
               number:"el código solo debe contener números"
           },
        nombre:{
               required:"el campo nombre debe ser obligatorio",
               minlength:"El minimo de caracteres debe ser 3.",
               string:"el nombre solo debe contener numeros"
           },
       },
   });
});
