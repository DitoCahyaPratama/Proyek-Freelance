<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/klorofil-common.js')}}"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html">Freelancers Admin</a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{url('admin/dashboard/get/all')}}" class="@if(Request::segment(2) == 'dashboard') active @endif"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{url('admin/user/get/all')}}" class="">Pengguna</a></li>
                                    <li><a href="{{url('admin/testimoni/get/all')}}" class="">Testimoni</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Transaction</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages2" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{url('admin/job/get/all')}}" class="">Pekerjaan</a></li>
                                    <li><a href="{{url('admin/project/get/all')}}" class="">Projek Tersedia</a></li>
                                    <li><a href="{{url('admin/projectclaims/get/all')}}" class="">Projek Dikerjakan</a></li>
                                    <li><a href="{{url('admin/projectclaims/get/all/done')}}" class="">Projek Selesai</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    @yield('content')
                    <!-- END OVERVIEW -->
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                {{-- <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p> --}}
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
</html>
