@extends('admin.layouts.main')

@section('content')
<!-- Si quito esto , sale error $ -->
<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">TESIS E INFORMES</h3> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Material Bibliográfico</a></li>
                <li class="active">Tesis</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->

    <div class="row">
        <input type="hidden" id="token" value="{{csrf_token()}}">
        <div class="col-md-12">
            <div class="col-md-12">
                {!! $show !!}
            </div>
        </div>
    </div>
    <!-- .row -->
</div>

@endsection
