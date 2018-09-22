<div class="modal-dialog" role="document">
  <div class="modal-content modal-user">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Información del Usuario</h4>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-7">
        <div class="box-user">
          <div class="sub-box">
            <div class="sub-title">Datos Personales</div>
            <table class="table table-striped tabla-lista-derecha">
              <tr>
                <td>Nombre</td>
                <td>{{$user->name}}</td>
              </tr>
              <tr>
                <td>Apellido</td>
                <td>{{$user->lastName}}</td>
              </tr>
              <tr>
                <td>Codigo</td>
                <td>{{$user->code}}</td>
              </tr>
              <tr>
                <td>Dni</td>
                <td>{{$user->dni}}</td>
              </tr>
            </table>
          </div>
          <div class="sub-box">
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="box-user">
          <div class="sub-box" style="text-align: center">
            <img src="{{ asset('imgUsuarios/'.$user->userSpecification->urlImg) }}" alt="User Image" style="height:160px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
