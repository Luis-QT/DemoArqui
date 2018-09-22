<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile" style="padding: 90px 0 15px; position: relative; text-align: center;">
            <div class="dropdown user-pro-body">
                <div><img style="width: 80px;" src="{{ asset('img/user.jpg') }}" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::User()->name." ".Auth::User()->lastName }}</a>
            </div>
        </div>
        <ul class="nav" id="side-menu" style="padding-top: 0px;">
            <li class="header">MENÚ DE NAVEGACIÓN</li>

            
            <li><a href="{{ url('/user/index') }}" class="waves-effect @if(URL::full() == url('/user/index')) active @endif "><i class="fa fa-dashboard fa-fw"></i><span class="hide-menu"> Inicio</span></a></li>
            <li> <a href="javascript:void(0)" class="waves-effect @if(URL::full() == url('/user/theses') || URL::full() == url('/user/books')) active @endif "><i data-icon="" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Catálogo virtual<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('/user/books') }}"><i class="fa-fw">L</i><span class="hide-menu">Libro</span></a> </li>
                    <li> <a href="{{ url('/user/theses') }}"><i class="fa-fw">T</i></i><span class="hide-menu">Tesis e Informes</span></a> </li>
                </ul>
            </li>
            <li><a href="{{ url('/user/configurations') }}" class="waves-effect @if(URL::full() == url('/user/configurations')) active @endif "><i class="fa fa-gear fa-fw"></i><span class="hide-menu"> Configuraciones</span></a></li>
        </ul>
    </div>
</div>