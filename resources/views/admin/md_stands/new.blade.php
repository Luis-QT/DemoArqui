
<div class="panel panel-morado-lqt">
    <div class="panel-heading"><i class="fa fa-plus"></i> Registrar Stand
        <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in" aria-expanded="true">
        <div class="panel-body">
            <form data-toggle="validator" action="#">
              <div class="form-group">
                  <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="inputNameStand" class="control-label">Nombre</label>
                        <input type="text" name="name" class="form-control" id="inputNameStand" placeholder="Nombre" required>
                        <div class="help-block with-errors"></div>

                      </div>
                      <div class="form-group col-sm-6">
                        <label for="inputLevelStand" class="control-label">Nivel</label>
                        <input name="level" type="number" min="0" max="3" class="form-control" id="inputLevelStand" placeholder="Nivel x " required>
                        <div class="help-block with-errors"></div>
                      </div>
              </div>
              </div>
              <div class="form-group">
                  <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="inputStateStand" class="control-label">Estado</label>
                          <select name="state" data-toggle="validator" id="inputStateStand"	class="select2 form-control" required>
                              <option value="0">Habilitado</option>
                              <option value="1">Almacén</option>
                              <option value="2">Deshabilitado</option>
                          </select>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="inputTypeStand" class="control-label">Tipo</label>
                          <select name="type" data-toggle="validator" id="inputTypeStand"	class="select2 form-control" required>
                              <option value="0">Libro</option>
                              <option value="1">Tesis|Informe</option>
                          </select>
                          <div class="help-block with-errors"></div>
                      </div>
                  </div>
              </div>

      				<div class="footer-boton">

      					<button id="btnCrearStand" type="button" class="btn btn-morado-lqt"> <i class="fa fa-envelope-o m-r-5"></i> <span>Crear</span></button>
      				</div>
	          </form>
        </div>
    </div>
</div>
