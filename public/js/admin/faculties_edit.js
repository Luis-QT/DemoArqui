$(document).ready(function() {
 $(".btnEditarFacultad").on('click',function(event) {
  	if($('#edit_name').val() != ""){
      	$.ajax({
           url: 'faculties/update',
           type:'post',
           data:{
           		_token : $('#token').val(),
           		id: $('#id').val(),
           		name: $('#edit_name').val(),
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
                	console.log("Facultad creada");
                    location.reload();
                });
             }
           }
        });
    }
  });
});