$(document).ready(function() {
  //Almacenando datos del input a verificar
  var inputNameUser = $('#inputNameUser');
  var inputLastNameUser = $('#inputLastNameUser');
  var inputCodeUser = $('#inputCodeUser');
  var inputInsEmailUser = $('#inputInsEmailUser');
  var inputDniUser = $('#inputDniUser');

  //Almacenando clases del Tab
  var classSttabsUser = $('.sttabs-user');
  var modalInformation = $('#show-information');
  var urlImg =  $('#urlImg');
  //Validando datos
  validateThisOnBlur();

  //Obteniendo formData - formulario registrar usuario
  var formData = new FormData('#formNewUser');
  $("#btnCrearUsuario").on('click',function(event) {
  	if(inputNameUser.val()!="" && inputLastNameUser.val()!="" && inputInsEmailUser.val()!="" && inputDniUser.val()!=""){

      formData.append('_token',$('#tokenUser').val());
       //Enviando datos del usuarios -> Específicos
      formData.append('name',inputNameUser.val());
      formData.append('lastName',inputLastNameUser.val());
      formData.append('code',inputCodeUser.val());
      formData.append('instEmail',inputInsEmailUser.val());
      formData.append('dni',inputDniUser.val());
      formData.append('userType_id',$('#inputTypeUser').val());
      formData.append('school_id',$('#inputSchoolUser').val());
      //Enviando datos del usuarios -> Generales
      formData.append('phone',$('#inputPhoneUser').val());
      formData.append('cellphone',$('#inputCellPhoneUser').val());
      formData.append('personalEmail',$('#inputPersonalEmailUser').val());
      formData.append('address',$('#inputAddressUser').val());
      formData.append('description',$('#inputDescriptionUser').val());
      formData.append('urlImg',urlImg[0].files[0]);


      $.ajax({
           url: 'users/store',
           type:'post',
           data: formData,
          processData: false,
          contentType: false,
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
                	console.log("Usuario creada");
                  //Cerrar el modal
                  //Recargar solo la tabla
                    location.reload();
                });
              }
            }
        });
  	}else{
      swal({
          title: "Error al registrar el Usuario",
          text: "Revise si hay campos vacíos o repetidos",
          type: "error",
        });
    }


  });
  $(".editUser").on('click',function(event) {

    $id = $(this).data('id');

    if($id == 1){
      swal({
          title: "Operación no Procede !!",
          text: "Por regla general , no se puede editar al jefe de biblioteca",
          type: "error",
      });
    }else{
      $(".div-edit").load('users/'+$id+'/edit',function(){
        $('#edit-user-modal').modal({show:true});
      });
    }
  });
  $('.deleteUser').click(function(){

    $id = $(this).data('id');
    if ($id == 1) {
      swal({
          title: "Operación no Procede !!",
          text: "Por regla general, no puede eliminar al jefe de biblioteca",
          type: "error",
      });
    }else{

        $.ajax({
           url: 'users/'+$id+'/destroyValidation',
           type:'post',
           data:{_token : $('#tokenUser').val(),
           },
           success: function(data)
           {
              var obj =  JSON.parse(data);
              if(obj.caso == '1' || obj.caso == "2" || obj.caso == "3" || obj.caso == "4"){
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
                           url: 'users/'+$id+'/destroy',
                           type:'post',
                           data:{_token : $('#tokenUser').val(),
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
      }
  });

  $('.showUserInformation').click(function(){
    $id = $(this).data('id');
      modalInformation.modal({show:'true'});
      modalInformation.load('users/'+$id+'/information');
      modalInformation.modal({show:'false'});
  });

  $('.btnCastigo').click(function(){
      $id = $(this).data('id');
      modalInformation.modal({show:'true'});
      modalInformation.load('punishments/'+$id);
  });


   function validateThisOnBlur(){
     checkRepetFieldOnBlur("users/codeValidation",inputCodeUser);
     checkRepetFieldOnBlur("users/dniValidation",inputDniUser);
     checkRepetFieldOnBlur("users/instEmailValidation",inputInsEmailUser);
   }

   Devalidate(classSttabsUser,'input[data-toggle="validator"]');


});
