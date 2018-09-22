@extends('user.layouts.main')

@section('content')
<!-- Si quito esto , sale error $ -->

<div class="container-fluid">
    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h3 class="page-title">CONFIGURACIONES</h3> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <ol class="breadcrumb">
                <li><a href="#">Configuraciones</a></li>
                <li class="active">Inicio</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    <!-- .row -->

    <div class="row">
        <input type="hidden" id="token" value="{{csrf_token()}}">
        <div class="col-lg-4  col-md-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-0 font-35 text-center">CAMBIO DE CONTRASEÑA</h3>
                <p class="text-muted m-b-30 font-13 text-center"> ( {{ $user->userType->name }} )</p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form>
                            <div class="form-group">
                                <label for="contraAntigua">Contraseña actual :</label>
                                <input type="text" class="form-control" id="oldPassword" data-toggle="validator-lqt"> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="contraNueva">Constraseña nueva :</label>
                                <input type="text" class="form-control" id="newPassword"> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="contraNueva">Confirmar Contraseña :</label>
                                <input type="text" class="form-control" id="confirmPassword" data-toggle="validator-lqt"> 
                            </div>
                            <div class="footer-boton">
                                <button type="button" id="btnCambiar" disabled class="btn btn-success waves-effect waves-light m-r-10">Cambiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-15 font-35">EXTRAS</h3>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10">
                                        <h4 class="list-group-item-heading">Resaltar Búsqueda</h4>
                                        <p class="list-group-item-text">Resalta la búsquedas que se realicen.</p>
                                        <p class="list-group-item-text">Advertencia !! . Puede retrasar significativamente la búsqueda</p>
                                    </div>
                                    <div class="col-md-1 col-xs-2">
                                        <input type="checkbox" id="btnConfigSearch" @if($user->configuration->highlightSearch==1) checked @endif class="js-switch pull-right" data-color="#ffca4a" data-switchery="true">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .row -->
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnConfigSearch').on('change',function(){
            var value = $(this).is(':checked');

            if(value){
                value = 1;
            }else{
                value = 0;
            }
            
            $.ajax({
               url: 'configurations/highlightSearch',
               type:'post',
               data:{_token : $('#token').val(),
                     value: value,
               },
            });
        });
    });
</script>
@endsection