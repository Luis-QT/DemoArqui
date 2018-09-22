@extends('admin.layouts.main')

@section('content')


<div class="container-fluid">
    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">AUTORES</h4> 
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li>Autores</li>
                <li class="active">Inicio</li>
            </ol>
        </div>
    </div>

    <div class="row">
    
        <div class="col-md-8">
            {!! $vistaVer !!}
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    {!! $vistaCrear !!}
                </div>
                <div class="col-md-12" id="div-edit">
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection

@if(session()->has('info'))
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                swal("¡Proceso exitoso!", "{{session('info')}}", "success")
            });
    </script>
@endif

@if($errors->any() && !$errors->has('categoria') && !$errors->has('name'))
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#div-edit").html('<div class="box box-success box-solid"><div class="box-header with-border">'+
                        '<h3 class="box-title">Editar</h3><div class="box-tools pull-right"><button type="button"'+
                        ' class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div>'+
                        '<div class="box-body"></div><div class="overlay"><i class="fa fa-refresh fa-spin"></i></div></div>');

            @if($errors->has('name2') && $errors->has('categoria2'))
               $("#div-edit").load('{{ url("/admin/authors/") }}/{{old("id")}}/edit/4');
              
            @elseif($errors->has('name2') && $errors->first('name2')!="name2 ya ha sido registrado.")
                
                var cadena="";
                @if(old('categoria2')!=null)

                @foreach(old('categoria2') as $categoria2)
                    cadena= cadena+"{{$categoria2}},";
                @endforeach
                @endif

                $("#div-edit").load('{{ url("/admin/authors/") }}/{{old("id")}}/edit/1/{{old("name2")}},'+cadena);
            @elseif($errors->has('categoria2'))

                $("#div-edit").load('{{ url("/admin/authors/") }}/{{old("id")}}/edit/2/{{old("name2")}}');
            @else
                var cadena="";
                @if(old('categoria2')!=null)

                @foreach(old('categoria2') as $categoria2)
                    cadena= cadena+"{{$categoria2}},";
                @endforeach
                @endif
                $("#div-edit").load('{{ url("/admin/authors/") }}/{{old("id")}}/edit/3/{{old("name2")}},'+cadena);
            @endif

            });
        </script>
@endif