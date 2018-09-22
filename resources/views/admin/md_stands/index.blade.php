@extends('admin.layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">STANDS</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Stands</a></li>
                <li class="active">Inicio</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->

    <div class="row">
      <input type="hidden" id="tokenStand" value="{{csrf_token()}}">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    {!! $new !!}
                </div>
                <div class="col-md-12 div-edit">
                  {!! $edit !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            {!! $show !!}
        </div>
    <!-- .row -->
</div>
</div>

@endsection
