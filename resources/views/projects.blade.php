@extends('layout')

@section('title_description', $page->title_description)

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

  <!-- What we can? -->
  <section class="what-we-can">
    <div class="container">
      <div class="col-12">
        <h2 class="h1 font-brand text-center">Что мы умеем <span class="color-brown">Проектировать?</span></h2>
        <small class="subheading"></small>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">
        <?php foreach ($category->products as $product) : ?>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card">
              <div class="image-cover">
                <img src="/img/products/{{ $product->path.'/'.$product->image }}" class="img-fluid">
              </div>
              <div class="card-img-overlay">
                <h3 class="card-title">{{ $product->title }}</h3>
                <div class="card-action">
                  <h5 class="card-text">{{ $product->title_extra }}</h5>
                  <a href="/p/{{ $product->slug }}" class="btn btn-outline-brown btn-lg">Подробнее</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/6.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> спортивных комплексов</h3>
              <div class="card-action">
                <h5 class="card-text">Продумываем удобные объекты для спорта</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/05.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> бизнес-центров</h3>
              <div class="card-action">
                <h5 class="card-text">Воплощаем идеальный образ делового мира</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/03.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> частных домов</h3>
              <div class="card-action">
                <h5 class="card-text">Придаем форму вашим мечтам</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/3.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> учебных центров</h3>
              <div class="card-action">
                <h5 class="card-text">Создаем будущее новому поколению</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/1.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> ЖК</h3>
              <div class="card-action">
                <h5 class="card-text">Моделируем пространства для современной жизни</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card">
            <div class="image-cover">
              <img src="/img/projects/00.jpg" class="img-fluid">
            </div>
            <div class="card-img-overlay">
              <h3 class="card-title">Проектирование<br> интерьеров</h3>
              <div class="card-action">
                <h5 class="card-text">Преображаем пространства, создаём уникальный декор</h5>
                <a href="#" class="btn btn-outline-brown btn-lg">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


@section('scripts')

@endsection