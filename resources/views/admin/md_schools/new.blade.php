<div class="panel panel-morado-lqt">
    <div class="panel-heading"><i class="fa fa-plus"></i> CREAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
            <form data-toggle="validator" action="#">
				<div class="form-group">
					<label class="control-label">Nombre</label>
					<input type="text" class="form-control" placeholder="Nombre" id="new_name" data-error="Campo vacio" required><div class="help-block with-errors"></div>
				</div>

				<div class="form-group">
					<label for="facultyId">Facultad</label>
					<div id="div-faculty">
						<select id="new_facultyId" id="facultyId"	class="select2 form-control" required>
							@foreach($faculties as $faculty)
								<option value="{{$faculty->id}}">{{ $faculty->name }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="footer-boton">
					<button type="button" class="btn btn-morado-lqt btnCrearEscuela"> <i class="fa fa-envelope-o m-r-5"></i> <span>Crear</span></button>
				</div>
			</form>
		</div>
    </div>
</div>
