@extends('admin.layouts.main')

@section('content')
<!-- Si quito esto , sale error $ -->
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">ESCUELAS</h3> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Entidades</a></li>
                <li class="active">Escuelas</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->

    <div class="row">
        <input type="hidden" id="token" value="{{csrf_token()}}">
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
    </div>
    <!-- .row -->
</div>

@endsection
