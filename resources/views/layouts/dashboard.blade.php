<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudad de Dios</title>

    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href={{ url('dist/css/adminlte.min.css?v=3.2.0') }}>
    <!--Iconos de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--JSQUERY-->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!--Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--DataTable-->
    <link rel="stylesheet" href="{{ url('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">

                </li>

            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="#" class="brand-link">
                <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Ciudad de Dios</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-people-fill"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.usuarios.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Usuario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.usuarios.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de usuarios</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <!--Secretarias-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-person-rolodex"></i>
                                <p>
                                    Secretarias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.secretarias.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Secretaria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.secretarias.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de secretarias</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!--Pacientes-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-person-fill-check"></i>
                                <p>
                                    Pacientes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.pacientes.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Paciente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.pacientes.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de pacientes</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!--Consultorios-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-building"></i>
                                <p>
                                    Consultorios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.consultorios.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Consultorio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.consultorios.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de consultorios</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!--Doctores-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-person-fill-add"></i>
                                <p>
                                    Doctores
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.doctores.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Doctor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.doctores.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de doctores</p>
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <!--Horarios-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="bi bi-calendar-event"></i>
                                <p>
                                    Horarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.horarios.create') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Horario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.horarios.index') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de Horarios</p>
                                    </a>
                                </li>
                            </ul>

                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-box-arrow-left"></i>
                                <p>
                                    Cerrar Sesión

                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @if (($message = Session::get('mensaje')) && ($icono = Session::get('icono')) && ($titulo = Session::get('titulo')))
                <script>
                    Swal.fire({
                        icon: "{{ $icono }}",
                        title: "{{ $titulo }}",
                        text: "{{ $message }}",
                        showConfirmButton: false,
                        timer: 2500
                    });
                </script>
            @endif

            <div class="content">
                @yield('content')
            </div>

        </div>


    </div>



    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--Datatable-->
    <script src="{{url('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('../../plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('../../plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('../../plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!--Admin-->
    <script src="{{ url('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>
