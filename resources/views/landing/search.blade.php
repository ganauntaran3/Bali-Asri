@extends('layouts.master')

@section('title')
    Products
@endsection

@section('header')
class="fixed-top no-head"
@endsection

@section('body')

<main>
      <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
              <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <form action="{{ url('baliasri/search') }}" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                            </div>
                              </form>
                        </div>
                    </div>
              </div>

              <div class="row gy-4">
                <h1>Category </h1>

                @foreach ($categories as $category)

                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box iconbox-blue">
                    <div class="icon">
                        <h4><a href="{{ url('baliasri/categories/'.$category->id) }}">{{$category->category}}</a></h4>
                      <i class="bx bxl-dribbble"></i>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>

            </div>
          </section><!-- End Services Section -->

          <section id="abot" class="abot">

            <div class="container ml-auto">
              <div class="row pb-5 mb-4">

                    @foreach ($productS as $productS)
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <!-- Card-->
                        <div class="card rounded shadow-sm border-0">
                            <div class="card-body p-4"><img src="{{ asset('cover/'.$productS->img) }}" alt="" class="img-fluid d-block mx-auto mb-3">
                                <h5 class="text-dark card-title">{{ $productS->name }}</h5>
                                <p class="small text-muted font-italic">IDR {{ $productS->price }}</p>

                                <div class="text-center"><a href="{{ route('product.detail', $productS->id) }}"><button type="submit" class="button-buy">Detail</button></a></div>
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
                    <h2>Discount</h2>
                  </div>

              <div class="row">
                @foreach ($productD as $productD)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><img src="{{ asset('cover/'.$productD->img) }}" alt="" class="img-fluid d-block mx-auto mb-3">
                            <h5 class="text-dark card-title">{{ $productD->name }}</h5>
                            <p class="small text-muted font-italic">IDR {{ $productD->price }}</p>

                            <div class="text-center"><a href="{{ route('product.detail', $productD->id) }}"><button type="submit" class="button-buy">Detail</button></a></div>
                        </div>
                    </div>
                </div>
                @endforeach

              </div>

            </div>
          </section><!-- End Counts Section -->

          <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Best Seller</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

             <div class="row">

                @foreach ($productB as $productB)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><img src="{{ asset('cover/'.$productB->img) }}" alt="" class="img-fluid d-block mx-auto mb-3">
                            <h5 class="text-dark card-title">{{ $productB->name }}</h5>
                            <p class="small text-muted font-italic">IDR {{ $productB->price }}</p>

                            <div class="text-center"><a href="{{ route('product.detail', $productB->id) }}"><button type="submit" class="button-buy">Detail</button></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
             </div>

            </div>
          </section>
          <!-- End Pricing Section -->






</main>

@endsection
