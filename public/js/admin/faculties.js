$(document).ready(function() {
  $(".btnCrearFacultad").on('click',function(event) {
  	if($('#new_name').val() != ""){
  		$.ajax({
           url: 'faculties/store',
           type:'post',
           data:{
           		_token : $('#token').val(),
           		name: $('#new_name').val(),
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
                	  console.log("Facultad Creada");
                    location.reload();
                });
              }
            }
        });
  	}
  });
  $(".editarFacultad").on('click',function(event) {
    $name = $(this).data('name');
    $id = $(this).data('id');

    if($id == 1){
      swal({
          title: "Operación no Procede !!",
          text: "Por regla general , la facultad "+$name+" no puede editarse.",   
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
      $(".div-edit").load('faculties/'+$id+'/edit');
    }
  });

 $('.eliminarFacultad').click(function(){
    $name = $(this).data('name');
    $id = $(this).data('id');

    $.ajax({
       url: 'faculties/'+$id+'/destroyValidation',
       type:'post',
       data:{_token : $('#token').val(),
       },
       success: function(data)
       {  
          var obj =  JSON.parse(data);
          if(obj.caso == '1' || obj.caso == "2"){
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
                       url: 'faculties/'+$id+'/destroy',
                       type:'post',
                       data:{_token : $('#token').val(),
                       },
                       success: function(data)
                       {
                         var obj =  JSON.parse(data);
                         if(obj.caso == '1' || obj.caso == "2"){
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