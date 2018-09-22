@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">USUARIOS</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Usuarios</a></li>
                <li class="active">Inicio</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->

    <div class="row">
      <input type="hidden" id="tokenUser" value="{{csrf_token()}}">
      <div class="col-md-12">
          {!! $show !!}
      </div>

            <div class="row">
                <div class="col-md-12">
                  {!! $new !!}
                </div>
                <div class="div-edit">

                </div>

            </div>
    <!-- .row -->

</div>
</div>

@endsection
