
//Esta funcion hace muchas peticiones al servidor
function checkRepetField(classTab,urlRoute,input){
  classTab.on('keyup',input,function(){
    $.ajax({
       url: urlRoute,
       type:'post',
       data:{_token : $('#tokenUser').val(),
       value: input.val(),
       },
       success: function(data)
       {
         var obj =  JSON.parse(data);
         if(obj.valida == "1"){
            input.parent().addClass('has-error');
            input.siblings('.help-block').html(obj.html);
          }
       },
    });
  });
}
function Devalidate(tab,input){
  // Cambio de validación
  tab.on('keyup',input, function() {
    $(this).parent().removeClass('has-error');
    $(this).siblings('.help-block').html('');
  });

}
//Esta funcion es más eficiente al hacer una sola peticion para comparar si el campo es repetido
function checkRepetFieldOnBlur(urlRoute,input){
  input.blur(function() {
    $.ajax({
       url: urlRoute,
       type:'post',
       data:{_token : $('#tokenUser').val(),
       value: input.val(),
       },
       success: function(data)
       {
         var obj =  JSON.parse(data);
         if(obj.valida == "1"){
            input.parent().addClass('has-error');
            input.siblings('.help-block').html(obj.html);
            input.focus();
          }
       },
    });
  });
}
