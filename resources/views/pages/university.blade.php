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
        <li><a href="{{url('/universitety')}}">Университеты</a></li>
        <li class="active">Карточка Университета</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero university-full">
      <div class="hero-text">
        <h1>Московский государственный университет имени М.В.Ломоносова</h1>
        <div class="university-full-row">
          <div class="acc-item">
            <label>Мировой рейтинг:</label>
            <div class="rate-info">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#medal-ico"></use>
                </svg>
              </span>
              305
            </div>
          </div>
          <div class="acc-item">
            <label>Российский рейтинг:</label>
            <div class="rate-info">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#medal01-ico"></use>
                </svg>
              </span>
              5
            </div>
          </div>
          <div class="acc-item">
            <label>Отзывы компании:</label>
            <div class="rate-info">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#files-colorful"></use>
                </svg>
              </span>
              5 620
            </div>
          </div>
          <div class="acc-item"><a href="#" class="btn">Оставить отзыв</a></div>
        </div>
      </div>
      <div class="hero-img">
        <div class="university-full-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
        <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
      </div>
    </div>
    <!-- / hero -->  

    <!-- text -->
    <div class="text">
      <h3>Об университете</h3>
      <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.гли найти гораздо больше, чем просто ответы на вопросы.Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.гли найти гораздо больше, чем просто ответы на вопросы.Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.гли найти гораздо больше, чем просто ответы на вопросы.</p>
      <a href="#" class="btn light-btn">Узнать больше</a>
    </div>   
    <!-- / text -->

    <!-- descript-card -->
    <div class="descript-card">
      <ul class="nav descript-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="descript-tab01" data-toggle="tab" data-target="#descript01" type="button" role="tab" aria-controls="descript01" aria-selected="true">Для учебных заведении</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="descript-descript02" data-toggle="tab" data-target="#descript02" type="button" role="tab" aria-controls="descript02" aria-selected="false">Для абитуриентов</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="descript-descript03" data-toggle="tab" data-target="#descript03" type="button" role="tab" aria-controls="descript03" aria-selected="false">Отзывы</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="descript-descript04" data-toggle="tab" data-target="#descript04" type="button" role="tab" aria-controls="descript04" aria-selected="false">Дополнительно</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="descript01" role="tabpanel" aria-labelledby="descript-descript01">
          <div class="row">
            <div class="col-lg-4">
              <div class="descript-card-item">
                <div class="title">Статиситка отзывов</div>
                <div class="statistic-row">                  
                  <span>5</span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span>95%</span>
                </div>
                <div class="statistic-row">                  
                  <span>4</span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild"></span></span>
                  <span>15%</span>
                </div>
                <div class="statistic-row">                  
                  <span>3</span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span>8%</span>
                </div>
                <div class="statistic-row">                  
                  <span>2</span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span>2%</span>
                </div>
                <div class="statistic-row">                  
                  <span>1</span>
                  <span><span class="shild full"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span><span class="shild"></span></span>
                  <span>0%</span>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="descript-card-item">
                <div class="title">Контактные данные</div>
                <div class="contact-item">
                  <div class="ico">
                    <svg class="icon">
                      <use xlink:href="#location-ico"></use>
                    </svg>
                  </div>
                  <div class="contact-item-text">
                    <span>Адрес:</span>
                    Санкт-Петербург. Ул. Володи Головатого. Пр. 235/2
                  </div>
                </div>
                <div class="contact-item">
                  <div class="ico">
                    <svg class="icon">
                      <use xlink:href="#tel-ico"></use>
                    </svg>
                  </div>
                  <div class="contact-item-text">
                    <span>Телефоны:</span>
                    + 7 (495) 443-44-44,  + 7 (495) 443-44-44
                  </div>
                </div>
                <div class="contact-item">
                  <div class="ico">
                    <svg class="icon">
                      <use xlink:href="#mail-ico"></use>
                    </svg>
                  </div>
                  <div class="contact-item-text">
                    <span>Почта:</span>
                    <a href="mailto:info@msu.edu.ru">info@msu.edu.ru</a>
                  </div>
                </div>
                <div class="contact-item">
                  <div class="ico">
                    <svg class="icon">
                      <use xlink:href="#site-ico"></use>
                    </svg>
                  </div>
                  <div class="contact-item-text">
                    <span>Сайт:</span>
                    <a href="#">msu.ru</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="descript-card-item card-reverse">
                <div>
                  <div class="title">Гос Акредитация</div>
                  <div class="accreditation">
                    <div class="inner">Есть</div>
                  </div>
                </div>
                <div>
                  <div class="title">Соц-сети</div>
                  <ul class="content-socially">
                    <li>
                      <a href="#">
                        <span class="ico fb">
                          <svg class="icon">
                            <use xlink:href="#fb-ico"></use>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="ico twitter">
                          <svg class="icon">
                            <use xlink:href="#twitter-ico"></use>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="ico telegram">
                          <svg class="icon">
                            <use xlink:href="#telegram-ico"></use>
                          </svg>
                        </span>
                      </a>
                    </li>                    
                    <li>
                      <a href="#">
                        <span class="ico viber">
                          <svg class="icon">
                            <use xlink:href="#viber-ico"></use>
                          </svg>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="ico vk">
                          <svg class="icon">
                            <use xlink:href="#vk-ico"></use>
                          </svg>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="descript02" role="tabpanel" aria-labelledby="descript-descript02">
          <div class="descript-card-item">
            <h4>Направления подготовки учебного заведения</h4>
            <ul class="tags">
              <li><a href="#" class="active">Государственные</a></li>
              <li><a href="#">Медицинские</a></li>
              <li><a href="#">Военны</a></li>
              <li><a href="#">Технические</a></li>
              <li><a href="#">Педагогические</a></li>
            </ul>
            <h4>Структура</h4>
            <ul class="strukture-list">
              <li>
                <span>Факультет:</span>
                Программирование ЭВМ
              </li>
              <li>
                <span>Кафедра:</span>
                Математическая
              </li>
            </ul>
            <h4>Форма обучения</h4>
            <ul class="tags">
              <li><a href="#">Очная</a></li>
              <li><a href="#">Заочная</a></li>
              <li><a href="#">Очно-заочная</a></li>
            </ul>
            <h4>Сроки обучения</h4>
            <div class="strukture-date">
              <div class="ico">
                <svg class="icon">
                  <use xlink:href="#calendar-full"></use>
                </svg>
              </div>
              от 2 лет
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="descript03" role="tabpanel" aria-labelledby="descript-descript03">
          <div class="review-card">
            <div class="review-card-top">
              <div class="user">
                <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
                <div class="review-user-name">Евгений Баженов</div>
              </div>
              <div class="date">30 декабря 2022</div>
              <div class="rating">
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                <span>4.5</span>
              </div>
            </div>
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          </div>
          <div class="review-card">
            <div class="review-card-top">
              <div class="user">
                <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
                <div class="review-user-name">Евгений Баженов</div>
              </div>
              <div class="date">30 декабря 2022</div>
              <div class="rating">
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                <span>4.5</span>
              </div>
            </div>
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          </div>
          <div class="review-card">
            <div class="review-card-top">
              <div class="user">
                <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
                <div class="review-user-name">Евгений Баженов</div>
              </div>
              <div class="date">30 декабря 2022</div>
              <div class="rating">
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                <span>4.5</span>
              </div>
            </div>
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          </div>
          <div class="review-card">
            <div class="review-card-top">
              <div class="user">
                <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
                <div class="review-user-name">Евгений Баженов</div>
              </div>
              <div class="date">30 декабря 2022</div>
              <div class="rating">
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                <span>4.5</span>
              </div>
            </div>
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          </div>
          <nav>
            <ul class="pagination">
              <li class="page-item"><a class="page-link page-prev" href="#">&nbsp;</a></li>
              <li class="page-item"><a class="page-link active" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">16</a></li>
              <li class="page-item"><a class="page-link page-next" href="#">&nbsp;</a></li>
            </ul>
          </nav>
        </div>
        <div class="tab-pane fade" id="descript04" role="tabpanel" aria-labelledby="descript-descript04">4</div>
      </div>
    </div>
    <!-- / descript-card -->

</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')  
    </div>
</div>
  
<div class="container">

    @include('components.articles.popular')

    @include('components.reviews.popular')

    <!-- faq -->
    <div class="faq">
      <div class="headline">
        <div class="ico">
          <svg class="icon">
            <use xlink:href="#message-ico"></use>
          </svg>
        </div>
        Часто задаваемые вопросы
      </div>
      <div class="accordion" id="acco">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Какие документы нужны для поступления в вуз?
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#acco">
            <div class="card-body">
              <p>После того как прием окончен, комиссия будет подводить итог и решать, кому суждено учиться, а кому нет. Результаты вывесят на доске объявлений факультета, также их можно посмотреть и на основном сайте вуза.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Когда нужно подавать документы?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#acco">
            <div class="card-body">
              <p>После того как прием окончен, комиссия будет подводить итог и решать, кому суждено учиться, а кому нет. Р</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Как узнать, зачислены ли вы в вуз?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#acco">
            <div class="card-body">
              <p>После того как прием окончен, комиссия будет подводить итог и решать, кому суждено учиться, а кому нет. Результаты вывесят на доске объявлений факультета, также их можно посмотреть и на основном сайте вуза.</p>
              <p>После того как прием окончен, комиссия будет подводить итог и решать, кому суждено учиться, а кому нет. Р</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- / faq -->

    @include('components.reviews.info')

</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop