<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#282828"/>
  <title>@yield('title_description', 'Baitun Project - Архитектурно Строительная Компания')</title>
  <meta name="description" content="@yield('meta_description', 'Baitun Project - Архитектурно Строительная Компания')">
  <meta name="author" content="issayev.adilet@gmail.com">
  <!-- <meta name="keywords" content="homepark, realestate, flat, apartment, benefits, facility, consultation, home, house, studio, pool, animation, transportation"> -->

  <!-- SOCIAL MEDIA META
  <meta property="og:description" content="Homepark | Real Estate & Luxury Homes">
  <meta property="og:image" content="http://www.themezinho.net/homepark/preview.png">
  <meta property="og:site_name" content="homepark">
  <meta property="og:title" content="homepark">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.themezinho.net/homepark"> -->

  <!-- FAVICON FILES -->
  <link rel="icon" href="/img/favicon.png">
  <link rel="shortcut icon" href="/img/favicon.png">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="/css/fontawesome.min.css">
  <link rel="stylesheet" href="/css/fancybox.min.css">
  <link rel="stylesheet" href="/css/odometer.min.css">
  <link rel="stylesheet" href="/css/swiper.min.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/custom.css">
</head>
<body class="page-loaded">
<?php
  $data_1 = unserialize($parts[0]->data_1);
  $data_2 = unserialize($parts[0]->data_2);
  $data_3 = unserialize($parts[0]->data_3);
  $phones = explode('/', $data_2['value']);
?>
<!-- Mobile nav -->
<div class="side-navigation">
  <div class="menu">
    <ul>
      <li><a href="/">Главная</a>
      <?php $traverse = function ($nodes, $prefix = null) use (&$traverse) { ?>
        <?php foreach ($nodes as $page) : ?>
          <?php if ($page->children && count($page->children) > 0) : ?>
            <li><a href="#{{ $page->slug }}">{{ $page->title }}</a>
              <ul>
                <?php $traverse($page->children, $page->slug.'/'); ?>
              </ul>
            </li>
          <?php else : ?>
            <?php if (in_array($page->slug, ['proekty', 'projects'])) : ?>
              <?php $category = \App\Category::where('slug', $page->slug)->first(); ?>
              <li><a href="#{{ $prefix . $page->slug }}">{{ $page->title }}</a>
                <ul>
                  <?php foreach ($category->products->sortBy('sort_id') as $product) : ?>
                    <li><a href="/p/{{ $product->slug }}">{{ $product->title }}</a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php else : ?>
              <li><a href="{{ $prefix . $page->slug }}">{{ $page->title }}</a></li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php }; ?>
      <?php $traverse($pages); ?>
    </ul>
    <br>
    {!! $parts[0]->content !!}
  </div>
</div>

<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="/"><img src="/img/logo-4.png" alt="Image"></a> </div>
      <div class="phone-email mr-4">
        <img src="/img/icon-phone.png" alt="Image">
        @foreach($phones as $phone)
          <?php $href = str_replace(' ', '', $phone); ?>
          <h4><a href="tel:{{ $href }}" class="text-white">{{ $phone }}</a></h4>
        @endforeach
        <small><a href="mailto:{{ $data_3['value'] }}">{{ $data_3['value'] }}</a></small>
      </div>
      {!! $parts[0]->content !!}
      <!-- <div class="language"> <a href="#">EN</a> <a href="#">UA</a> </div> -->
      <div class="hamburger d-block d-sm-none"> <span></span> <span></span> <span></span><span></span> </div>
    </div>
    <div class="menu">
      <ul>
        <li><a href="/">Главная</a>
        <?php $traverse = function ($nodes, $prefix = null) use (&$traverse) { ?>
          <?php foreach ($nodes as $page) : ?>
            <?php if ($page->children && count($page->children) > 0) : ?>
              <li><a href="#{{ $page->slug }}">{{ $page->title }}</a>
                <ul>
                  <?php $traverse($page->children, $page->slug.'/'); ?>
                </ul>
              </li>
            <?php else : ?>
              <?php if (in_array($page->slug, ['proekty', 'projects'])) : ?>
                <?php $category = \App\Category::where('slug', $page->slug)->first(); ?>
                <li><a href="/{{ $prefix . $page->slug }}">{{ $page->title }}</a>
                  <ul>
                    <?php foreach ($category->products->sortBy('sort_id') as $product) : ?>
                      <li><a href="/p/{{ $product->slug }}">{{ $product->title }}</a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php else : ?>
                <li><a href="/{{ $prefix . $page->slug }}">{{ $page->title }}</a></li>
              <?php endif; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php }; ?>
        <?php $traverse($pages); ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Content -->
@yield('content')

<!-- Modal App -->
<div class="modal fade" id="appForm" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-white-">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <h3 class="font-brand">Хотите чтобы мы позвонили Вам? Тогда оставьте заявку!</h3>
      <!-- <h3>Давайте его обсудем!</h3> -->
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
        <div class="form-group"> 
          <span>Комментарии</span>
          <textarea name="message" id="message" autocomplete="off" required></textarea>
        </div>
        <div class="form-group"><br>
          <button type="submit" name="submit" class="btn btn-black btn-lg btn-block">Оставить заявку <i class="fas fa-caret-right"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL MESSAGE -->
<div class="modal fade" id="message-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center text-uppercase">Статус заявки</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p class="alert {{ session('status') }}">{{ session('message') }}</p>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT BUTTONS -->
<!-- <div class="fixed-button">
  <a href="whatsapp://send?phone=+77750450008" target="_top" data-attr="whatsapp_call">
    <img src="/img/whatsapp-logo.png">
  </a>
</div>
<div class="fixed-button2">
  <a href="tel:+77750450008" target="_top" data-attr="phone">
    <img src="/img/phone-receiver.png">
  </a>
</div> -->

<!-- МЫ НАХОДИМСЯ, ГРАФИК РАБОТЫ, НАШИ РАБОТЫ -->
<section class="footer-bar">
  <div class="container">
    <div class="inner">
      <div class="row">
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon01.png" alt="Image"></figure>
          <h3>Мы находимся</h3>
          <p>{{ $data_1['value'] }}</p>
        </div>
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon02.png" alt="Image"></figure>
          <h3>График работы</h3>
          <p>Пн, Ср, Пт. <strong>09:00</strong> - <strong>20:00</strong> <br>
            Вт, Чт, Сб. <strong>09:00</strong> - <strong>18:00</strong></p>
        </div>
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon03.png" alt="Image"></figure>
          <h3>Наши контакты</h3>
          <p>
            @foreach($phones as $phone)
              <?php $href = str_replace(' ', '', $phone); ?>
              <a href="tel:{{ $href }}" class="text-white">{{ $phone }}</a><br>
            @endforeach
            <a href="mailto:{{ $data_3['value'] }}" class="text-white">{{ $data_3['value'] }}</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3- mb-4-">
        <!-- <p>Архитектурно-строительная компания Baitun Project занимается проектированием и строительством объектов от подготовки и сопровождения разрешительной документации до сдачи готового объекта под ключ.</p> -->
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <img src="/img/logo-4.png" alt="Image" class="logo">
        <div class="contact-box- text-white">
          <!-- <h5 class="color-gold">CALL CENTER</h5> -->
          @foreach($phones as $phone)
            <?php $href = str_replace(' ', '', $phone); ?>
            <h3><a href="tel:{{ $href }}" class="text-white">{{ $phone }}</a></h3>
          @endforeach
          <p>
            Email: <a href="mailto:{{ $data_3['value'] }}" class="text-white">{{ $data_3['value'] }}</a><br>
          </p>
          {!! $parts[0]->content !!}
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase color-gold">Страницы</h5>
        <ul class="footer-menu">
          <li><a href="/">Главная</a>
          <?php $traverse = function ($nodes, $prefix = null) use (&$traverse) { ?>
            <?php foreach ($nodes as $page) : ?>
              <?php if ($page->children && count($page->children) > 0) : ?>
                <li><a href="#{{ $page->slug }}">{{ $page->title }}</a>
                  <ul>
                    <?php $traverse($page->children, $page->slug.'/'); ?>
                  </ul>
                </li>
              <?php else : ?>
                <?php if (in_array($page->slug, ['proekty', 'projects'])) : ?>
                  <?php continue; ?>
                  <?php $category = \App\Category::where('slug', $page->slug)->first(); ?>
                  <li><a href="/{{ $prefix . $page->slug }}">{{ $page->title }}</a>
                    <ul>
                      <?php foreach ($category->products->sortBy('sort_id') as $product) : ?>
                        <li><a href="/p/{{ $product->slug }}">{{ $product->title }}</a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                <?php else : ?>
                  <li><a href="/{{ $prefix . $page->slug }}">{{ $page->title }}</a></li>
                <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php }; ?>
          <?php $traverse($pages); ?>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase color-gold">Проекты</h5>
        <ul class="footer-menu">
          <?php $category = \App\Category::where('slug', 'proekty')->first(); ?>
          <?php foreach ($category->products->sortBy('sort_id') as $product) : ?>
            <li><a href="/p/{{ $product->slug }}">{{ $product->title }}</a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-12">
        <span class="copyright">© <?= date('Y') ?> Baitun Project | Все права зарезервированы</span>
        <span class="creation">Связь с разработчиком сайта: <a href="#">issayev.adilet@gmail.com</a></span>
      </div>
    </div>
  </div>
</footer>

<script src="//code.jivosite.com/widget.js" data-jv-id="1wTqJ8Oodo" async></script>

<!-- JS FILES --> 
<script src="/js/jquery.min.js"></script> 
<script src="/js/popper.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/swiper.min.js"></script> 
<script src="/js/fancybox.min.js"></script> 
<script src="/js/odometer.min.js"></script> 
<!-- <script src="/js/wow.min.js"></script>  -->
<!-- <script src="/js/text-rotater.js"></script>  -->
<!-- <script src="/js/isotope.min.js"></script>  -->
<script src="/js/jquery.stellar.js"></script> 
<script src="/js/scripts.js"></script>

@if (session('status'))
  <script type="text/javascript">
    $('#message-status').modal('show');
  </script>
@endif
</body>
</html>