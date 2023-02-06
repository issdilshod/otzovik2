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
        <li class="active">Учебным заведениям</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero mb-3">
      <div class="hero-text has-size">
        <h1>Учебным заведениям</h1>
        <p>Отзыв.ru – интернет-портал для старшеклассников, абитуриентов, студентов. <br>Наша работа – это забота о том, чтобы поиск информации о вузе или колледже, будущей профессии и специальности стал для вас максимально удобным и простым. Поэтому каждый день мы совершенствуем наш сайт и наполняем его новыми интересными материалами, чтобы вы могли найти гораздо больше, чем просто ответы на вопросы.</p>
      </div>
      <div class="hero-img"><img src="{{ asset('assets/images/illustration05.svg') }}" alt=""></div>
    </div>
    <!-- / hero -->  

    <ul class="nums has-indent">
      <li>
        <span class="nums-top">          
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#chart-ico"></use>
            </svg>
          </span>
        </span>
        Сранивайте и изучайте рецнезии и отзывы на самом крупном агрегаторе
      </li>
      <li>
        <span class="nums-top">          
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#profile-ico"></use>
            </svg>
          </span>
        </span>
        Вступайте в наше комьюнити принимайте участие в жизни нашего сервиса
      </li>
      <li>
        <span class="nums-top">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#files-colorful"></use>
            </svg>
          </span>
        </span>
        У нас вы найдете только самые актуальные и свежие новости об университетах
      </li>
    </ul>

    <!-- information -->
    <div class="information">
        <div class="information-title">
            <div class="headline">
            <div class="ico">
                <svg class="icon">
                <use xlink:href="#clipboard-ico"></use>
                </svg>
            </div>
            Информация для учебных заведении
            </div>
        </div>
        <ul class="nav info-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="info-tab01" data-toggle="tab" data-target="#tab01" type="button" role="tab" aria-controls="tab01" aria-selected="true">Для учебных заведении</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="info-tab02" data-toggle="tab" data-target="#tab02" type="button" role="tab" aria-controls="tab02" aria-selected="false">Для абитуриентов</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab01" role="tabpanel" aria-labelledby="info-tab01">
                <h3>Оценивайте и находите компании!</h3>
                <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
                <p>По своей сути рыбатекст является альтернативой традицинному.</p>
                <div class="btns">
                    <a href="#" class="btn has-ico">
                    <span class="ico">
                        <svg class="icon">
                        <use xlink:href="#files-ico"></use>
                        </svg>
                    </span>
                    Оставить отзыв
                    </a>
                    <a href="#" class="btn has-ico bordered-btn">
                    <span class="ico">
                        <svg class="icon">
                        <use xlink:href="#building-ico"></use>
                        </svg>
                    </span>
                    Добавить вуз
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab02" role="tabpanel" aria-labelledby="info-tab02">...</div>
        </div>
    </div>
    <!-- / information -->  
</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')
    </div>
</div>

<div class="container">

    @include('components.articles.popular')

    @include('components.reviews.popular')
   
    @include('components.universities.popular')

    @include('components.reviews.info')

</div>
  
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop