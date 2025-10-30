<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assetsadmin/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/css/styles.min.css') }}" />
    @stack('styles')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
              <p></p>
              <p></p>
                <div class="brand-logo d-flex align-items-center justify-content-center">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('assets/img/logo/logogo.png') }}" width="100" height="100"
                            alt="Logo" />
                    </a>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        @if(Auth::check() && Auth::user()->role === 'tempat_wisata')
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Data Tempat Wisata</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('tempatwisata.index') }}" aria-expanded="false">
                                    <span><i class="ti ti-article"></i></span>
                                    <span class="hide-menu">Daftar Tempat Wisata</span>
                                </a>
                            </li>
                        @elseif(Auth::check() && Auth::user()->role === 'tour_guide')
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Data Tour Guide</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('tourguide.index') }}" aria-expanded="false">
                                    <span><i class="ti ti-article"></i></span>
                                    <span class="hide-menu">Profil Tour Guide</span>
                                </a>
                            </li>
                        @endif
                        <li class="nav-small-cap mt-4">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Action</span>
                        </li>
                        <li class="sidebar-item">
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button class="sidebar-link btn btn-link w-100 text-start" style="padding-left:2rem;" type="submit">
                                    <span><i class="ti ti-login"></i></span>
                                    <span class="hide-menu">LogOut</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assetsadmin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/app.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/dashboard.js') }}"></script>
</body>

</html>
