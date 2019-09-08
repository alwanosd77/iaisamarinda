<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ikatan Apoteker Indonesia - Pengurus Cabang Samarinda</title>
  <link rel="icon" type="image/png" href="{{asset('mdb/img/logo.png')}}"/>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom scripts -->
  
  @yield('css')
</head>

<body class="homepage-v1">

  <!-- Navigation -->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
      <div class="container-fluid justify-content-center align-items-center">
        <a href="/" class="navbar-brand">
          <img src="{{asset('mdb/img/4.png')}}">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4 mb-0">
              <a class="nav-link waves-effect waves-light font-weight-bold" href="/">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown ml-4 mb-0">
              <a class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFIL</a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                @foreach($profil as $profiles)
                <a class="dropdown-item waves-effect waves-light" href="{{route('profil',$profiles->slug)}}">{{$profiles->judul }}</a>
                <div class="dropdown-divider"></div>
                @endforeach
              </div>
            </li>
            <li class="nav-item dropdown ml-4 mb-0">
              <a class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                id="navbarDropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PELAYANAN</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-2">
                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-1.html">Permohonan Rekomendasi Praktek Apoteker</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-2.html">Permohonan Mutasi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect waves-light" href="../postpage/v-3.html">Resertifikasi Apoteker</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4  mb-0">
              <a href="#" class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">INFORMASI</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-3">
                <a class="dropdown-item waves-effect waves-light" href="/berita">Berita</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect waves-light" href="../author page/v-2.html">Agenda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect waves-light" href="../author page/v-3.html">Galeri</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4  mb-0">
              <a href="#" class="nav-link dropdown-toggle waves-effect waves-light font-weight-bold"
                id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">KONTAK</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-3">
                @foreach($kontak as $kontakes)
                <a class="dropdown-item waves-effect waves-light" href="{{route('kontak',$kontakes->slug)}}">{{$kontakes->judul }}</a>
                <div class="dropdown-divider"></div>
                @endforeach
            </li>
            <li class="nav-item ml-4 mb-0">
              <a class="nav-link waves-effect waves-light font-weight-bold" href="#">PERATURAN
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>

        

      </div>

    </nav>
    <!-- Navbar -->

    <!-- Intro Section -->
    @yield('intro')
    <!-- Intro -->

  </header>
  <!-- Navigation -->

  <!-- Main layout -->
  <main>
    @yield('main')
     <!-- Sidebar -->
        
        <!-- Sidebar -->
  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer stylish-color-dark text-center text-md-left mt-4 pt-4">

    <!-- Footer Links -->
    <div class="container">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- First column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">About us</h6>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.</p>
        </div>
        <!-- First column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Second column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">PELAYANAN</h6>
          <p>
            <a href="#!">Permohonan Rekomendasi Praktek</a>
          </p>
          <p>
            <a href="#!">Permohonan Mutasi</a>
          </p>
          <p>
            <a href="#!">Resertifikasi Apoteker</a>
          </p>
        
        </div>
        <!-- Second column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Third column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">LINKS</h6>
          <p>
            <a href="#!">Collaboriation</a>
          </p>
          <p>
            <a href="#!">Media about me</a>
          </p>
          <p>
            <a href="#!">Newsletter</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>
        <!-- Third column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Fourth column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Fourth column -->

      </div>
      <!-- Footer links -->

      <hr>

      <div class="row py-3 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!-- Copyright -->
          <p class="text-center text-md-left grey-text">
            © 2019 Copyright:
          </p>
          <!-- Copyright -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="social-section text-center text-md-left">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- Social buttons -->

        </div>
        <!-- Grid column -->

      </div>

    </div>

  </footer>
  <!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('mdb/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>

  <!-- Custom scripts -->
  <script type="text/javascript">
    // Animation
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("{{asset('/mdb-addons/mdb-lightbox-ui.html')}}");
    });

  </script>
  @yield('script')
</body>

</html>
