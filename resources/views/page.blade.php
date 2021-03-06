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
    </div>
  </header>

  <section class="pt-100">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          {!! $page->content !!}
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')

@endsection