@extends('user.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">INICIO</h3> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="#">Bibliofisi</a></li>
                <li class="active">Inicio</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Bienvenido</h3>
                <!-- ACA DEBEN PONER SUS VIEWS -->
                <P>El equipo de desarrollo Bibliofisi les presenta una nueva version del sistema.</P>
                <p>BETA VERSION. Estamos trabajando para ofrecer un mejor servicio. :)</p>
            </div>
        </div>
    </div>
    <!-- .row -->
    <!-- .right-sidebar -->
</div>

@endsection
