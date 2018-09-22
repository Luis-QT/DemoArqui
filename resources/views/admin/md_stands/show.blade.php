
<div class="panel panel-anaranjado-jmc">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> LISTA DE STANDS
      <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in">
      <div class="white-box">

          <div class="table-responsive">
              <table class="dataTable" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th class="text-center" class="text-center">Nombre</th>
                          <th class="text-center" class="text-center">Estado</th>
                          <th class="text-center" class="text-center">Tipo</th>
                          <th class="text-center" class="text-center">Nivel</th>
                          <th class="text-center" class="text-center">Eliminar</th>
                          <th class="text-center" class="text-center">Editar</th>

                      </tr>
                  </thead>
                  <tbody>
                    @foreach($stands as $stand)
                      <tr>
                          <td class="text-center">{{$stand->name}}</td>
                          <td class="text-center">{{$stand->getState()}}</td>
                          <td class="text-center">{{$stand->getType()}}</td>
                          <td class="text-center">{{$stand->level}}</td>
                          <td class="text-center">
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5 eliminarStand" data-id="{{$stand->id}}" data-name="{{ $stand->name }}" data-state="{{ $stand->state }}" data-type="{{$stand->type}}" data-level="{{$stand->level}}"><i class="ti-trash"></i></button>
                          </td>
                          <td class="text-center">
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5 editarStand" data-id="{{$stand->id}}" data-name="{{ $stand->name }}" data-state="{{ $stand->state }}" data-type="{{$stand->type}}" data-level="{{$stand->level}}"><i class="ti-pencil-alt"></i></button>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                  <!-- <tfoot>
                      <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Nivel</th>
                        <th class="text-center">Eliminar</th>
                        <th class="text-center">Editar</th>

                      </tr>
                  </tfoot> -->

              </table>
          </div>
      </div>

    </div>
</div>
