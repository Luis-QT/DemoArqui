<div class="panel panel-verde-claro-lqt block5">
    <div class="panel-heading"><i class="ti-pencil"></i> EDITAR
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
        	@if($stand ==null)
        		<p align="center">Sin Seleccionar</p>
        	@else
            <!--  -->
            <form data-toggle="validator" action="#">
              <div class="form-group">
                  <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="inputNameStand" class="control-label">Nombre</label>
                        <input type="text" name="name" class="form-control" id="editNameStand" value="{{ $stand->name }}" placeholder="Nombre" required>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="editLevelStand" class="control-label">Nivel</label>
                        <input name="level" type="number" min="0" max="3" class="form-control" id="editLevelStand" value="{{ $stand->level }}" placeholder="Nivel x " required>
                        <div class="help-block with-errors"></div>
                      </div>
              </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="editStateStand" class="control-label">Estado</label>
                          <select name="state" data-toggle="validator" id="editStateStand"	class="selectEdit form-control" required>
                            <option value="0" @if($stand->state==0) selected @endif> Disponible </option>
                            <option value="1" @if($stand->state==1) selected @endif> Almacén </option>
                            <option value="2" @if($stand->state==2) selected @endif> No disponible </option>
                          </select>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="editTypeStand" class="control-label">Tipo</label>
                          <select name="type" data-toggle="validator" id="editTypeStand"	class="selectEdit form-control" required>
                            <option value="0" @if($stand->type==0) selected @endif> Libro </option>
                            <option value="1" @if($stand->type==1) selected @endif> Tesis|Informe </option>
                            <option value="2" @if($stand->type==2) selected @endif> Revista </option>
                          </select>
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
              </div>

              <div class="footer-boton">
                <button id="btnEditarStand" data-id="{{$stand->id}}" type="button" class="btn btn-morado-lqt"> <i class="fa fa-envelope-o m-r-5"></i> <span>Guardar</span></button>
              </div>
            </form>
        </div>
        	@endif
		</div>
    </div>
</div>
<!-- Este script solo carga cuando se indica en editar por eso debe ir aca -->
<script>
  $(document).ready(function() {
      $('.selectEdit').select2();
  });
</script>
<script src="{{ asset('js/admin/stand_edit.js') }}"></script>
