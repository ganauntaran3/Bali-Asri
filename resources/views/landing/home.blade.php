<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c32c656cb.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Bali Asri</a></h1>
          {{--  <!-- Uncomment below if you prefer to use an image logo -->  --}}

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">Products</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">About Us</a></li>
              <li><a class="nav-link scrollto" href="#team">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

        </div>
      </header><!-- End Header -->

      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1>Welcome to Bali Asri</h1>
              <h2>Find your taste of fashion and build your style here</h2>
              <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
              <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->

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

    <section id="abot" class="abot">

      <div class="container-fluid ml-auto">
        <div class="row pb-5 mb-4">

            <div class="section-title">
                <h2>Latest Products</h2>
              </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="#" class="text-dark card-title">Awesome product</a></h5>
                        <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="#" class="text-dark card-title">Awesome product</a></h5>
                        <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="#" class="text-dark card-title">Awesome product</a></h5>
                        <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5> <a href="#" class="text-dark card-title ">Awesome product</a></h5>
                        <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

        </div>
      </div>

    </section>

    <section id="counts" class="counts">
        <div class="container">

            <div class="section-title">
                <h2>testimonials</h2>

              </div>

          <div class="row counters">
            <div class="col-lg-4 col-sm-12 d-flex justify-content-center ">
                <figure class="snip1533">
                    <figcaption>
                      <blockquote>
                        <p>If you do the job badly enough, sometimes you dont get asked to do it again.</p>
                      </blockquote>
                      <h3>Wisteria Ravenclaw</h3>
                      <h4>Google Inc.</h4>
                    </figcaption>
                  </figure>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex justify-content-center ">
                <figure class="snip1533">
                    <figcaption>
                      <blockquote>
                        <p>If you do the job badly enough, sometimes you dont get asked to do it again.</p>
                      </blockquote>
                      <h3>Wisteria Ravenclaw</h3>
                      <h4>Google Inc.</h4>
                    </figcaption>
                  </figure>
            </div>
            <div class="col-lg-4 col-sm-12 d-flex justify-content-center ">
                <figure class="snip1533">
                    <figcaption>
                      <blockquote>
                        <p>If you do the job badly enough, sometimes you dont get asked to do it again.</p>
                      </blockquote>
                      <h3>Wisteria Ravenclaw</h3>
                      <h4>Google Inc.</h4>
                    </figcaption>
                  </figure>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->



          <section class="testimonials section-bg" >
                <div class="row">
                    {{--  galery  --}}
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    {{--  image  --}}
                                </div>
                                <div class="col-lg-12">
                                    {{--  image  --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                {{--  image  --}}
                            </div>
                        </div>
                    </div>

                    {{--  text-gallery  --}}
                    <div class="col-lg-5">

                    </div>
                </div>
          </section>

          <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Pricing</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="box">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li class="na">Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="box featured">
                    <h3>Business</h3>
                    <h4><sup>$</sup>19<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="box">
                    <h3>Developer</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                  <div class="box">
                    <span class="advanced">Advanced</span>
                    <h3>Ultimate</h3>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Pricing Section -->







</body>
<script>
    window.addEventListener('scroll', function (){
        let header = document.querySelector('#header');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('header-scrolled', windowPosition);
      });
q
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="http://127.0.0.1:8000/js/script.js"></script>
</html>
