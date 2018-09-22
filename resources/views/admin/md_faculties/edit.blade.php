<div class="panel panel-verde-claro-lqt block5">
    <div class="panel-heading"><i class="ti-pencil"></i> EDITAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
        	@if($faculty->id == 1)
        		<p align="center">Sin Seleccionar</p>
        	@else
        		<form data-toggle="validator" action="#">
					<input type="hidden" id="id" value="{{ $faculty->id }}" >
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input type="text" class="form-control" placeholder="Nombre" id="edit_name" value="{{ $faculty->name }}" data-error="Campo vacio" required><div class="help-block with-errors"></div>
					</div>

						<div class="table-responsive">
				            <table class="table table-hover table-bordered table-striped">
				              <thead>
				                  <tr>
				                      <th class="text-center">#</th>
				                      <th>Escuela</th>
				                  </tr>
				              </thead>
				              <tbody>
				              	@if($faculty->schools->isEmpty())
					        		<td align="center" colspan="2">No muestra escuelas</td>
					        	@else
				                  @foreach($faculty->schools as $i => $school)
				                    <tr>
				                      <td class="text-center">{{$i+1}}</td>
				                      <td>{{ $school->name }}</td>
				                    </tr>
				                  @endforeach
				                @endif
				              </tbody>
				            </table>
				          </div>

					<div class="footer-boton">
						<button type="button" class="btn btn-verde-claro-lqt btnEditarFacultad"> <i class="fa fa-edit m-r-5"></i> <span>Editar</span></button>
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
<script src="{{ asset('js/admin/faculties_edit.js') }}"></script>
