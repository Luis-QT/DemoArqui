$(document).ready(function() {
  //Verificar que los datos obligatorios no sean vacíos
  var editNameUser = $('#editNameUser');
  var editLastNameUser = $('#editLastNameUser');
  var editInsEmailUser = $('#editInsEmailUser');
  var editDniUser = $('#editDniUser');

  //Almacenando los inputs
  var editTypeUser = $('#editTypeUser');
  var editSchoolUser = $('#editSchoolUser');
  var urlImg = $('#urlImgEdit');
  var editCodeUser = $('#editCodeUser');
  var editPersonalEmailUser = $('#editPersonalEmailUser');
  var editPhoneUser = $('#editPhoneUser');
  var editDniUser = $('#editDniUser');
  var editCellPhoneUser = $('#editCellPhoneUser');
  var editAddressUser = $('#editAddressUser');
  var editDescriptionUser = $('#editDescriptionUser');

  var classSttabsUser = $('.sttabs-user');

  validateThisOnBlur();
  //Obteniendo formData - formulario registrar usuario
  var formData = new FormData('#formEditUser');
  $("#btnEditarUsuario").on('click',function(event) {
  	if($(editNameUser.val()!="" && editLastNameUser.val()!="" && editInsEmailUser.val()!="" && editDniUser.val()!="")){
      $id = $(this).data('id');
      formData.append('_token',$('#tokenUser').val());
    
      console.log(urlImg[0].files[0]);
      
       //Enviando datos del usuarios -> Específicos
      formData.append('id',$id);
      formData.append('name',editNameUser.val());
      formData.append('lastName',editLastNameUser.val());
      formData.append('code',editCodeUser.val());
      formData.append('instEmail',editInsEmailUser.val());
      formData.append('dni',editDniUser.val());
      formData.append('userType_id',editTypeUser.val());
      formData.append('school_id',editSchoolUser.val());
      //Enviando datos del usuarios -> Generales
      formData.append('phone',editPhoneUser.val());
      formData.append('cellphone',editCellPhoneUser.val());
      formData.append('personalEmail',editPersonalEmailUser.val());
      formData.append('address',editAddressUser.val());
      formData.append('description',editDescriptionUser.val());
      formData.append('urlImg',urlImg[0].files[0]);
        
      console.log(formData.getAll('urlImg'));
  

        $.ajax({
           url: 'users/update',
           type:'post',
           data:formData,
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
                	console.log("Usuario guardado");
                    location.reload();
                });
             }
           }
        });
    }
  });

  //Validando campos al editar
  function validateThisOnBlur(){
    checkRepetFieldOnBlur("users/codeValidation",editCodeUser);
    checkRepetFieldOnBlur("users/dniValidation",editDniUser);
    checkRepetFieldOnBlur("users/instEmailValidation",editInsEmailUser);
  }
  //Desvalidar
  Devalidate(classSttabsUser,'input[data-toggle="validator"]');


});
