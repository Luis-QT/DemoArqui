$(document).ready(function() {
 $(".btnEditarEscuela").on('click',function(event) {
  	if($('#edit_name').val() != ""){
      	$.ajax({
           url: 'schools/update',
           type:'post',
           data:{
           		_token : $('#token').val(),
           		id: '{{ $school->id }}',
           		name: $('#edit_name').val(),
           		facultyId: $('#edit_facultyId').val(),
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
});
