<script type="text/javascript" src="{{url('/plugins/multiselect/bootstrap-multiselect.js')}}"></script>
<link rel="stylesheet" href="{{url('/css/multiselect/multiselect.css')}}" type="text/css"/>
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-plus"></i> CREAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('editorials.store') }}">
            	{{ csrf_field() }}
				<div class="form-group">
					
					@if($errors->has('name') && $errors->first('name')!="nombre ya ha sido registrado.")
						<div class="form-group has-error has-feedback">
                            <label class="control-label" for="name">Nombre</label>
                            {!! $errors->first('name',"<label class='control-label pull-right'>Campo vacío</label>") !!}
                        	<input type="text" class="form-control"	placeholder="Nombre" name="name">
                        	<span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        </div>
					@else
						<label for="name">Nombre</label>
						<input type="text" class="form-control"	placeholder="Nombre" name="name" value="{{old('name')}}">
					@endif
				</div>

				<div class="form-group">
					@if($errors->has('categoria'))
						<div class="form-group has-error has-feedback">
							<label for="categoria[]" class="control-label">Categoría(s)</label>
							{!! $errors->first('categoria',"<label class='control-label pull-right'>Campo vacío</label>") !!}
							<div style="text-align: center;" id="contCategoria1m">
							<select name="categoria[]" id="categoria1m" class="form-control" multiple="multiple">
							    <option value="0" id="opcion0">Libro</option>
								<option value="1" id="opcion1">Tesis o Informe</option>
								<option value="2" id="opcion2">Revista</option>
							</select>
							</div>
	                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
						</div>


					@else
						<label for="categoria[]">Categoría(s)</label>
						<div style="text-align: center;" id="contCategoria1">
							<select name="categoria[]" id="categoria1" class=" form-control" multiple="multiple">
							    <option value="0" id="opcion0">Libro</option>
								<option value="1" id="opcion1">Tesis o Informe</option>
								<option value="2" id="opcion2">Revista</option>
							</select>
						</div>
					@endif
					
				</div>

				<div class="box-boton">
					<button class="btn btn-primary center-block">
						<span><i class="fa fa-envelope-o"></i>Crear</span>
					</button>
				</div>
			</form>
		</div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#categoria1').multiselect({
            buttonWidth: ''+$('#contCategoria1').width()+'px',
            enableFiltering: true,
            nonSelectedText: 'Nada Seleccionado',
            filterPlaceholder:'Búsqueda'
        });
		$('#categoria1m').multiselect({
            buttonWidth: ''+$('#contCategoria1m').width()+'px',
            enableFiltering: true,
            nonSelectedText: 'Nada Seleccionado',
            buttonClass:'btn btn-danger',
            filterPlaceholder:'Búsqueda'
        });
        
    });
</script>

@if ($errors->has('name') && $errors->first('name')=="nombre ya ha sido registrado." && !$errors->has('categoria'))
    <script type="text/javascript">
    	$(document).ready(function() {

    		swal("¡Operación inválida!", "Ya existe una editorial con el nombre {{old('name')}}, debido a esto no se puede crear la editorial")

    		@if(old('categoria')!=null)
    		@foreach(old('categoria') as $categoria)
    			$("#opcion{{$categoria}}").attr("selected", "selected");
    		@endforeach
    		@endif

        });

    </script>
@endif
