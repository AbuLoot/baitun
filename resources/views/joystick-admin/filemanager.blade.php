@extends('joystick-admin.layout')

@section('content')

  @include('joystick-admin.partials.alerts')

  <div style="height: 600px;">
    <div id="fm"></div>
  </div>

@endsection

@section('head')
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

  <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('scripts')
  <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
