@extends('layouts.default')

@section('content')
<div class="container">

    <!-- hero -->
    <div class="hero">
      <div class="hero-text">
        <h1>Независимый сервис по оценке ВУЗов</h1>
        <p>Узнай что реально пишут о учебных заведениях которые вы рассматриваете для поступления!</p>
        <a href="#" class="btn has-ico">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#teacher-ico"></use>
            </svg>
          </span>
          Подобрать ВУЗ
        </a>
      </div>
      <div class="hero-img"><img src="assets/images/hero01.svg" alt=""></div>
    </div>
    <!-- / hero -->
    
    @include('components.reviews.popular')

    <!-- attrackt -->
    <div class="attrackt">
      <div class="row align-items-end">
        <div class="col-lg-9">
          <h2>Оценивайте и находите ВУЗы России!</h2>
          <p>Мы взяли за основу “сливы” о вузах, которые пользователи нашего сайта присылают нам. Слив – это развернутый отзыв о вузе, который проходит несколько этапов проверки. Слив имеет заданную характеристику. Он может быть положительным, отрицательным или нейтральным. Мы просим студентов, преподавателей, сотрудников вуза, просто людей, которые знают о вузе изнутри.</p>
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
          <ul class="nums">
            <li>
              <span class="nums-top">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#more-ico"></use>
                  </svg>
                </span>
                <strong>452 851</strong>
              </span>
              Отзывов в вашем городе
            </li>
            <li>
              <span class="nums-top">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-ico"></use>
                  </svg>
                </span>
                <strong>22 851</strong>
              </span>
              Ответов от компаний
            </li>
            <li>
              <span class="nums-top">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#users-ico"></use>
                  </svg>
                </span>
                <strong>8 512</strong>
              </span>
              Компаний на портале
            </li>
          </ul>
        </div>
        <div class="col-lg-3">
          <div class="attrackt-img"><img src="assets/images/attrackt-img.svg" alt=""></div>
        </div>
      </div>
    </div>
    <!-- / attrackt -->  

</div>
    
@include('components.universities.top')

<div class="container">

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

    @include('components.articles.popular')

    @include('components.reviews.honest')    

    @include('components.reviews.last')

    @include('components.reviews.info')

</div>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop