function newReference() {
    save_method="add";
    $('input[name=_method]').val('POST');
    $('#modalReferencia').modal('show');
}

// $(document).ready(function(){
    // function hola() {
//         alert();
//          $("#formReferences").validate({
//      rules:{
//         codigo:{
//             required:true,
//             minlength:3
//         },
//         referencia:{
//             required:true,
//             minlength:3,
//             string:true
//         },
//      },
//      messages:{
//             codigo:{
//                 required:'El código es requerido',
//                 minlength:'El minimo de caracteres para el código es 3'
//             },
//             referencia:{
//                 required:'La referencia es requerida',
//                 minlength:'El minimo de caracteres para la referencia es 3',
//                 string:'La referencia debe contener solo caracteres alfanumericos'
//             },
//      },
//      onkeyup: false,
//      onclick: false,
//      onfocusout: false
//  });
function addReferences(){

}

//         $.ajax({
//             url:"{{ route('references') }}",
//             type:'POST',
//             datatype:'JSON'
//         }).done(function(){

//         })
// }

// });





