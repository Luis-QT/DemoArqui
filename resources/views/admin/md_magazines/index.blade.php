@extends('admin.layouts.main')

@section('content')

<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>

<div class="container-fluid">
    <div class="row bg-title">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">Revistas</h3>
        </div>

        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="#">Material Bibliográfico</a></li>
                <li class="active">Revistas</li>
            </ol>
        </div>

    </div>

    <div class="row">
        <input type="hidden" id="token" value="{{csrf_token()}}">
        <div class="col-md-12">
            <div class="col-md-12">
                {!! $show !!}
            </div>
        </div>
    </div>
</div>

@endsection