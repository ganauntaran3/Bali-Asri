@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('header')
class="fixed-top"
@endsection



@section('body')
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



<section id="abot" class="abot">

    <div class="container ml-auto">
      <div class="row pb-5 mb-4">

          <div class="section-title">
              <h2>Latest Products</h2>
            </div>

            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4"><img src="{{ asset('cover/'.$product->img) }}" alt="" class="img-fluid d-block mx-auto mb-3">
                        <h5 class="text-dark card-title">{{ $product->name }}</h5>
                        @php
                        $price = number_format($product->price)
                        @endphp
                        <p class="small text-muted font-italic">IDR {{ $price }}</p>

                        <div class="text-center"><a href="{{ route('product.detail', $product->id) }}"><button type="submit" class="button-buy">Detail</button></a></div>
                    </div>
                </div>
            </div>
            @endforeach



      </div>
    </div>

  </section>

  <section id="testimoni" class="testimoni">
      <div class="container">

          <div class="section-title">
              <h2>testimonials</h2>

            </div>

        <div class="row counters">
          <div class="col-lg-4 col-sm-12 d-flex justify-content-center ">
              <figure class="snip1533">
                  <figcaption>
                    <blockquote>
                      <p>Jika kamu gagal maka tidak berhasil</p>
                    </blockquote>
                    <h3>Abdoel Hadi</h3>
                    <h4>PT.Kukang Jaya</h4>
                  </figcaption>
                </figure>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex justify-content-center ">
              <figure class="snip1533">
                  <figcaption>
                    <blockquote>
                      <p>Setiap perjuangan pasti ada keringat, disetiap keringat pasti ada bau badan</p>
                    </blockquote>
                    <h3>Bill Get</h3>
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



        <section id="pricing" class="pricing section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>How do we works?</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

              <div class="text-center mt-5"><a href="{{ 'baliasri/about' }}" class="button-buy">Learn more</a></div>
            </div>

          </div>
        </section>
        <!-- End Pricing Section -->
@endsection
