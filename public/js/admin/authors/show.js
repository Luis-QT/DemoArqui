$(document).ready(function() {
        $(".editar").on('click',function(event) {
          $id = $(this).data('id')
          $("#div-edit").html('<div class="box box-success box-solid"><div class="box-header with-border">'+
					'<h3 class="box-title">Editar</h3><div class="box-tools pull-right"><button type="button"'+
					' class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div>'+
					'<div class="box-body"></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>')
          $("#div-edit").load('{{ url("/admin/authors/") }}/' + $id + '/edit/0');
        });

        $('.eliminar').click(function(){
            $name = $(this).data('name');
            $id = $(this).data('id');

            $.ajax({
                   url: '{{url("/admin/authors/")}}/'+$id+'/canDestroy',
                   type:'post',
                   data:{_token:'{{csrf_token()}}',
                   },
                   success: function(data)
                   {
                    if(data=="true"){
                      swal({
                            title: "Estas Seguro?",
                            text: "Se eliminará el autor "+$name+"!\n",   
                            type: "warning",   
                            showCancelButton: true,   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "Si , eliminar !", 
                            cancelButtonText: "Cancelar",
                            closeOnConfirm: false,
                            closeOnCancel: false  
                        }, function(isConfirm){   
                            if (isConfirm) {     
                                swal({
                                  title: "Eliminado!", 
                                  text: "El autor ha sido eliminado.",
                                  type: "success",
                                  timer: 2000,   
                                },function(){
                                   $.ajax({
                                     url: '{{url("/admin/authors/")}}/'+$id+'/destroy',
                                     type:'post',
                                     data:{_token:'{{csrf_token()}}',
                                     },
                                     success: function(data)
                                     {
                                      if(data=="true"){
                                        console.log("eliminado"); 
                                        location.reload();
                                      }else{
                                        swal("Operación Inválida", "Este autor no puede ser eliminado, posee relaciones con :\n"+data, "error"); 
                                      }
                                     }
                                   });
                                });
                            } else {     
                                swal("Cancelado", "La operacion fue cancelada", "error");   
                            }
                        });
                    }else{
                      swal("Operación Inválida", "Este autor no puede ser eliminado, posee relaciones con :\n"+data, "error"); 
                    }
                   }
           });

            
        });

      });