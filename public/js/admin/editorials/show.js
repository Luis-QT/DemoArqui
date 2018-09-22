$(document).ready(function() {
        $(".editar").on('click',function(event) {
          $id = $(this).data('id')
          $("#div-edit").html('<div class="box box-success box-solid"><div class="box-header with-border">'+
					'<h3 class="box-title">Editar</h3><div class="box-tools pull-right"><button type="button"'+
					' class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div>'+
					'<div class="box-body"></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>')
          $("#div-edit").load('{{ url("/admin/editorials/") }}/' + $id + '/edit/0');
        });

        $('.eliminar').click(function(){
            $name = $(this).data('name');
            $id = $(this).data('id');

            $.ajax({
                   url: '{{url("/admin/editorials/")}}/'+$id+'/canDestroy',
                   type:'post',
                   data:{_token:'{{csrf_token()}}',
                   },
                   success: function(data)
                   {
                    if(data=="true"){
                      swal({
                            title: "Estas Seguro?",
                            text: "Se eliminará la editorial "+$name+"!\n",   
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
                                  text: "La editorial ha sido eliminada.",
                                  type: "success",
                                  timer: 2000,   
                                },function(){
                                   $.ajax({
                                     url: '{{url("/admin/editorials/")}}/'+$id+'/destroy',
                                     type:'post',
                                     data:{_token:'{{csrf_token()}}',
                                     },
                                     success: function(data)
                                     {
                                      if(data=="true"){
                                        console.log("eliminada"); 
                                        location.reload();
                                      }else{
                                        swal("Operación Inválida", "Esta editorial no puede ser eliminada, posee relaciones con :\n"+data, "error"); 
                                      }
                                     }
                                   });
                                });
                            } else {     
                                swal("Cancelado", "La operacion fue cancelada", "error");   
                            }
                        });
                    }else{
                      swal("Operación Inválida", "Esta editorial no puede ser eliminado, posee relaciones con :\n"+data, "error"); 
                    }
                   }
           });

            
        });

      });