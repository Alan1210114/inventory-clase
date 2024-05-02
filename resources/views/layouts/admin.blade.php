<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ALCAVA Constructora</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/dist/css/adminLTE.min.css">
    <!-- icheck -->
    <link rel="stylesheet" href="/css/icheck-bootstrap.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">-->
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>

    <script src="https://unpkg.com/xlsx@latest/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <style>
        .contenedor {
            background: #EEE;
            align-items: center;
            display: flex;
            justify-content: center;
            height: 100%;
        }

        .elementoCentrado {
            background: #666;
            height: 100px;
            width: 100px;
        }

        .my-lst :hover {
            /*  transform: scale(1.04);*/
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);

        }

        .loader {
            position: fixed;
            left: 50%;
            top: 50%;
            z-index: 100;
            border: 20px solid #EAF0F6;
            border-radius: 50%;
            border-top: 20px solid #FF7A59;
            width: 200px;
            height: 200px;
            margin-top: -100px;
            margin-left: -100px;
            animation: spinner 2s linear infinite;
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="loader" style="display: none"></div>

    <!-- Modal -->
    <div class="modal fade" id="buscarCliente" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Busqueda de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="input-group mb-3"><input type="text" id="clientesrch" name="clientesrch"
                                class="form-control input-text form-control-sm" placeholder="Nombre Cliente"
                                aria-label="Nombre cliente" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success-warning btn-sm" type="button"><i
                                        class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-3" style="display:none" id="loading-srch"><img
                                src="/images/loaderbar30-1.gif">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="height:250px; overflow-y: scroll">
                            <table class="table table-stripped table-bordered table-sm" id="tblclientes"
                                style="font-size:13px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Folio ID</th>
                                        <th>Nombre</th>
                                        <th>Fraccionamiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary">Understood</button>-->
                </div>
            </div>
        </div>
    </div>

    <!-- end modal -->


    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <!--
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            -->
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-6">
                @if (Auth::user()->REL_roles->REL_permisos_roles->where('idPermiso', 1)->first()->Ver ?? false)
                    <div class="input-group input-group-sm">

                        <input class="form-control form-control-navbar col-md-12" id="txtSearch" type="search"
                            placeholder="Buscar Cliente" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="button" id="btnSearch" data-toggle="modal"
                                data-target="#buscarCliente">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                @endif
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- aqui empieza-->
                <li class="nav-item" id="tasks">
                    <a class="nav-link" href="/admin/tasks/todos">
                        <img src="/images/tasks-icon.png" width="22px" height="22px"
                            title="Agregar tareas de mejoras al sistema">
                        <span class="badge badge-pill badge-dark navbar-badge" id="badge_1"></span>
                    </a>
                </li>

                <li class="nav-item" id="cambioclientelote">
                    <a class="nav-link" href="#">
                        @if (Auth::user()->REL_roles->REL_permisos_roles->where('idPermiso', 1)->first()->MostrarDatos ?? false)
                            <img src="/images/lote-icon.png" width="22px" height="22px"
                                title="Avisos Cambios de Cliente en Lotes">
                        @endif
                        <span class="badge badge-pill badge-dark navbar-badge" id="countCambiosLotes"></span>
                    </a>
                </li>

                <li class="nav-item" id="limiteefectvo">
                    <a class="nav-link" href="#">
                        @if (Auth::user()->REL_roles->REL_permisos_roles->where('idPermiso', 1)->first()->MostrarDatos ?? false)
                            <img src="/images/moneylimit.png" width="22px" height="22px"
                                title="Avisos limite de Depositos efectivo">
                        @endif
                        <span class="badge badge-pill badge-info navbar-badge" id="countLimiteEfectivo"></span>
                    </a>
                </li>
                @if (Auth::user()->REL_roles->REL_permisos_roles->where('idPermiso', 1)->first()->MostrarDatos ?? false)
                    <li class="nav-item" id="avisosconst" title="Avisos construcción">
                        <a class="nav-link" href="#">
                            <i class="fa fa-exclamation-triangle" style="color:orange"></i>
                            <span class="badge badge-pill badge-primary navbar-badge" id="countAvisos"></span>
                        </a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-pill badge-danger navbar-badge" id="countmessages">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="listusers">
                        @foreach (App\Models\Users::all() as $user)
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="/admin/usuarios/avatar/{{ $user->id }}" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            {{ $user->nombre }} {{ $user->apellidos }}
                                            <span
                                                class="float-right text-sm text-{{ $user->active->status ?? 'primary' }}"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        {{--
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p> --}}
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                        {{--
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/dist/img/user8-128x128.jpg" alt="User Avatar"
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
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/dist/img/user3-128x128.jpg" alt="User Avatar"
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
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
                --}}
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-pill badge-warning navbar-badge" id="countnotifications">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                <!-- aqui termina-->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/images/logos/logocircle.png" alt="SISADCOIN" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">SISADCOIN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/admin/usuarios/avatar" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/admin/usuarios/myprofile"
                            class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name . ' ' . \Illuminate\Support\Facades\Auth::user()->email }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon classwith font-awesome or any other icon font library -->
                        @if (\Illuminate\Support\Facades\Auth::user() !== null)
                            @php
                            $color='#FFFFFF';
                                //$Menus = DB::raw('SELECT permisos.color,permisos.nombrePermiso,permisos.icon,permisos.image,permisos.route,permisos_roles.orden,permisos.isgroup,permisos.route FROM permisos_roles inner join permisos on permisos_roles.idPermiso=permisos.id where permisos_roles.idRol'.\Illuminate\Support\Facades\Auth::user()->idRole.' order by permisos_roles.orden asc');
                                $Menus = DB::table('permisos_roles')
                                    ->select(
                                        'permisos.color',
                                        'permisos.nombrePermiso',
                                        'permisos.icon',
                                        'permisos.image',
                                        'permisos.route',
                                        'permisos_roles.orden',
                                        'permisos.isgroup',
                                        'permisos.route',
                                    )
                                    ->join('permisos', 'permisos_roles.idPermiso', '=', 'permisos.id')
                                    ->where('permisos_roles.idRol', '=', Auth::user()->idRole)
                                    ->orderBy('permisos_roles.orden', 'ASC')
                                    ->get();
                                //dd($Menus);
                            @endphp
                            @foreach ($Menus as $menu)
                                @if ($menu->isgroup)
                                    @php
                                        $color = $menu->color;
                                    @endphp
                                    @if ($menu->orden > 1)
                    </ul>
                    </li>
                    @endif
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            @if ($menu->image == '' || $menu->image == null)
                                <i class="{{ $menu->icon }} nav-icon"></i>
                            @else
                                <img src="/images/{{ $menu->image }}">
                            @endif
                            <p style="color:{{ $color }}">
                                {{ $menu->nombrePermiso }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        @else
                            <li class="nav-item">
                                <a href="{{ route($menu->route ?? '') }}" class="nav-link"
                                    onclick="$('.loader').show()">
                                    &nbsp;&nbsp;&nbsp;<img src="/images/Navigate-right-icon.png">
                                    @if ($menu->image == '' || $menu->image == null)
                                        <i class="{{ $menu->icon }} nav-icon"></i>
                                    @else
                                        <img src="/images/{{ $menu->image }}">
                                    @endif
                                    <p style="color:{{ $color }}">{{ $menu->nombrePermiso }}</p>
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-arrow-left"></i>
                            <p>
                                Salir del Sistema
                                <span class="right badge badge-danger">Salir</span>
                            </p>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>

                        </a>
                    </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $Title ?? '' }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin/home">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{ $ActiveMenu ?? '' }}</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- MODAL AVISOS -->
            <div id="myModalAvisos" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Avisos y Notificaciones</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row bg-gradient-blue">
                            <div class="col-md-1"></div>
                            <div class="col-md-2">Fecha</div>
                            <div class="col-md-2">Tipo</div>
                            <div class="col-md-5">Descripcion</div>
                            <div class="col-md-2">Usuario</div>
                        </div>
                        <div class="modal-body" id="avisosbody" style="overflow-y: scroll; height: 450px">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- FIN MODAL AVISOS -->


            <!-- MODAL Limite Efectivo -->
            <div id="myModalLimiteEfectivo" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Avisos Limite de Efectivo</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row bg-gradient-green">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">Fecha</div>
                            <div class="col-md-2">Tipo</div>
                            <div class="col-md-2">Descripcion</div>
                            <div class="col-md-4">Cliente</div>
                        </div>
                        <div class="modal-body" id="limiteefectivobody" style="overflow-y: scroll; height: 450px">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- FIN MODAL LIMITE EFECTIVO -->

            <!-- MODAL Limite Efectivo -->
            <div id="myModalCambioClienteLote" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Avisos Cambio de Cliente en Lotes</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row bg-gradient-indigo">
                            <div class="col-md-2"></div>
                            <div class="col-md-2">Fecha</div>
                            <div class="col-md-2">Tipo</div>
                            <div class="col-md-4">Descripcion</div>
                            <div class="col-md-2">Usuario</div>
                        </div>
                        <div class="modal-body" id="cambioclientelotebody" style="overflow-y: scroll; height: 450px">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- FIN MODAL LIMITE EFECTIVO -->


            <!-- Main content -->
            <section class="content">
                @yield('contenido')
                <!-- Default box -->
                {{--  --}}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            <strong>Copyright &copy; 2021 <a href="https://hrgsolutions.sytes.net">HRG Solutions - ALCAVA
                    CONSTRUCTORA</a>.</strong>
            Todos los derechos
            reservados.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!--<script src="/plugins/jquery/jquery.min.js"></script>-->
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--<script src="/plugins/popper/popper.js"></script>-->
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>-->
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
    <!--<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <audio class="audio" id="notificacion">
        <source src="/sounds/campana.mp3" type="audio/mp3">
    </audio>
    <audio class="audio" id="audioaviso">
        <source src="/sounds/msn-alert.mp3" type="audio/mp3">
    </audio>

</body>
<script>
    $(document).ready(function() {

                function AutoLogout() {

                    Swal.fire({
                        title: 'Demasiado tiempo inactivo',
                        text: "Quiere reiniciar session ?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, Saldra del sistema!',
                        cancelButtonText: 'No, seguir en el sistema'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            $.post("/logout", {
                                "_token": "{{ csrf_token() }}"
                            }, function() {
                                Swal.fire(
                                    'Session TimeOut',
                                    'Tu session Expiró, redireccionando a entrar de nuevo!',
                                    'info'
                                );
                                window.location.replace("/login")
                            });
                        }
                    })
                }
</script>

</html>
