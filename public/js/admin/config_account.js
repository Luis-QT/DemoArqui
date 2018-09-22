$(document).ready(function() {
  $('#confirmPassword').on('keyup',function(){
      var a = $(this).val();
      var b = $('#newPassword').val();
      if(a!=b){
          $('#btnCambiar').attr("disabled", true);
      }else{
          $('#btnCambiar').attr("disabled", false);
      }
  });
  $('#newPassword').on('keyup',function(){
      var a = $(this).val();
      var b = $('#confirmPassword').val();

      if(a.length<6){
          $(this).siblings('.help-block').html('<ul class="list-unstyled"><li>Mínimo 6 carácteres</li></ul>');
      }else{
          $(this).siblings('.help-block').html('');
      }
      if(a!=b){
          $('#btnCambiar').attr("disabled", true);
      }else{
          $('#btnCambiar').attr("disabled", false);
      }
  });
  $('#oldPassword').on('keyup',function(){
      $(this).parent().removeClass('has-error');
      $(this).siblings('.help-block').html('');
  });
  $('#btnCambiar').on('click',function(){
      $id = $(this).data('id');
      $.ajax({
       url: 'account/updatePassword',
       type:'post',
       data:{_token : $('#token').val(),
             oldPassword : $('#oldPassword').val(),
             newPassword : $('#newPassword').val(),
       },
       success: function(data)
       { 
         var obj =  JSON.parse(data);
         if(obj.caso == "1"){
            $('#oldPassword').parent().addClass('has-error');
            $('#oldPassword').siblings('.help-block').html('<ul class="list-unstyled"><li>Contraseña incorrecta</li></ul>');
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
               location.reload();
            });
          }
        }
    });
  });
});