@extends('layout')

@section('title_description', $page->meta_title)

@section('meta_description', $page->meta_description)


@section('content')

  <header class="page-header" data-background="/filemanager/{{ $page->icon }}" data-stellar-background-ratio="1.15">
    <div class="container">
      <h1>{{ $page->title }}</h1>
      <p>{{ $page->headline }}</p>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
      </ol>
      <div class="social-media">
        <h6>МЕДИА</h6>
        <ul>
          <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </header>

  <section class="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h4>Наши <span>Контакты</span></h4>
          <small>&nbsp;</small>
        </div>
        <div class="col-lg-3 col-md-6"> 
          <address>
            <h4>Посетите нас</h4>
            <p>Казахстан, г.Шымкент, ул.Конаева 3/3 2-этаж</p>
          </address>
        </div>
        <div class="col-lg-3 col-md-6"> 
          <address>
            <h4>Скажите Алло</h4>
            <p><a href="tel:+77750450008">+7(775)045-00-08</a><br> <a href="mailto:info@baitun.kz">info@baitun.kz</a></p>
          </address>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="map">
            <div class="pattern-bg" data-stellar-ratio="1.03"></div>
            <div class="holder" data-stellar-ratio="1.07">
              <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A01ff02ba49cfc0d873672fcc55f7e1b6a8303ad8e2c900a9b97e80e475494bad&amp;source=constructor" width="100%" height="665" frameborder="0"></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form">
            <h4>Форма для <span>Связи</span></h4><br>
            <form action="/send-app" name="contact" method="post">
              @csrf
              <div class="form-group">
                <span>Ваше имя</span>
                <input type="text" name="name" id="name" minlength="2" maxlength="40" autocomplete="off" required>
              </div>
              <div class="form-group"> 
                <span>Ваш e-mail</span>
                <input type="email" name="email" id="email" autocomplete="off" required>
              </div>
              <div class="form-group"> 
                <span>Введите номер телефона</span>
                <input type="tel" pattern="(\+?\d[- .]*){7,13}" name="phone" minlength="5" maxlength="20" required>
              </div>
              <div class="form-group"> 
                <span>Ваш текст</span>
                <textarea name="message" id="message" autocomplete="off" required></textarea>
              </div>
              <div class="form-group">
                <button id="submit" type="submit" name="submit">Отправить</button>
              </div>
            </form>
            <div class="form-group">
              <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
              <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
            </div>
          </div>
        </div>
     </div>
    </div>
  </section>

@endsection


@section('scripts')

@endsection