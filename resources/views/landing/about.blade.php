@extends('layouts.master')

@section('title')
    About Us
@endsection

@section('header')
class="fixed-top no-head"
@endsection

@section('body')
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About Bali Asri</h2>
          </div>

      <div class="row p-3">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>History of Bali Asri</h3>
          <p class="font-italic mt-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="row p-3">
        <div class="col-lg-6 order-1  order-lg-1" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2  content" data-aos="fade-right">
          <h3>What do we serve</h3>
          <p class="font-italic mt-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>


    </div>
  </section><!-- End About Section -->

  <section id="features" class="features" style="background-color: #f2f2f2">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>What makes us strong?</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
          <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
            <i class="far fa-chart-bar"></i>
            <h4 class="ml-4">Quality</h4>
            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
            <i class="far fa-hourglass"></i>
            <h4>Time Management</h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
            <i class="far fa-clock"></i>
            <h4>Quickness</h4>
            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
          </div>
          <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
            <i class="fas fa-project-diagram"></i>
            <h4>Relation</h4>
            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
          </div>
        </div>
        <div class="image col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <img src="{{ url('img/features.svg') }}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->
@endsection
