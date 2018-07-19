function newReference() {
    save_method="add";
    $('input[name=_method]').val('POST');
    $('#modalReferencia form')[0].reset();
    $('#modalReferencia').modal('show');
}

$("#addReference").click(function () {
    id = $("#id").val();
    console.log(save_method);
    console.log(id);
     objData= $('#modalReferencia form').serialize();
    console.log(objData);
    if (save_method=="add") {
        url = "references";
    }
    else if(save_method=="edit") {
        url = "references/" + id;
    }
    $.ajax({
        url:url,
        type:"POST",
        dataType:"JSON",
        data:$('#modalReferencia form').serialize()
    }).done(function(data){
        console.log(data);
        $('#modalReferencia').hide();
        if(data.status==="trueInsert"){
            swal("Registro Exitoso",
            "el registro se realizo de manera exitosa",
            "success").then(function() {
                location.reload();
            });
        }else if(data.status==="trueUpdate"){
            swal("Actualización exitosa",
            "el registro fue modificado exitosamente",
            "success").then(function () {
                location.reload();
            })
        }else{
            alert("error")
        }
    })
});

function edit(id)
{
    console.log(id);
    save_method="edit";
    $('input[name=_method]').val('PUT')
    $('#modalReferencia form')[0].reset();
    $.ajax({
      url:"references/"+id+"/edit",
      dataType:"JSON",
      type:"GET",
    }).done(function(data){
        console.log(data)
        $('#id').val(data['idreferencias']),
        $('#codigo').val(data['codigo']),
        $('#referencia').val(data['nombre']),
        $('#modalReferencia').modal('show')
    })


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





