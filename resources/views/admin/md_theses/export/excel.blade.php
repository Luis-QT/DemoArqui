<!DOCTYPE html>
<html>
<head>
  <title>Catálogo de Tesis e Informes</title>
</head>
<body>
  <center><h3><strong>CATÁLOGO DE TESIS E INFORMES</strong></h3></center>
  <table>
    <thead>
        <tr>
            <th>Nº</th>
            <th>Clasificación</th>
            <th>Número de Ingreso</th>
            <th>Código de Barras</th>
            <th>Ítem</th>
            <th>Título</th>
            <th>Autor Principal</th>
            <th>Asesor</th>
            <th>Nº de Páginas</th>
            <th>Contenido</th>
        </tr>
    </thead>
    <tbody>
        @foreach($theses as $i => $thesis)
          @foreach($thesis->thesisCopies as $j => $thesisCopy)
            <tr>
              @if($j==0)
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{$i+1}}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->clasification }}</td>
              @endif
              <td class="text-center">{{ $thesisCopy->incomeNumber }}</td>
              <td class="text-center">{{ $thesisCopy->barcode }}</td>
              <td class="text-center">{{ $thesisCopy->copy }}</td>
              @if($j==0)
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->title }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->authors->implode('name',' ,') }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->thesisSpecification->adviser }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->thesisSpecification->extension }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->thesisSpecification->content }}</td>
              @endif
            </tr>  
          @endforeach
        @endforeach
    </tbody>
  </table>
</body>
</html>
