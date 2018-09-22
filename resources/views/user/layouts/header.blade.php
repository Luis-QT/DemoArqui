<nav class="navbar navbar-default navbar-static-top m-b-0">
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <!-- Toggle icon for mobile view -->
            <div class="top-left-part" style="padding: 0em 2em;">
                <!-- Logo -->
                <a class="logo" href="{{ url('/user/index') }}" style="padding-left: 0px; ">
                    <!-- Logo icon image, you can use font-icon also --><b>
                    <!--This is dark logo icon--><img src="{{ asset('plugins/images/logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('plugins/images/logo.png') }}" alt="home" class="light-logo" />
                 </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                    <!--This is dark logo text--><img src="{{ asset('plugins/images/admin-text.png') }}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('plugins/images/logo-text.png') }}" alt="home" class="light-logo" />
                 </span> </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
            </ul>
            <!-- This is the message dropdown -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <!-- /.Task dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('img/user.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::User()->name." ".Auth::User()->lastName }}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="u-img"><img src="{{ asset('img/user.jpg') }}" alt="user" /></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="u-text" style="word-wrap: break-word;display: block;">
                                            <h4>{{ Auth::User()->name." ".Auth::User()->lastName }}</h4>
                                            <p class="text-muted">{{ Auth::User()->getEmailWithoutUnmsm() }}</p>
                                            <div class="btn btn-rounded btn-danger btn-sm">{{ Auth::User()->userType->name }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-user"></i> Mi Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-settings"></i> Configuraciones</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Salir</a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                 
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>