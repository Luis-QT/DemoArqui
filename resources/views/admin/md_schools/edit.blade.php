<div class="panel panel-verde-claro-lqt block5">
    <div class="panel-heading"><i class="ti-pencil"></i> EDITAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
        	@if($school->id == 1 || $school->id == 2)
        		<p align="center">Sin Seleccionar</p>
        	@else
        		<form data-toggle="validator" action="#">
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input type="text" class="form-control" placeholder="Nombre" id="edit_name" value="{{ $school->name }}" data-error="Campo vacio" required><div class="help-block with-errors"></div>
					</div>

		      		<div class="form-group">
						<label for="facultyId">Facultad</label>
						<div id="div-faculty2">
							<select id="edit_facultyId" class="selectEdit form-control" required>
								@foreach($faculties as $faculty)
									<option value="{{$faculty->id}}"  @if($school->facultyId==$faculty->id) selected @endif>{{$faculty->name}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="footer-boton">
						<button type="button" class="btn btn-verde-claro-lqt btnEditarEscuela"> <i class="fa fa-edit m-r-5"></i> <span>Editar</span></button>
					</div>
				</form>
        	@endif
		</div>
    </div>
</div>
<!-- Este script no puede ir con schools_edit , genera error de select2 -->
<script>
  $(document).ready(function() {
      $('.selectEdit').select2();
  });
</script>
<script src="{{ asset('js/admin/schools_edit.js') }}"></script>
