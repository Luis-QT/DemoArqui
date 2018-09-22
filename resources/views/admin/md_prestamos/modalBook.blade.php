<div class="modal-dialog" role="document">
  <div class="modal-content modal-user">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">{{$book->title}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel panel-default">

      <table class="table table-hover table-striped table-bordered" >
        <tr>
          <th>Estado</th>
          <th>Numero de ingreso</th>
          <th>Codigo de barras</th>
          <th>Clasificacion</th>
          <th>Ejemplar</th>
        </tr>
        @foreach($book->bookCopies as $bookCopy)
        @if($bookCopy->id == $copy->id)
        <tr class="warning">
        @else
        <tr>
        @endif
          <td class="text-center">{{$bookCopy->getState()}}</td>
          <td class="text-center">{{$bookCopy->incomeNumber}}</td>
          <td class="text-center">{{$bookCopy->barcode}}</td>
          <td class="text-center">{{$bookCopy->clasification}}</td>
          <td class="text-center">{{$bookCopy->copy}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
