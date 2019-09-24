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

<!-- Mobile nav -->
<div class="side-navigation">
  <div class="menu">
    <ul>
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
                  <?php foreach ($category->products as $product) : ?>
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
    <br>
    <ul>
      <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i> Instagram</a></li>
      <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
      <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
      <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
    </ul>
  </div>
  <div class="side-content">
    <figure> <img src="/img/logo-4.png" alt="Image"> </figure>
    <p>Архитектурно-строительная компания Baitun Project занимается проектированием и строительством объектов от подготовки и сопровождения разрешительной документации до сдачи готового объекта под ключ.</p>
    <ul class="gallery">
      @foreach($mode->products->where('status', 1)->take(3) as $product)
        <?php $images = unserialize($product->images); ?>
        <li><a href="/img/products/{{ $product->path.'/'.$images[0]['image'] }}" data-fancybox><img src="/img/products/{{ $product->path.'/'.$images[0]['present_image'] }}" alt="$product->title }}"></a></li>
      @endforeach
    </ul>
    <address>Казахстан, г.Шымкент, ул.Конаева 3/3 2-этаж</address>
    <h6><a href="tel:+77750450008" class="text-white">+7(775)045-00-08</a></h6>
    <p>
      Email: <a href="mailto:info@baitun.kz">info@baitun.kz</a><br>
      Instagram: <a href="https://www.instagram.com/baitunproject/" class="text-white">@Baitunproject</a>
    </p>
    <small>© <?= date('Y') ?> Baitun Project | Все права зарезервированы</small>
  </div>
</div>

<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="/"><img src="/img/logo-4.png" alt="Image"></a> </div>
      <div class="phone-email mr-1-">
        <img src="/img/icon-phone.png" alt="Image">
        <h4><a href="tel:+77750450008" class="text-white">+7(775)045-00-08</a></h4>
        <small><a href="mailto:info@baitun.kz">info@baitun.kz</a></small>
      </div>

      <ul class="social-media">
        <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      </ul>
      <!-- <div class="language"> <a href="#">EN</a> <a href="#">UA</a> </div> -->
      <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
    </div>
    <div class="menu">
      <ul>
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
                    <?php foreach ($category->products as $product) : ?>
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

<!-- Footer Bar -->
<section class="footer-bar">
  <div class="container">
    <div class="inner">
      <div class="row">
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon01.png" alt="Image"></figure>
          <h3>Мы находимся</h3>
          <p>Казахстан, г.Шымкент, ул.Конаева 3/3 2-этаж</p>
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
            <a href="tel:+77750450008" class="text-white">+7(775)045-00-08</a><br>
            <a href="mailto:info@baitun.kz" class="text-white">info@baitun.kz</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <img src="/img/logo-4.png" alt="Image" class="logo">
        <p>Архитектурно-строительная компания Baitun Project занимается проектированием и строительством объектов от подготовки и сопровождения разрешительной документации до сдачи готового объекта под ключ.</p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="text-uppercase color-gold">Страницы</h5>
        <ul class="footer-menu">
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
                      <?php foreach ($category->products as $product) : ?>
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
      <div class="col-lg-3 col-md-6">
        <h5 class="text-uppercase color-gold">Проекты</h5>
        <ul class="footer-menu">
          <?php $category = \App\Category::where('slug', 'proekty')->first(); ?>
          <?php foreach ($category->products as $product) : ?>
            <li><a href="/p/{{ $product->slug }}">{{ $product->title }}</a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-lg-3">
        <div class="contact-box- text-white">
          <h5 class="color-gold">CALL CENTER</h5>
          <h3><a href="tel:+77750450008" class="text-white">+7(775)045-00-08</a></h3>
          <p>
            Email: <a href="mailto:info@baitun.kz" class="text-white">info@baitun.kz</a><br>
            Instagram: <a href="https://www.instagram.com/baitunproject/" class="text-white">@Baitunproject</a>
          </p>
          <ul class="social-media ml-0">
            <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12">
        <span class="copyright">© <?= date('Y') ?> Baitun Project | Все права зарезервированы</span>
        <span class="creation">Связь с разработчиком сайта: <a href="#">issayev.adilet@gmail.com</a></span>
      </div>
    </div>
  </div>
</footer>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+7(775)045-00-08", // WhatsApp number
            telegram: "+7(775)045-00-08", // Telegram bot username
            email: "info@baitun.kz", // Email
            call: "+7(775)045-00-08", // Call phone number
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Здравствуйте! Отправьте нам сообщение через любой из мессенджеров.", // Text of greeting message
            call_to_action: "Напишите нам", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,telegram,email,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

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