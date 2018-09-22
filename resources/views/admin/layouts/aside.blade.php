<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">BiblioFisi</span></h3> </div>
        <ul class="nav" id="side-menu">
            <li> <a href="javascript:void(0)" class="waves-effect @if(URL::full() == url('/admin/theses')) active @endif "><i class="fa fa-book fa-fw"></i><span class="">Material Bibliografico<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/admin/theses') }}"><i class="fa-fw">T</i><span class="hide-menu"> Tesis</span></a></li>
                    <li><a href="{{ url('/admin/magazines') }}"><i class="fa-fw">R</i><span class="hide-menu"> Revistas</span></a></li>
                </ul>
            </li>
            <li><a href="{{ url('/admin/users') }}" class="waves-effect"><i data-icon="f" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Usuarios</span></a> </li>

            <li><a href="{{ url('/admin/authors') }}" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Autores</span></a> </li>
            <li><a href="{{ url('/admin/editorials') }}" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Editoriales</span></a> </li>
            <li><a href="{{ url('/admin/stands') }}" class="waves-effect"><i data-icon="f" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Stands</span></a> </li>

            <li> <a href="javascript:void(0)" class="waves-effect @if(URL::full() == url('/admin/schools') || URL::full() == url('/admin/faculties')) active @endif "><i class="fa fa-university fa-fw"></i><span class="">Entidades<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/admin/schools') }}"><i class="fa-fw">E</i><span class="hide-menu"> Escuelas</span></a></li>
                    <li><a href="{{ url('/admin/faculties') }}"><i class="fa-fw">F</i><span class="hide-menu"> Facultades</span></a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0)" class="waves-effect @if(URL::full() == url('/admin/configurations/account')) active @endif "><i class="fa fa-gear fa-fw"></i><span class="">Configuraciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/admin/account') }}"><i class="fa fa-user fa-fw"></i><span class="hide-menu"> Cuenta</span></a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
