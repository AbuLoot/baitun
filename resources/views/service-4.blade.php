@extends('layout')

@section('title_description', $page->title_description)

@section('meta_description', $page->meta_description)


@section('content')
<header class="page-header" data-background="/filemanager/services/bg-service-2.jpg" data-stellar-background-ratio="1.15">
	<div class="container">
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->headline }}</p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Главная</a></li>
      <li class="breadcrumb-item active" aria-current="page">Услуги</li>
      <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
    </ol>
	</div>
</header>

<section class="about-content">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        {!! $page->content !!}
      </div>
    </div>
  </div>
</section>

<!-- App Form -->
<section class="intro mt-20 pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="content-box">
          {!! $main->short_description !!}
        </div>
      </div>
      <div class="col-lg-6">
        <figure>
          <div class="pattern-bg" -data-stellar-ratio="1.07"></div>
          <div class="holder" -data-stellar-ratio="1.10">
            <div class="app-form">
              <h3 class="font-brand">Хотите чтобы мы позвонили Вам? Тогда оставьте заявку!</h3>
              <form action="/send-app" name="contact" method="post">
                @csrf
                <div class="form-group">
                  <span>Ваше имя</span>
                  <input type="text" name="name" id="name" minlength="2" maxlength="40" autocomplete="off" required>
                </div>
                <div class="form-group"> 
                  <span>Введите номер телефона</span>
                  <input type="tel" pattern="(\+?\d[- .]*){7,13}" name="phone" minlength="5" maxlength="20" required>
                </div>
                <div class="form-group"><br>
                  <button type="submit" name="submit" class="btn btn-black btn-lg btn-block">Оставить заявку <i class="fas fa-caret-right"></i></button>
                </div>
              </form>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- Services 2 -->
<section class="section-services-2">
  <div class="container">
    <div class="row no-gutters-">
      <div class="col-12">
        <h2 class="h1 font-brand text-center">Дополнительные <span class="color-brown">Услуги</span></h2>
        <small>&nbsp;</small>
      </div>
      <?php foreach ($page_services as $page_service) : ?>
        <div class="col-md-4 col-sm-6">
          <div class="card">
            <div class="image-cover">
              <img src="/filemanager/{{ $page_service->icon }}" class="img-fluid">
            </div>
            <div class="card-content">
              <h2 class="h1 text-center mb-5">{{ $page_service->title }}</h2>
              <h5 class="card-text">{{ $page_service->headline }}</h5>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/uslugi/{{ $page_service->slug }}" class="btn btn-outline-brown text-white mb-1">Подробнее</a>
                <button type="button" class="btn btn-outline-brown text-white mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
@endsection


@section('scripts')

@endsection