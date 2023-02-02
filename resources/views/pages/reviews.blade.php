@extends('layouts.default')

@section('content')
<main>
  <div class="container">
    <nav class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="#" class="home">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#home-ico"></use>
              </svg>
            </span>
            Главная
          </a>
        </li>
        <li><a href="#">Отзывы</a></li>
        <li class="active">Все отзывы</li>
      </ol>
    </nav>
    <!-- hero -->
    <div class="hero">
      <div class="hero-text">
        <h1>Оценивайте и находите компании!</h1> 
        <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!</p>       
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
      <div class="hero-img"><img src="{{ asset('assets/images/illustration02.svg') }}" alt=""></div>
    </div>
    <!-- / hero -->    
    <ul class="tags">
      <li><a href="#">Государственные</a></li>
      <li><a href="#">Медицинские</a></li>
      <li><a href="#">Военны</a></li>
      <li><a href="#">Технические</a></li>
      <li><a href="#">Дистанционное обучение</a></li>
      <li><a href="#">Бюджетные</a></li>
      <li><a href="#">Педагогические</a></li>
      <li><a href="#">Юридические</a></li>
      <li><a href="#">Экономические</a></li>
      <li><a href="#">Театральные</a></li>
      <li><a href="#">Юридические</a></li>
      <li><a href="#">Экономические</a></li>
      <li><a href="#">Театральные</a></li>
      <li><a href="#">Заочное обучение</a></li>
      <li><a href="#">Платные</a></li>
      <li><a href="#" class="more">Смотреть еще</a></li>
    </ul>
    <div class="title-wrap align-items-center">
      <div class="headline">
        <div class="ico">
          <svg class="icon">
            <use xlink:href="#files-colorful"></use>
          </svg>
        </div>
        Все отзывы
      </div>
      <div class="sort">
        <a href="#" class="sort-item location">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#filter-ico"></use>
            </svg>
          </span>
          По рейтингу
        </a>
      </div>
    </div>   
    <!-- reviews-list -->
    <div class="reviews-list">
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
        <div class="review-card-bottom">
          <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          <div class="review-about">
            <p>Отзыв о:</p>
            <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
          </div>
        </div>
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
        <div class="review-card-bottom">
          <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          <div class="review-about">
            <p>Отзыв о:</p>
            <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
          </div>
        </div>
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
        <div class="review-card-bottom">
          <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          <div class="review-about">
            <p>Отзыв о:</p>
            <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
          </div>
        </div>
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
        <div class="review-card-bottom">
          <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
          <div class="review-about">
            <p>Отзыв о:</p>
            <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
          </div>
        </div>
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
  </div>
  <div class="bg-box">
    <div class="container">      
      <!-- popular -->
      <div class="popular">
        <div class="title-wrap">
          <div class="headline">
            <div class="ico">
              <svg class="icon">
                <use xlink:href="#files-colorful"></use>
              </svg>
            </div>
            Последние статьи
          </div>
          <a href="#" class="btn">Смотреть все статьи</a>
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
        </div>
      </div>
      <!-- / popular -->
    </div>
  </div>
  <div class="container">
    <!-- institutions -->
    <div class="institutions">
      <div class="title-wrap">
        <div class="headline">
          <div class="ico">
            <svg class="icon">
              <use xlink:href="#files-colorful"></use>
            </svg>
          </div>
          Популярные ВУЗы
        </div>
        <a href="#" class="btn">Читать все отзывы</a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="institution-card">
            <div class="institution-title"><a href="#">Дальневосточный федеральный университет</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo02.png') }}" alt=""></a></div>
            <div class="institution-labels">
              <div class="i-label full">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#files-colorful"></use>
                    </svg>
                  </span>
                  5 620
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal01-ico"></use>
                    </svg>
                  </span>
                  5
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal-ico"></use>
                    </svg>
                  </span>
                  305
                </div>
              </div>
            </div>
            <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="institution-card">
            <div class="institution-title"><a href="#">Уральский федеральный университет имени Б.Н. Ельцина</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo03.png') }}" alt=""></a></div>
            <div class="institution-labels">
              <div class="i-label full">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#files-colorful"></use>
                    </svg>
                  </span>
                  5 620
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal01-ico"></use>
                    </svg>
                  </span>
                  5
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal-ico"></use>
                    </svg>
                  </span>
                  305
                </div>
              </div>
            </div>
            <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="institution-card">
            <div class="institution-title"><a href="#">Московский государственный институт международных отношений МИД России</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></a></div>
            <div class="institution-labels">
              <div class="i-label full">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#files-colorful"></use>
                    </svg>
                  </span>
                  5 620
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal01-ico"></use>
                    </svg>
                  </span>
                  5
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal-ico"></use>
                    </svg>
                  </span>
                  305
                </div>
              </div>
            </div>
            <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="institution-card">
            <div class="institution-title"><a href="#">Московский финансово-промышленный университет «Синергия»</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo04.png') }}" alt=""></a></div>
            <div class="institution-labels">
              <div class="i-label full">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#files-colorful"></use>
                    </svg>
                  </span>
                  5 620
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal01-ico"></use>
                    </svg>
                  </span>
                  5
                </div>
              </div>
              <div class="i-label">
                <div class="rate-info">
                  <span class="ico">
                    <svg class="icon">
                      <use xlink:href="#medal-ico"></use>
                    </svg>
                  </span>
                  305
                </div>
              </div>
            </div>
            <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
          </div>
        </div>
      </div>
    </div>
    <!-- / institutions -->    
<!-- text -->
<div class="text">
  <h3>Оценивайте и находите компании!</h3>
  <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.</p>
  <a href="#" class="btn has-ico bordered-btn more-btn">
    Читать дальше
    <span class="ico">
      <svg class="icon">
        <use xlink:href="#arrow-ico"></use>
      </svg>
    </span>
  </a>
</div>
<!-- / text -->  </div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop