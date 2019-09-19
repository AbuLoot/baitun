@extends('layout')

@section('title_description', $page->title_description)

@section('meta_description', $page->meta_description)


@section('content')
<!-- Slider -->
<header class="slider">
  <div class="slider-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-background="/img/bg/1.jpg" >
        <div class="container">
          <h1 class="text-capitalize">Проектируем престижную Архитектуру</h1>
          <h2 class="font-brand text-capitalize">Архитектура которую хочется воплотить</h2><br>
          <a class="btn-native" href="#" data-toggle="modal" data-target="#appForm">ЗАКАЗАТЬ УСЛУГУ <i class="fas fa-caret-right"></i></a>
        </div>
      </div>
      <!-- <div class="swiper-slide" data-background="/img/slide02.jpg" data-stellar-background-ratio="1">
        <div class="container">
          <h1><span>Oxøme</span> Premium Flats</h1>
          <h2>Provide a decent level of comfort </h2>
          <a href="#">GET A CONSULTATION <i class="fas fa-caret-right"></i></a>
        </div>
      </div> -->
    </div>
  </div>
</header>

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

<!-- Services 2 -->
<section class="section-services-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="h1 font-brand text-center">Какие <span class="color-brown">Услуги</span> мы оказываем?</h2>
        <small>&nbsp;</small>
      </div>
      <?php foreach ($page_services as $page_service) : ?>
        <div class="col-md-6 col-sm-6">
          <div class="card">
            <div class="image-cover">
              <img src="/filemanager/{{ $page_service->icon }}" class="img-fluid">
            </div>
            <div class="card-content">
              <h2 class="h1">{{ $page_service->title }}</h2>
              <h5 class="card-text">{{ $page_service->headline }}</h5>
              <a href="/uslugi/{{ $page_service->slug }}" class="btn btn-outline-brown btn-lg mb-1">Подробнее</a>
              <button type="button" class="btn btn-outline-brown btn-lg mb-1" data-toggle="modal" data-target="#appForm">Заказать</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- App Form -->
<section class="intro">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="content-box">
          <h2 class="font-brand color-brown- ">Если вы готовы заказать проект, строительство или вам нужна консультация специалиста, звоните по телефону <a href="tel:+77750450008" class="text-white-">+7(775)045-00-08</a>. Или оставьте заявку через форму и мы перезвоним вам в течение дня.</h2>
          <!-- <h2 class="font-brand color-brown- "><span class="display-4 font-brand  text-center color-brown"></span> Закажите <span class="color-brown">Проектирование Архитектуры</span> и получите бесплатно на&nbsp;выбор Сопровождение Документации или&nbsp;же Авторский Надзор</h2> -->
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
                <a href="/p/{{ $product->slug }}" class="btn btn-outline-brown btn-lg">Подробнее</a>
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

<!-- Form App
<section class="get-consultation" data-background="/img/section-bg01.jpg" data-stellar-background-ratio="0.9">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="content-box"> <b>06</b>
          <h4><span>Homepark</span> Living Spaces</h4>
          <h3>Are you interested to Homepark</h3>
          <p>The sun collectors, shall provide the electricity of the social areas of the site and shall do its part for protecting the environment.</p>
          <a href="#">SCHEDULE A VISIT <i class="fas fa-caret-right"></i></a> </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Work Stages
<section class="facilities">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="h1 font-brand"><span class="color-brown">Этапы</span> работы</h2>
        <small>Smaller male cones </small>
      </div>
      <div class="col-lg-4 col-md-6">
      <figure>
        <img src="/img/services-icon01.png" alt="Image">
        <figcaption>
          <h5>Подготовительный этап</h5>
          <p>Мы уточняем у вас все детали и пожелания, выполняем замеры и проводим необходимые исследования.</p>
        </figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-6">
        <figure>
          <img src="/img/services-icon01.png" alt="Image">
          <figcaption>
            <h5>Эскизный проект</h5>
            <p>На данной стадии мы разрабатываем генеральный план, планы всех этажей, фасада, кровли, разрезов. Определяем технико-экономические показатели.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-6">
        <figure>
          <img src="/img/services-icon01.png" alt="Image">
          <figcaption>
            <h5>Рабочий проект</h5>
            <p>Во время этого этапа мы создаем паспорт проекта, продумываем все технологические и архитектурные решения, рассчитываем конструкции, определяем, какие строительные материалы будут использованы</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-6">
        <figure>
          <img src="/img/services-icon01.png" alt="Image">
          <figcaption>
            <h5>Согласование плана с местным Управлением Архитектуры и Градостроительство</h5>
            <p></p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-6">
        <figure>
          <img src="/img/services-icon01.png" alt="Image">
          <figcaption>
          <h5>Прохождение государственной экспертизы</h5>
          <p>The smaller male cones release pollen, which fertilizes the female</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-6">
        <figure>
          <img src="/img/services-icon01.png" alt="Image">
          <figcaption>
          <h5>Unique Playground Area</h5>
          <p>The smaller male cones release pollen, which fertilizes the female</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section> --> 

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
      <div class="col-lg-4 col-md-12">
        <h4 class="h1"><span>Наши</span> Сертификаты</h4>
        <!-- <small>Smaller male cones </small> -->
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="images/certificate01.jpg" data-fancybox><img src="/img/certificate01.jpg" alt="Image"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="images/certificate01.jpg" data-fancybox><img src="/img/certificate01.jpg" alt="Image"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="images/certificate01.jpg" data-fancybox><img src="/img/certificate01.jpg" alt="Image"></a> </figure>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <figure> <a href="images/certificate01.jpg" data-fancybox><img src="/img/certificate01.jpg" alt="Image"></a> </figure>
      </div>
    </div>
  </div>
</section>
@endsection


@section('scripts')

@endsection