$(document).ready(function() {
  /*
    Falta cambiar location.reload para que no recargue la pagina, solo la tabla
  */
  $("#btnCrearStand").on('click',function(event) {
    //Verificar que los datos obligatorios no sean vacíos
    var inputNameStand = $('#inputNameStand').val();
    var inputLevelStand = $('#inputLevelStand').val();
    var inputStateStand = $('#inputStateStand').val();
    var inputTypeStand = $('#inputTypeStand').val();
  	if(inputNameStand != "" &&  inputLevelStand!= "" && inputStateStand != "" && inputTypeStand != ""){
      $.ajax({
           url: 'stands/store',
           type:'post',
           data:{
           		_token : $('#tokenStand').val(),
           		name: inputNameStand,
              level: inputLevelStand,
              state: inputStateStand,
              type: inputTypeStand,
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
                	console.log("Stand registrado exitosamente");
                  location.reload();
                });
              }
            }
        });
  	}else{
      swal({
          title: "Error al registrar el Stand",
          text: "Revise si hay campos vacíos o repetidos",
          type: "error",
        });
    }
  });
 $(".editarStand").on('click',function(event) {
   $id = $(this).data('id');
     $url = '../plugins/images/busy.gif',
     $('div.block5').block({
           message: '<h4><img src="'+$url+'"/> Cargando...</h4>',
           css: {
               border: '1px solid #fff'
           }
       });
     $(".div-edit").load('stands/'+$id+'/edit');

 });

$('.eliminarStand').click(function(){

   $name = $(this).data('name');
   $level = $(this).data('level');
   $state = $(this).data('state');
   $type = $(this).data('type');
   $id = $(this).data('id');
   $.ajax({
      url: 'stands/'+$id+'/destroyValidation',
      type:'post',
      data:{_token : $('#tokenStand').val(),
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
                      url: 'stands/'+$id+'/destroy',
                      type:'post',
                      data:{_token : $('#tokenStand').val(),
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
