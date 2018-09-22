<script type="text/javascript" src="{{url('/plugins/multiselect/bootstrap-multiselect.js')}}"></script>
<link rel="stylesheet" href="{{url('/css/multiselect/multiselect.css')}}" type="text/css"/>
<div class="panel panel-default">
    <div class="panel-heading"><i class="ti-settings"></i> EDITAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
            <form role="form" method="POST"
				action="{{ url('/admin/authors/update/'.$autor->id) }}" name="formulario_editar_autor">
				<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
				<input type="hidden" name="id" value="{{$autor->id}}">

				@if($error=="1" || $error =="4")
					<div class="form-group has-error has-feedback">
                        <label class="control-label" for="name">Nombre</label>
                        <label class='control-label pull-right'>Campo vacío</label>
                    	<input type="text" class="form-control"	placeholder="Nombre" name="name2">
                    	<span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    </div>
				@else
					<label for="name2">Nombre</label>
					<input type="text" class="form-control" value="{{$nombre}} " name="name2" >
				@endif

				@if($error=="2" || $error =="4")
					<div class="form-group has-error has-feedback">
						<label for="categoria2[]" class="control-label">Categoría(s)</label>
						<label class='control-label pull-right'>Campo vacío</label>
						<div id="contCategoria2m">
						<select name="categoria2[]" id="categoria2m" class="form-control" multiple>
						    <option value="0" id='opcion20'>Libro</option>
							<option value="1" id='opcion21'>Tesis o Informe</option>
							<option value="2" id='opcion22'>Revista</option>
						</select>
						</div>
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
					</div>
				@else
				<div class="form-group">
					<label for="categoria2">Categoría(s)</label>
						<div id="contCategoria2">
							<select name="categoria2[]" id="categoria2" class="form-control"  multiple>
							    {!! $mensaje !!}
							</select>
						</div>
				</div>
				@endif

				<div class="box-boton" style="padding-top: 0px;">
					<button class="btn btn-primary center-block">
						<span><i class="fa fa-envelope-o"></i>Editar</span>
					</button>
				</div>
			</form>
		</div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#categoria2').multiselect({
            buttonWidth: ''+$('#contCategoria2').width()+'px',
            enableFiltering: true,
            nonSelectedText: 'Nada Seleccionado',
            filterPlaceholder:'Búsqueda'
        });

        $('#categoria2m').multiselect({
            buttonWidth: ''+$('#contCategoria2m').width()+'px',
            enableFiltering: true,
            nonSelectedText: 'Nada Seleccionado',
            buttonClass:'btn btn-danger',
            filterPlaceholder:'Búsqueda'
        });

	});
</script>

@if($error=="3")
    <script type="text/javascript">
    	$(document).ready(function() {

    		swal("¡Operación inválida!", "Ya existe un autor con el nombre {{$nombre}}, por favor introduzca otro nombre.")

    		@if(old('categoria2')!=null)
    		@foreach(old('categoria2') as $categoria2)
    			$("#opcion2{{$categoria2}}").attr("selected", "selected");
    		@endforeach
    		@endif

        });

    </script>
@endif