@extends('layout')

@section('title_description', $product->title_description)

@section('meta_description', $product->meta_description)


@section('content')

<?php $images = unserialize($product->images); ?>
<header class="page-header" data-background="/img/products/{{ $product->path.'/'.$images[0]['image'] }}" data-stellar-background-ratio="1.15">
  <div class="container">
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->title_extra }}</p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Главная</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
    </ol>
  </div>
</header>

<section class="projects-section">
  <div class="container">
    {!! $product->characteristic !!}
    <br>
    {!! $product->description !!}

  </div>
</section>

<section class="photo-gallery">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="h1">Галлерея</h2>
        <ul class="gallery">
          <?php foreach ($images as $image) : ?>
            <li><a href="/img/products/{{ $product->path.'/'.$image['image'] }}" data-fancybox><img src="/img/products/{{ $product->path.'/'.$image['present_image'] }}" alt="Image"></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection