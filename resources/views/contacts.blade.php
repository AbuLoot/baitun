@extends('layout')

@section('title_description', $page->meta_title)

@section('meta_description', $page->meta_description)


@section('content')

  <header class="page-header" data-background="images/services/bg-service-1.jpg" data-stellar-background-ratio="1.15">
    <div class="container">
      <h1>{{ $page->title }}</h1>
      <p>{{ $page->headline }}</p>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
      </ol>
    </div>
  </header>

  <section class="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow fadeInUp"> <b>07</b>
          <h4><span>Homepark</span> Living Spaces</h4>
          <small>Smaller male cones </small>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
          <address>
            <strong>Visit Us</strong>
            <p>Kristiatik 15th Street, Floot 17<br> Kiev, Ukraine 78692</p>
          </address>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
          <address>
            <strong>Say Hello</strong>
            <p><a href="#">hello@homepark.com.ua</a> +380(98)298-59-73</p>
          </address>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="map">
            <div class="pattern-bg" data-stellar-ratio="1.03"></div>
            <div class="holder" data-stellar-ratio="1.07"> 
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2378765886474!2d-73.97644805915624!3d40.69075842971381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bb6c6fe52c7%3A0x2b3bb16e97b13c01!2sFort+Greene+Tennis+Courts!5e0!3m2!1sen!2str!4v1559831164025!5m2!1sen!2str" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form">  
            <form id="contact" name="contact" method="post">
              <div class="form-group">
                <input type="text" name="name" id="name" autocomplete="off" required>
                 <span>Your name</span>
              </div>
              <div class="form-group"> 
                <input type="text" name="email" id="email" autocomplete="off" required>
                <span>Your e-mail</span>
              </div>
              <div class="form-group"> 
                <input type="text" name="subject" id="subject" autocomplete="off" required>
                <span>Subject</span>
              </div>
              <div class="form-group"> 
                <textarea name="message" id="message" autocomplete="off" required></textarea>
                <span>Your message</span>
              </div>
              <div class="form-group">
                <button id="submit" type="submit" name="submit">Submit</button>
              </div>
            </form>
            <div class="form-group">
              <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
              <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
            </div>
          </div>
        </div>
     </div>
    </div>
  </section>

@endsection


@section('scripts')

@endsection