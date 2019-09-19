@extends('layout')

@section('title_description', $page->title_description)

@section('meta_description', $page->meta_description)


@section('content')
<header class="page-header" data-background="/filemanager/services/bg-service-4.jpg" data-stellar-background-ratio="1.15">
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
<section class="intro mt-20">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="content-box">
          <h2 class="font-brand color-brown- ">Если вы готовы заказать проект, строительство или вам нужна консультация специалиста, звоните по телефону <a href="tel:+77750450008" class="text-white-">+7(775)045-00-08</a>. Или оставьте заявку через форму и мы перезвоним вам в течение дня.</h2>
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
                  <input type="email" pattern="(\+?\d[- .]*){7,13}" name="phone" minlength="5" maxlength="20" required>
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
@endsection


@section('scripts')

@endsection