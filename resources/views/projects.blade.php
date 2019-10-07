@extends('layout')

@section('title_description', $page->title_description)

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
      <div class="social-media d-block d-sm-none">
        <h6>МЕДИА</h6>
        <ul>
          <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
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
        <?php foreach ($category->products->sortBy('sort_id') as $product) : ?>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card">
              <div class="image-cover">
                <img src="/img/products/{{ $product->path.'/'.$product->image }}" class="img-fluid">
              </div>
              <div class="card-img-overlay">
                <h3 class="card-title">{{ $product->title }}</h3>
                <div class="card-action">
                  <h5 class="card-text">{{ $product->title_extra }}</h5>
                  <a href="/p/{{ $product->slug }}" class="btn btn-outline-brown text-white btn-lg-">Подробнее</a>
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