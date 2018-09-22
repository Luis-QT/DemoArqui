<!DOCTYPE html>
<html>
<head>
  <title>Catálogo de Tesis e Informes</title>
  <link href="{{ asset('bootstrap/dist/css/bootstrapMod.css') }}" rel="stylesheet">
</head>
<body>
  <style type="text/css">
      html {
      margin: 0;
      }
      body {
      font-family: "Times New Roman", serif;
      margin: 2mm 8mm 2mm 8mm;
      }
  </style>
  <center><h3><strong>CATÁLOGO DE TESIS E INFORMES</strong></h3></center>
  <hr>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nº</th>
            <th class="text-center">Clasificación</th>
            <th class="text-center">Número de Ingreso</th>
            <th class="text-center">Código de Barras</th>
            <th class="text-center">Ítem</th>
            <th class="text-center">Título</th>
            <th class="text-center">Autor Principal</th>
            <th class="text-center">Asesor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($theses as $i => $thesis)
          @foreach($thesis->thesisCopies as $j => $thesisCopy)
            <tr>
              @if($j==0)
              <td rowspan="{{ $thesis->thesisCopies->count() }}" class="text-center">{{$i+1}}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}" class="text-center">{{ $thesis->clasification }}</td>
              @endif
              <td class="text-center">{{ $thesisCopy->incomeNumber }}</td>
              <td class="text-center">{{ $thesisCopy->barcode }}</td>
              <td class="text-center">{{ $thesisCopy->copy }}</td>
              @if($j==0)
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->title }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->authors->implode('name',' ,') }}</td>
              <td rowspan="{{ $thesis->thesisCopies->count() }}">{{ $thesis->thesisSpecification->adviser }}</td>
              @endif
            </tr>  
          @endforeach
        @endforeach
    </tbody>
  </table>
</body>
</html>
