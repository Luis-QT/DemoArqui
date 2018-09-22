<div class="modal-dialog" role="document">
  <div class="modal-content modal-user">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">{{$compendium->title}}</h4>
  </div>
  <div class="modal-body">
    <div class="panel panel-default">

      <table class="table table-hover table-striped table-bordered" >
        <tr>
          <th>Estado</th>
          <th>Numero de ingreso</th>
          <th>Ejemplar</th>
        </tr>
        @foreach($compendium->compendium_copies as $compendiumCopy)
        @if($compendiumCopy->id == $copy->id)
        <tr class="warning">
        @else
        <tr>
        @endif
          <td class="text-center">{{$compendiumCopy->availability}}</td>
          <td class="text-center">{{$compendiumCopy->incomeNumber}}</td>
          <td class="text-center">{{$compendiumCopy->copy}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
