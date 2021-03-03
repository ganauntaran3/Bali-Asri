<!DOCTYPE html>
    <html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
      <script src="https://kit.fontawesome.com/7c32c656cb.js" crossorigin="anonymous"></script>
      <!-- Page plugins -->
      <!-- Argon CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.1.0') }}" type="text/css">
    </head>

    <body class="bg-default">


      <!-- Main content -->
      <div class="main-content">
        <!-- Header -->

        <!-- Page content -->
        <div class="container mt-8 pb-5">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
              <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent pb-5">
                  <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                  <div class="btn-wrapper text-center">
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                      <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="#" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form role="form" method="POST" action="{{ route('authenticate') }}">
                      @csrf
                    <div class="form-group mb-3">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Username" name="username" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" name="password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-muted">Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit"  class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-6">
                  <a href="#" class="text-light"><small>Forgot password?</small></a>
                </div>
                <div class="col-6 text-right">
                  <a href="#" class="text-light"><small>Create new account</small></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="py-5" id="footer-main">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- Argon Scripts -->
      <!-- Core -->
      <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
      <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <!-- Argon JS -->
      <script src="../../assets/js/argon.js?v=1.1.0"></script>
      <!-- Demo JS - remove this in your project -->
      <script src="../../assets/js/demo.min.js"></script>
    </body>

    </html>
