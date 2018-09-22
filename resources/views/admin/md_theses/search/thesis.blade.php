<input type="hidden" value="{{ $search }}" id="inputHiddenSearch">
<table class="table table-hover dataTableThesis">
  <thead>
      <tr>
          <th class="text-center">#</th>
          <th>Clasificación</th>
          <th>Título</th>
          <th>Tipo</th>
          <th>Autor</th>
          <th>Stand</th>
          <th>Año</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </tr>
  </thead>
  <tbody>
      @foreach($theses as $i => $thesis)
        <tr data-id="{{$thesis->id}}">
          <td class="text-center">{{$i+1}}</td>
          <td>{{ $thesis->clasification }}</td>
          <td><a href="#" class="btnInformationThesis" data-info="0" data-toggle="modal" data-target=".modalInformacion">{{ $thesis->title }}</a></td>
          <td>{{ $thesis->typeToString() }}</td>
          <td>{{ $thesis->authors->implode('name',', ') }}</td>
          <td>{{ $thesis->stand->name }}</td>
          <td>{{ $thesis->year }}</td>
          <td>
            <button type="button" class="btn btn-verde-lqt openModalEditThesis" data-toggle="modal" data-target=".modalAgregar"><i class="fa fa-pencil"></i></button>
          </td>
          <td>
            <button type="button" class="btn btn-danger btnEliminarTesis"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>

<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/thesis/search.js') }}"></script>
