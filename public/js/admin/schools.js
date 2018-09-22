$(document).ready(function() {
  $(".btnCrearEscuela").on('click',function(event) {
  	if($('#new_name').val() != ""){
  		$.ajax({
           url: 'schools/store',
           type:'post',
           data:{
           		_token : $('#token').val(),
           		name: $('#new_name').val(),
           		facultyId: $('#new_facultyId').val(),
           },
           success: function(data)
           {
             var obj =  JSON.parse(data);
             if(obj.caso == '1'){
             	swal({
                  title: obj.titulo,
                  text: obj.texto,
                  type: "error",
                });
             }else{
             	swal({
                  title: obj.titulo,
                  text: obj.texto,
                  type: "success",
                },function(){
                	console.log("Escuela creada");
                    location.reload();
                });
              }
            }
        });
  	}
  });
  $(".editarEscuela").on('click',function(event) {
    $name = $(this).data('name');
    $faculty = $(this).data('faculty');
    $id = $(this).data('id');

    if($id == 1 || $id == 2){
      swal({
          title: "Operación no Procede !!",
          text: "Por regla general , la escuela "+$name+" no puede editarse. \n Facultad : "+$faculty,
          type: "error",
      });
    }else{
      $url = '../plugins/images/busy.gif',
      $('div.block5').block({
            message: '<h4><img src="'+$url+'"/> Cargando...</h4>',
            css: {
                border: '1px solid #fff'
            }
        });
      $(".div-edit").load('schools/'+$id+'/edit');
    }
  });

 $('.eliminarEscuela').click(function(){
    $name = $(this).data('name');
    $faculty = $(this).data('faculty');
    $id = $(this).data('id');

    $.ajax({
       url: 'schools/'+$id+'/destroyValidation',
       type:'post',
       data:{_token : $('#token').val(),
       },
       success: function(data)
       {
          var obj =  JSON.parse(data);
          if(obj.caso == '1' || obj.caso == "2" || obj.caso == "3"){
            swal({
                title: obj.titulo,
                text: obj.texto,
                type: "error",
            });
          }
          if(obj.caso == '0'){
              swal({
                title: obj.titulo,
                text: obj.texto,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sí , Eliminar !",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: false
              }, function(isConfirm){
                if (isConfirm) {
                     $.ajax({
                       url: 'schools/'+$id+'/destroy',
                       type:'post',
                       data:{_token : $('#token').val(),
                       },
                       success: function(data)
                       {
                         var obj =  JSON.parse(data);
                         if(obj.caso == '1' || obj.caso == "2" || obj.caso == "3"){
                            swal({
                              title: obj.titulo,
                              text: obj.texto,
                              type: "error",
                            });
                          }else{
                            swal({
                              title: obj.titulo,
                              text: obj.texto,
                              type: "success",
                            },function(){
                              console.log("Eliminado");
                              location.reload();
                            });
                          }
                       },
                     });
                } else {
                    swal("Cancelado", "La operación fue cancelada", "error");
                }
            });
          }
       }
     });
 });
});
