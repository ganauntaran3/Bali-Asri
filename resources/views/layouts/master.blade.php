<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Vendor CSS Files -->
  <link href="https://127.0.0.1:8000/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://127.0.0.1:8000/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://127.0.0.1:8000/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://127.0.0.1:8000/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://127.0.0.1:8000/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://127.0.0.1:8000/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c32c656cb.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header id="header" class="fixed-top {{ Request::is('baliasri/contact', 'baliasri/about') ? 'no-head' : '' }}">
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Bali Asri</a></h1>
          {{--  <!-- Uncomment below if you prefer to use an image logo -->  --}}

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/home') ? 'active' : '' }}" href="{{ url('baliasri/home') }}">Home</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/products') ? 'active' : '' }}" href="{{ url('baliasri/product') }}">Products</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/service') ? 'active' : '' }}" href="#services">Services</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/about') ? 'active' : '' }}" href="{{ url('baliasri/about') }}">About Us</a></li>
              <li><a class="nav-link scrollto {{ Request::is('baliasri/contact') ? 'active' : '' }}" href="{{ url('baliasri/contact') }}">Contact Us</a></li>
            </ul>
    <i class="fas fa-bars mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->

        </div>
      </header><!-- End Header -->



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

        <div class="row justify-content-between">

          <div class="col-lg-2 col-md-6 footer-links align-self-end">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact align-self-end text-end pacifico">
            <h3>Bali Asri</h3>
            <p>
              Denpasar, Bali 80116<br>
              Indonesia<br><br>
              <strong>Email:</strong> Info@gmail.com<br>
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
          <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->







</body>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://127.0.0.1:8000/vendor/aos/aos.js"></script>
<script src="https://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://127.0.0.1:8000/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://127.0.0.1:8000/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://127.0.0.1:8000/vendor/php-email-form/validate.js"></script>
<script src="https://127.0.0.1:8000/vendor/purecounter/purecounter.js"></script>
<script src="https://127.0.0.1:8000/vendor/swiper/swiper-bundle.min.js"></script>

</html>
