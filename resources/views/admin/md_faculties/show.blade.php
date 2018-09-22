<div class="panel panel-celeste-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> LISTA DE FACULTADES
      <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in">
        <div class="white-box">
          <div class="table-responsive">
            <table class="table table-hover dataTable">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Nombre</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($faculties as $i => $faculty)
                    <tr>
                      <td class="text-center">{{$i+1}}</td>
                      <td>{{ $faculty->name }}</td>
                      <td>
                        <button type="button" data-id="{{$faculty->id}}" data-name="{{ $faculty->name }}" class="btn btn-verde-lqt editarFacultad"><i class="fa fa-pencil"></i></button>
                      </td>
                      <td>
                        <button type="button" data-id="{{$faculty->id}}" data-name="{{ $faculty->name }}" class="btn btn-danger eliminarFacultad"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
