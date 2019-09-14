<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="theme-color" content="#282828"/>
  <title>Homepark | Real Estate & Luxury Homes</title>
  <meta name="author" content="Themezinho">
  <meta name="description" content="Homepark | Real Estate & Luxury Homes">
  <meta name="keywords" content="homepark, realestate, flat, apartment, benefits, facility, consultation, home, house, studio, pool, animation, transportation">

  <!-- SOCIAL MEDIA META -->
  <meta property="og:description" content="Homepark | Real Estate & Luxury Homes">
  <meta property="og:image" content="http://www.themezinho.net/homepark/preview.png">
  <meta property="og:site_name" content="homepark">
  <meta property="og:title" content="homepark">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.themezinho.net/homepark">

  <!-- TWITTER META -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@homepark">
  <meta name="twitter:creator" content="@homepark">
  <meta name="twitter:title" content="homepark">
  <meta name="twitter:description" content="Homepark | Real Estate & Luxury Homes">
  <meta name="twitter:image" content="http://www.themezinho.net/homepark/preview.png">

  <!-- FAVICON FILES -->
  <link href="/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
  <link href="/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
  <link href="/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
  <link href="/ico/favicon.png" rel="shortcut icon">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="/css/fontawesome.min.css">
  <link rel="stylesheet" href="/css/fancybox.min.css">
  <link rel="stylesheet" href="/css/odometer.min.css">
  <link rel="stylesheet" href="/css/swiper.min.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
<div class="preloader">
  <div class="layer"></div>
  <div class="inner">
    <figure><img src="/img/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Загрузка</span></p>
  </div>
</div>
<div class="transition-overlay">
  <div class="layer"></div>
</div>

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
            <li><a href="/{{ $prefix . $page->slug }}">{{ $page->title }}</a></li>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php }; ?>
      <?php $traverse($pages); ?>
    </ul>
  </div>
  <div class="side-content">
    <figure> <img src="/img/logo-light.png" alt="Image"> </figure>
    <p>By aiming to take the life quality to an upper level with the whole realized Projects, Homepark continues to be the address of luxury.</p>
    <ul class="gallery">
      <li><a href="/img/gallery-thumb01.jpg" data-fancybox><img src="/img/gallery-thumb01.jpg" alt="Image"></a></li>
      <li><a href="/img/gallery-thumb01.jpg" data-fancybox><img src="/img/gallery-thumb01.jpg" alt="Image"></a></li>
      <li><a href="/img/gallery-thumb01.jpg" data-fancybox><img src="/img/gallery-thumb01.jpg" alt="Image"></a></li>
    </ul>
    <address>
    Kyiv | G. Stalingrada Avenue, 6 
    Vilnius | Antakalnio St. 17
    </address>
    <h6>+380(98)298-59-73</h6>
    <p><a href="#">hello@homepark.com.ua</a></p>
    <ul class="social-media">
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
    <small>© 2019 Homepark | Real Estate & Luxury Homes</small>
  </div>
</div>

<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="/"><img src="/img/logo-4.png" alt="Image"></a> </div>
      <div class="phone-email mr-5">
        <img src="/img/icon-phone.png" alt="Image">
        <h4>+7(775)045-00-08</h4>
        <small><a href="#">info@baitun.kz</a></small>
      </div>
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

<!-- Footer Bar -->
<section class="footer-bar">
  <div class="container">
    <div class="inner">
      <div class="row">
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon01.png" alt="Image"></figure>
          <h3>Мы находимся</h3>
          <p>Kyiv | G. Stalingrada Avenue, 6 <br>
            Vilnius | Antakalnio St. 17</p>
        </div>
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon02.png" alt="Image"></figure>
          <h3>График работы</h3>
          <p>Monday to Friday <strong>09:00</strong> to <strong>18:30</strong> <br>
            Saturday we work until <strong>15:30</strong></p>
        </div>
        <div class="col-lg-4">
          <figure><img src="/img/footer-icon03.png" alt="Image"></figure>
          <h3>Наши контакты</h3>
          <p>+7(777)99988777<br>info@baitun.kz</p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <img src="/img/logo-light.png" alt="Image" class="logo">
        <p>By aiming to take the life quality to an upper level with the whole realized Projects, Homepark continues to be the address of luxury.</p>
        <div class="select-box dropdown show"> <a class="dropdown-toggle" href="#" role="button" id="language-select" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span><img src="/img/flag-tr.svg" alt="Image"> Turkish</span> </a>
          <ul class="dropdown-menu" aria-labelledby="language-select">
            <li><a class="dropdown-item" href="#"><img src="/img/flag-en.svg" alt="Image"> English</a></li>
            <li><a class="dropdown-item" href="#"><img src="/img/flag-ua.svg" alt="Image"> Russian</a></li>
            <li><a class="dropdown-item" href="#"><img src="/img/flag-br.svg" alt="Image"> Portugues</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <ul class="footer-menu">
          <li><a href="#">Homepark</a></li>
          <li><a href="#">Apartments</a></li>
          <li><a href="#">Facilities</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <ul class="footer-menu">
          <li><a href="#">Suites</a></li>
          <li><a href="#">Apartments</a></li>
          <li><a href="#">Villas & Houses</a></li>
          <li><a href="#">Butique Room</a></li>
          <li><a href="#">Buildings</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <div class="contact-box">
          <h5>CALL CENTER</h5>
          <h3>+380(98)298-59-73</h3>
          <p><a href="#">hello@homepark.com.ua</a></p>
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-12"> <span class="copyright">© 2019 Homepark | Real Estate &amp; Luxury Homes</span> <span class="creation">Site created by <a href="#">Themezinho</a></span> </div>
    </div>
  </div>
</footer>

<!-- JS FILES --> 
<script src="/js/jquery.min.js"></script> 
<script src="/js/popper.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/swiper.min.js"></script> 
<script src="/js/fancybox.min.js"></script> 
<script src="/js/odometer.min.js"></script> 
<!-- <script src="/js/wow.min.js"></script>  -->
<script src="/js/text-rotater.js"></script> 
<script src="/js/jquery.stellar.js"></script> 
<script src="/js/isotope.min.js"></script> 
<script src="/js/scripts.js"></script>
</body>
</html>