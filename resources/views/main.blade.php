@extends('layout')

@section('title_description', $page->title_description)

@section('meta_description', $page->meta_description)


@section('content')

<!-- Slider
<header class="slider">
  <div class="slider-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-background="/filemanager/{{ $page->icon }}" >
        <div class="container">
          <h1 class="text-uppercase">Проектируем престижную Архитектуру</h1>
          <h2>Архитектура которую хочется воплотить</h2><br>
          <a class="btn-native" href="#" data-toggle="modal" data-target="#appForm">ЗАКАЗАТЬ УСЛУГУ <i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</header> -->

<header class="page-header bg-main" data-background="/filemanager/{{ $page->icon }}" data-stellar-background-ratio="1.15">
  <div class="container">
    <h1 class="text-uppercase">Проектируем престижную Архитектуру</h1>
    <h2 class="text-white">Архитектура которую хочется воплотить</h2><br>
    <a class="btn-native text-white float-left" href="#" data-toggle="modal" data-target="#appForm">ЗАКАЗАТЬ УСЛУГУ <i class="fas fa-caret-right"></i></a>

    <!-- <div class="social-media">
      <h6>МЕДИА</h6>
      <ul>
        <li><a href="https://www.instagram.com/baitunproject/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div> -->
  </div>
</header>

<!-- Service 1 -->
<section class="intro">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.07"></div>
          <div class="holder" data-stellar-ratio="1.10">
            <img src="/filemanager/{{ $page_services[0]->icon }}" alt="{{ $page_services[0]->title }}">
          </div>
        </figure>
      </div>
      <div class="col-lg-6">
        <div class="content-box">
          <!-- <b>01</b> -->
          <h4 class="h1">{{ $page_services[0]->title }}</h4>
          {!! $page_services[0]->short_description !!}
          <div class="btn-group" role="group" aria-label="Service">
            <a href="/uslugi/{{ $page_services[0]->slug }}" class="btn btn-outline-brown btn-lg mb-1">Подробнее</a>
            <button type="button" class="btn btn-outline-brown btn-lg mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service 2 -->
<section class="intro pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-md-2">
        <figure>
          <div class="pattern-bg right-pattern-bg" data-stellar-ratio="1.07"></div>
          <div class="holder right-holder" data-stellar-ratio="1.10">
            <img src="/filemanager/{{ $page_services[1]->icon }}" alt="{{ $page_services[1]->title }}">
          </div>
        </figure>
      </div>
      <div class="col-lg-6 order-md-1"> 
        <div class="content-box">
          <h4>{{ $page_services[1]->title }}</h4>
          {!! $page_services[1]->short_description !!}
          <div class="btn-group" role="group" aria-label="Service">
            <a href="/uslugi/{{ $page_services[1]->slug }}" class="btn btn-outline-brown btn-lg mb-1">Подробнее</a>
            <button type="button" class="btn btn-outline-brown btn-lg mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service 3 -->
<section class="property-calculator pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <figure>
          <div class="pattern-bg" data-stellar-ratio="1.03"></div>
          <div class="holder" data-stellar-ratio="1.07">
            <img src="/filemanager/{{ $page_services[2]->icon }}" alt="{{ $page_services[2]->title }}">
          </div>
        </figure>
      </div>
      <div class="col-lg-6">
        <div class="content-box">
          <h4>{{ $page_services[2]->title }}</h4>
          {!! $page_services[2]->short_description !!}
          <div class="btn-group" role="group" aria-label="Service">
            <a href="/uslugi/{{ $page_services[2]->slug }}" class="btn btn-outline-brown btn-lg mb-1">Подробнее</a>
            <button type="button" class="btn btn-outline-brown btn-lg mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service 4 -->
<section class="intro pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-md-2">
        <figure>
          <div class="pattern-bg right-pattern-bg" data-stellar-ratio="1.07"></div>
          <div class="holder right-holder" data-stellar-ratio="1.10">
            <img src="/filemanager/{{ $page_services[3]->icon }}" alt="{{ $page_services[3]->title }}">
          </div>
        </figure>
      </div>
      <div class="col-lg-6 order-md-1"> 
        <div class="content-box">
          <h4>{{ $page_services[3]->title }}</h4>
          {!! $page_services[3]->short_description !!}
          <div class="btn-group" role="group" aria-label="Service">
            <a href="/uslugi/{{ $page_services[3]->slug }}" class="btn btn-outline-brown btn-lg mb-1">Подробнее</a>
            <button type="button" class="btn btn-outline-brown btn-lg mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- App Form -->
<section class="intro pt-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-md-2">
        <div class="content-box">
          <h2 class="font-brand color-brown- ">Если вы готовы заказать проект, строительство или вам нужна консультация специалиста, звоните по телефону <a href="tel:+77750450008" class="text-white-">+7(775)045-00-08</a>. Или оставьте заявку через форму и мы перезвоним вам в течение дня.</h2>
          <!-- <h2 class="font-brand color-brown- "><span class="display-4 font-brand  text-center color-brown"></span> Закажите <span class="color-brown">Проектирование Архитектуры</span> и получите бесплатно на&nbsp;выбор Сопровождение Документации или&nbsp;же Авторский Надзор</h2> -->
        </div>
      </div>
      <div class="col-lg-6 order-md-1">
        <figure>
          <div class="pattern-bg -right-pattern-bg" -data-stellar-ratio="1.07"></div>
          <div class="holder -right-holder" -data-stellar-ratio="1.10">
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
      @foreach($mode->products->where('status', 1)->take(9) as $product)
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
      @endforeach
    </div>
  </div>
</section>

<!-- About -->
<section class="benefits">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <h2 class="font-brand h1 text-right"><span>Компания</span><br> Baitun Project</h2>
        <!-- <h3>Decorated Flats in Pozniaky - Kiev</h3> -->
      </div>
      <div class="col-12 col-md-6">
        <p>Baitun Project является Архитектурно строительной компанией воплотившая немало впечатляющих проектов. Опыт специалистов компании в области архитектуры и строительство насчитывается более 8 лет. Каждый ведущий архитектор закончил высшее образование и имеет базу успешно введенных в эксплуатацию проектов. Мы оказываем полный пакет услуг для строительство Вашего будущего объекта. Это значит не нужно нанимать другие компании на каждом этапе строительство. </p>
      </div>
    </div>
    <br><br><br>
    <div class="row">
      <div class="col">
        <figure> <img src="/img/icon-benefits01.png" alt="Image"> <b></b> </figure>
        <h6>Офис от парка</h6>
        <span class="odometer" data-count="25" data-status="yes">0</span> <span class="extra">мин</span>
      </div>
      <div class="col">
        <figure> <img src="/img/icon-benefits02.png" alt="Image"> <b></b> </figure>
        <h6>Возвращающихся клиентов</h6>
        <span class="odometer" data-count="90" data-status="yes">0</span> <span class="extra">%</span>
      </div>
      <div class="col">
        <figure> <img src="/img/icon-benefits03.png" alt="Image"> <b></b> </figure>
        <h6>Под ключ построено</h6>
        <span class="odometer" data-count="15" data-status="yes">0</span> <span class="extra">здании</span>
      </div>
      <div class="col">
        <figure> <img src="/img/icon-benefits04.png" alt="Image"> <b></b> </figure>
        <h6>Опыт в архитектуре</h6>
        <span class="odometer" data-count="8" data-status="yes">0</span> <span class="extra">лет</span>
      </div>
      <div class="col">
        <figure> <img src="/img/icon-benefits05.png" alt="Image"> <b></b> </figure>
        <h6>Спроектировано больше</h6>
        <span class="odometer" data-count="9999" data-status="yes">0</span> <span class="extra">m²</span>
      </div>
    </div>
  </div>
</section>

<!-- App Form -->
<section class="get-consultation" data-background="/img/bg/bg-app.jpg" data-stellar-background-ratio="0.9">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="content-box">
          <h2 class="font-brand">Есть Проект?!</h2>
          <h3>Давайте его обсудем!</h3>
          <div class="contact-form">  
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
              <!-- <div class="form-group"> 
                <span>Ваш сообщение</span>
                <textarea name="message" id="message" autocomplete="off" required></textarea>
              </div> -->
              <div class="form-group">
                <br>
                <button type="submit" name="submit" class="btn btn-black btn-lg btn-block">Отправить заявку <i class="fas fa-caret-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Reviews -->
<section class="reviews bg-dark2-">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="h1 text-center font-brand"><span class="color-brown">Отзывы</span> от Клиентов</h2>
      </div>
      <div class="offset-2 col-8">
        <div id="carouselReviewsIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carouselReviewsIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselReviewsIndicators" data-slide-to="1"></li>
            <li data-target="#carouselReviewsIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Certificates -->
<section class="certificates">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12 col-md-12">
        <h2 class="h1 text-center font-brand mb-5"><span class="color-brown">Нащи</span> Лицензии</h2>
        <!-- <small>Smaller male cones </small> -->
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering-Изыскательская деятельность-1-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering-Изыскательская деятельность-1-258.jpg" alt="Лицензия"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering-Изыскательская деятельность-2-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering-Изыскательская деятельность-2-258.jpg" alt="Лицензия"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-1-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-1-258.jpg" alt="Лицензия"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-2-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-2-258.jpg" alt="Лицензия"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-4-">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-3-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-3-258.jpg" alt="Лицензия"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-4-">
        <figure> <a href="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-4-500.jpg" data-fancybox><img src="/filemanager/docs/Лицензия QA Engineering -Проектная деятельность II категория-4-258.jpg" alt="Лицензия"></a> </figure>
      </div>
    </div>
  </div>
</section>
@endsection


@section('scripts')

@endsection