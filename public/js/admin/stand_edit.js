$(document).ready(function() {
 $("#btnEditarStand").on('click',function(event) {
   //Verificar que los datos obligatorios no sean vacíos
   var editNameStand = $('#editNameStand').val();
   var editLevelStand = $('#editLevelStand').val();
   var editStateStand = $('#editStateStand').val();
   var editTypeStand = $('#editTypeStand').val();
  	if($(editNameStand != "" &&  editLevelStand!= "")){
        $id = $(this).data('id');
      	$.ajax({
           url: 'stands/update',
           type:'post',
           data:{
           		_token : $('#tokenStand').val(),
           		id: $id,
              name: editNameStand,
              level: editLevelStand,
              state: editStateStand,
              type: editTypeStand,
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
                	console.log("Stand guardado");
                    location.reload();
                });
             }
           }
        });
    }
  });
});
