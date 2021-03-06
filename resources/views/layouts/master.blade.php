<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c32c656cb.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header id="header" @yield('header')>
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="{{ url('baliasri/home') }}">Bali Asri</a></h1>
          <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{Request::is('baliasri/home') ? 'active' : ''}}" href="{{ url('baliasri/home') }}">Home</a></li>
              <li><a class="nav-link scrollto {{Request::is('baliasri/product*', 'baliasri/categories*', 'baliasri/search*') ? 'active' : ''}}" href="{{ url('baliasri/product') }}">Products</a></li>
              <li><a class="nav-link scrollto {{Request::is('baliasri/service') ? 'active' : ''}}" href="{{ url('baliasri/service') }}">Services</a></li>
              <li><a class="nav-link scrollto {{Request::is('baliasri/about') ? 'active' : ''}}" href="{{ url('baliasri/about') }}">About us</a></li>
              <li><a class="nav-link scrollto {{Request::is('baliasri/contact') ? 'active' : ''}}" href="{{ url('baliasri/contact') }}">Contact Us</a></li>
            </ul>
            <i class="fas fa-bars " style="color: #fff; font-size: 24px"></i>
          </nav>

        </div>
      </header>


    {{-- <header id="header" @yield('header')>
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Bali Asri</a></h1>
             <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/home') ? 'active' : '' }}" href="{{ url('baliasri/home') }}">Home</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/product*') ? 'active' : '' }}" href="{{ url('baliasri/product') }}">Products</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/service') ? 'active' : '' }}" href="{{ url('baliasri/service') }}">Services</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/about') ? 'active' : '' }}" href="{{ url('baliasri/about') }}">About Us</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/contact') ? 'active' : '' }}" href="{{ url('baliasri/contact') }}">Contact Us</a></li>
            </ul>
                <i class="fas fa-bars mobile-nav-toggle"></i>
          </nav>



        </div>
      </header> --}}

    {{--  <div class="container card-negative">
        <div class="row rounded-lg ">

            <div class="col-lg-4">
                <div class="card">
                    <div class="row ">
                        <div class="col-lg-6">
                            <img src="http://127.0.0.1:8000/img/Asset-1.jpg" class="img-fluid" alt="graphics">
                        </div>
                        <div class="col-lg-6 mb-4  ">
                            <h1 class="mb-4">Title</h1>
                            <p class="mb-4 ">Content</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="graphics">
                        </div>
                        <div class="col-lg-6 mb-4  ">
                            <h1 class="mb-4">Title</h1>
                            <p class=" ">Content</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="row ">
                        <div class="col-lg-6">
                            <img src="https://mdbootstrap.com/img/illustrations/graphics(4).png" class="img-fluid" alt="graphics">
                        </div>
                        <div class="col-lg-6 mb-4  ">
                            <h1 class="mb-4">Title</h1>
                            <p class="mb-4 ">Content</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>  --}}

    @yield('body')



          <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">

        <div class="row justify-content-between align-items-center">

          <div class="col-6 col-lg-2 col-md-6 col-sm-6 footer-links align-self-end">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{ url('baliasri/home') }}">Home</a></li>
              <li><a href="{{ url('baliasri/product') }}">Products</a></li>
              <li><a href="{{ url('baliasri/service') }}">Services</a></li>
              <li><a href="{{ url('baliasri/about') }}">About Us</a></li>
              <li><a href="{{ url('baliasri/contact') }}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-6 col-lg-3 col-md-6 col-sm-6 footer-contact align-self-end text-end pacifico">
            <h3>Bali Asri</h3>
            <p>
              Denpasar, Bali 80116<br>
              Indonesia<br><br>
              <strong>Email:</strong> baliasri@gmail.com<br>
            </p>
        </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong class="pacifico"><span>Bali Asri</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            {{--  <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/liense/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->  --}}
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="www.facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="www.instagram.com" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://wa.me/6281999349788?text=Halo%20saya%20ingin%20tahu%20tentang%20toko%20anda" class="google-plus"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->







</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
