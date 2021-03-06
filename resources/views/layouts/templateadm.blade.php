<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts este script es de Laravel los demas en la parte de abajo son del nuevo front end
    <script src="{{ asset('js/app.js') }}" defer></script>-->

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    <!-- Toastr.js para mensajes de informacion
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">-->
    @toastr_css
</head>
<body class="bg-dark">   
    <!-- Left Panel -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"><img src="{{ asset('images/logoHV.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <!-- <ul class="nav nav-pill"> -->
                    <li class="active">
                        <a href="{{ route('admin') }}"> <i class="menu-icon fa fa-home"></i>Inicio</a><!-- organizar ruta -->
                    </li>
                    
                    <h3 class="menu-title">Usuarios y fincas</h3><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Usuarios, cultivo y fincas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href=" {{ route('users.index') }} ">Lista de usuarios</a></li>
                            <li><i class="fa fa-bars"></i><a href=" {{ route('fincascultivosusers.index') }} ">Fincas y cultivos</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Informacion General</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Catalogos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('lotes.index') }}">Lotes</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('variedades.index') }}">Variedades</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('estados.index') }}">Estados</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('propiedades.index') }}">Propiedades</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Producciones</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('producciones.index') }}">Produccion total</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{ route('importproducciones') }}">Importar datos</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Labores</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="#">Grupos de labores</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{ route('labores.index') }}">Costos labores</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{ route('importlabores') }}">Importar datos</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Insumos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="{{ route('insumos.index') }}">Costos insumos</a></li>
                            <li><i class="menu-icon fa fa-map-o"></i><a href="{{ route('importinsumos') }}">Importar datos</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Informacion otros</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Lluvias</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ Auth::user()->name }}<img class="user-avatar rounded-circle" src="{{ asset('images/admin.png') }}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> --}}

                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-power -off"></i>Cerrar sesión</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
    @yield('content')
    <!-- Scripts para la plantilla -->
    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>

    <!-- Script para el select dinamico de ciudades y departamentos tambien debe ir jquery el cual ya lo trae la plantilla -->
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <!-- Script para el control y manejo de tablas -->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

    <!--Scripts individuales para cada uno de las tablas en un grupo de tabs 
    Original ->  <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script> -->

    <script>
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
     </script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
     </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table1').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table2').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table3').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table4').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table5').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table6').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table7').DataTable({
                responsive: true,
                language: {
                    url: 'assets/js/lib/data-table/es-ar.json' //Ubicacion del archivo con el json del idioma.
                }
            });
        });
    </script>

    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
</body>
</html>