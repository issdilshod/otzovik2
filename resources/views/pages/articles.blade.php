@extends('layouts.default')

@section('content')
<main>
<div class="container">

    <nav class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="{{url('/')}}" class="home">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#home-ico"></use>
              </svg>
            </span>
            Главная
          </a>
        </li>
        <li class="active">Блог</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero">
      <div class="hero-text">
        <h1>Будьте в курсе событии</h1> 
        <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!</p>       
        <div class="send-inner">
          <div class="sending-group">
            <input id="articles-email" type="email" placeholder="Введите почту" class="form-control">
            <button id="articles-subscribe" class="send-btn">
              <svg class="icon">
                <use xlink:href="#letter-ico"></use>
              </svg>
            </button>
          </div>
          <div class="agree">Нажимая на “Отправить” я соглашаюсь на <a href="#">обработку персональных данных</a> и <a href="#">политикой конфиденциальности</a> сайта</div>
        </div>
      </div>
      <div class="hero-img"><img src="{{ asset('assets/images/illustration03.svg') }}" alt=""></div>
    </div>
    <!-- / hero -->  

    <!-- popular -->
    <div class="popular">
        <div class="title-wrap align-items-center">
            <div class="headline">
            <div class="ico">
                <svg class="icon">
                <use xlink:href="#list-ico"></use>
                </svg>
            </div>
            Блог
            </div>
            <div class="articles-info">
            <span class="articles-info-item">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                </svg>
                </span>
                132 статьи
            </span>
            <span class="articles-info-item">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#calendar-full"></use>
                </svg>
                </span>
                20.01.2023
            </span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic01.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">Что выгоднее: платное обучение или репетиторы для подготовки к ЕГЭ?</div>
                <p>Если подходить к поступлению и дальнейшему обучению в ВУЗе как к долгосрочному проекту...</p>
                </a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic02.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">Высшее образование у Черного моря или куда следует поступить.</div>
                <p>Пожалуй, многие абитуриенты сталкиваются с дилеммой - куда поступать, в Москву или ...</p>
                </a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic03.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">10 причин которые помогут тебе понять, куда поступать в вуз?</div>
                <p>Дисклеймер: все реагируют на стресс по-разному, кого-то он мобилизует, а кого-то ...</p>
                </a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic01.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">Что выгоднее: платное обучение или репетиторы для подготовки к ЕГЭ?</div>
                <p>Если подходить к поступлению и дальнейшему обучению в ВУЗе как к долгосрочному проекту...</p>
                </a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic02.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">Высшее образование у Черного моря или куда следует поступить.</div>
                <p>Пожалуй, многие абитуриенты сталкиваются с дилеммой - куда поступать, в Москву или ...</p>
                </a>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="news-card">
                <a href="#">
                <div class="news-card-img">
                    <img src="{{ asset('assets/images/pic03.jpg') }}" alt="">
                    <div class="date-label">
                    <div class="ico">
                        <svg class="icon">
                        <use xlink:href="#calendar-ico"></use>
                        </svg>
                    </div>
                    02.12.2022
                    </div>
                </div>
                <div class="news-card-title">10 причин которые помогут тебе понять, куда поступать в вуз?</div>
                <p>Дисклеймер: все реагируют на стресс по-разному, кого-то он мобилизует, а кого-то ...</p>
                </a>
            </div>
            </div>
        </div>
      
        @include('components.pagination.pagination')

    </div>
    <!-- / popular -->

    @include('components.reviews.info')

</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')
    </div>
</div>

<div class="container">

    @include('components.articles.popular')

    @include('components.reviews.popular')

    @include('components.reviews.info')
    
</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop