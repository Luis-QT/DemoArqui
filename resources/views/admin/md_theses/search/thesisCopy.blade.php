<input type="hidden" value="{{ $search }}" id="inputHiddenSearch">
<table class="table table-hover dataTableThesis">
  <thead>
      <tr>
          <th class="text-center">#</th>
          <th>Número de Ingreso</th>
          <th>Codigo de Barras</th>
          <th>Clasificación</th>
          <th>Título</th>
          <th>Stand</th>
          <th>Año</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </tr>
  </thead>
  <tbody>
      @foreach($thesisCopies as $i => $thesisCopy)
        <tr data-id="{{$thesisCopy->thesis->id}}">
          <td class="text-center">{{$i+1}}</td>
          <td>{{ $thesisCopy->incomeNumber }}</td>
          <td>{{ $thesisCopy->barcode }}</td>
          <td>{{ $thesisCopy->thesis->clasification }}</td>
          <td><a href="#" class="btnInformationThesis" data-info="0" data-toggle="modal" data-target=".modalInformacion">{{ $thesisCopy->thesis->title }}</a></td>
          <td>{{ $thesisCopy->thesis->stand->name }}</td>
          <td>{{ $thesisCopy->thesis->year }}</td>
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
