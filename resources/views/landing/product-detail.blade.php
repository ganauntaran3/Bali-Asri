@extends('layouts.master')

@section('title')
Detail Product
@endsection

@section('header')
class="fixed-top no-head"
@endsection

@section('body')
<main id="main">


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 6rem">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('cover/'.$products->img) }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $products->name }}</h3>
              <ul>
                <li><strong>Category</strong>: {{ $products->category->category }}</li>
                <li><strong>Price</strong>: IDR {{ $products->price }}</li>
                <li><strong>Description</strong>:
                    <p>
                        {!! $products->desc !!}
                      </p>
                </li>
              </ul>

              <div class="text-center"><a href="https://wa.me/6281999349788?text=Saya%20tertarik%20dengan%20produk%20{{ $products->name }}"><button type="submit" class="button-buy">Order</button></a></div>
            </div>
            <div class="portfolio-description">

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
