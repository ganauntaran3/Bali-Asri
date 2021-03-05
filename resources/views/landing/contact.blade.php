@extends('layouts.master')

@section('title', 'Contact Us')

@section('header')
class="fixed-top no-head"
@endsection

@section('body')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Get in touch with us</h2>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
            <i class="fas fa-map-marker-alt"></i>
          <h3>Our Address</h3>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
            <i class="fas fa-envelope"></i>
          <h3>Email Us</h3>
          <p>baliasri@gmail.com</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
            <i class="fas fa-phone-alt"></i>
          <h3>Call Us</h3>
          <p>+62 895-246-545-63</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 ">
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.747109254997!2d115.19975951538983!3d-8.620260089981496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f254e7fd481%3A0xb7c515dd320b622d!2sGg.%20Taman%20Sari%2C%20Ubung%20Kaja%2C%20Kec.%20Denpasar%20Utara%2C%20Kota%20Denpasar%2C%20Bali%2080115!5e0!3m2!1sid!2sid!4v1614948332952!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6">
        <form action="{{ route('post-contact') }}" method="post" role="form" class="php-email-form">
            @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>

          <div class="my-3">
            @if (session()->has('message'))
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">{{ session('message') }}</div>
          @endif
          </div>
          <div class="text-center"><button type="submit" class="button-buy">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection
