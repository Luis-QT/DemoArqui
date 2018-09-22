@extends('admin.layouts.main')

@section('content')
<!-- Si quito esto , sale error $ -->
<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">Pedidos y prestamos pendientes</h3> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li class="active">Prestamos</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <input type="hidden" id="token" value="{{csrf_token()}}">
        <div class="col-md-12" id="div-pedidos">
        <div id="print"></div>
          {!! $showPedidos !!}
        </div>
        <div class="col-md-12" id="div-prestamos">
          {!! $showPrestamo !!}
        </div>
  </div>
    <!-- .row -->
</div>

@endsection

