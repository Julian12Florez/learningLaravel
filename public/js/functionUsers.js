function newUser(){
    save_method="add";
    $("input[name='_method']").val('POST');
    $('#modalUsuarios').modal();
}

function destroy(value) {
    swal({
        title: "Confirme antes de eliminar",
        text: "¿Desea Eliminar el Usuario?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'usersRoute/'+value,
                type:'POST',
                dataType:'JSON',
                data:{
                  '_method':$('#_method').val()
                }
            }).done((data)=>{
                console.log(data);
                if (data===true) {
                    swal('elemento eliminado','elemento eliminado exitosamente','success').then(()=>{
                        location.reload();
                    })
                }
            });
        } else {
          swal("El usuario no fue eliminado");
        }
      });
}

function edit(id){
    console.log(id)
    save_method="edit";
    $('input[name=_method]').val('PUT')
    $.ajax({
        url:'usersRoute/'+ id + '/edit',
        type:'GET',
        dataType:'JSON',
    }).done((data)=>{
        $('#id').val(data.id),
        $('#nombre').val(data.nombre),
        $('#email').val(data.email),
        $('#rol').val(data.rol),
        $('#modalUsuarios').modal()
    })
}

$("#addUsers").click(function(){
    id=$('#id').val()
    if (save_method=="add") {
        url = "usersRoute";
    }else if(save_method=="edit"){
        url = "usersRoute/"+id
    }
    $.ajax({
        url:url,
        type:"POST",
        dataType:"JSON",
        data:$('#modalUsuarios form').serialize()
    }).done(function(objData){
        $('#modalUsuarios').hide();
        if (objData.status==="trueInsert") {
            swal('registro exitoso','Usuario Insertado exitosamente','success').then(function(){
                location.reload();
            })
        }else if(objData.status==="trueUpdate"){
            swal('Actualizacion exitosa','Usuario Editado exitosamente','success').then(function(){
                location.reload();
            })
        }
    });
});



