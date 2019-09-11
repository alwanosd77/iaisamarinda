<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @yield('css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Selamat Datang</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/epanel">Ikatan Apoteker Indonesia</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/epanel">IAI</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MENU UTAMA</li>
                        <li class="{{ active(['admin.dasbor']) }}">
                            <a href="{{route('admin.dasbor')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li class="{{ active(['admin.profil','admin.profil.*']) }}">
                            <a class="nav-link" href="{{route('admin.profil')}}">
                                <i class="fas fa-user-ninja"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ active(['admin.berita','admin.berita.*','admin.agenda','admin.agenda.*','admin.artikel','admin.artikel.*']) }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Informasi</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ active(['admin.berita','admin.berita.*']) }}"><a class="nav-link" href="{{route('admin.berita')}}">
                                    <i class="fas fa-newspaper"></i>
                                        <span>Berita</span>
                                    
                                </a></li>
                                <li class="{{ active(['admin.agenda','admin.agenda.*']) }}"><a class="nav-link" href="{{route('admin.agenda')}}">
                                    <i class="fas fa-calendar"></i>
                                        <span>Agenda</span>
                                    
                                </a></li>
                                <li class="{{ active(['admin.artikel','admin.artikel.*']) }}"><a class="nav-link" href="{{route('admin.artikel')}}">
                                    <i class="fas fa-file"></i>
                                    <span>Artikel</span>
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{ active(['admin.slider','admin.slider.*','admin.link','admin.link.*']) }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-plus"></i> <span>Features</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ active(['admin.slider','admin.slider.*']) }}"><a class="nav-link" href="{{route('admin.slider')}}">
                                    <i class="fas fa-file-image"></i>
                                        <span>Slider</span>
                                    
                                </a></li>
                                <li class="{{ active(['admin.link','admin.link.*']) }}"><a class="nav-link" href="{{route('admin.link')}}">
                                    <i class="fas fa-link"></i>
                                        <span>Tautan</span>
                                    
                                </a></li>
                                
                            </ul>
                        </li>
                        <li class="{{ active(['admin.album','admin.album.*','admin.photo','admin.photo.*']) }}">
                                <a class="nav-link" href="{{route('admin.album')}}">
                                    <i class="fas fa-camera    "></i>
                                    <span>Galeri</span>
                                </a>
                            </li>
                        <li class="{{ active(['admin.kontak','admin.kontak.*']) }}">
                            <a class="nav-link" href="{{route('admin.kontak')}}">
                                <i class="fas fa-id-card-alt    "></i>
                                <span>Kontak</span>
                            </a>
                        </li>
                        <li class="{{ active(['admin.peraturan','admin.peraturan.*','admin.unduhan','admin.unduhan.*']) }}">
                            <a class="nav-link" href="{{route('admin.peraturan')}}">
                                <i class="fas fa-book-open    "></i>
                                <span>Peraturan</span>
                            </a>
                        </li>
                        @if(Auth::user()->level=="admin")
                        <li class="menu-header">WEB SETTING</li>
                        <li class="{{ active(['admin.umum','admin.umum.*']) }}">
                            <a class="nav-link" href="{{route('admin.umum.edit')}}">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span>Informasi Umum</span>
                            </a>
                        </li>
                        <li class="{{ active(['admin.operator','admin.operator.*']) }}">
                            <a class="nav-link" href="{{route('admin.operator')}}">
                                <i class="fas fa-user-lock    "></i>
                                <span>Operator</span>
                            </a>
                        </li>
                        @endif
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
    <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')

    <!-- Page Specific JS File -->
    @yield('js')

</body>

</html>
