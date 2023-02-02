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
<!-- / information -->  </div>
  <div class="bg-box">
    <div class="container">
      <div class="title-wrap">
        <div class="headline">
          <div class="ico">
            <svg class="icon">
              <use xlink:href="#files-colorful"></use>
            </svg>
          </div>
          Последние отзывы
        </div>
        <a href="#" class="btn">Читать все отзывы</a>
      </div>
<!-- reviews -->
<div class="reviews">
  <div class="reviews-slider slider review-01 swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">30 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
            <span>4.5</span>
          </div>
          <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Российский государственный социальный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Станислав Васильев</div>
          <div class="date">28 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }}" alt=""></span>
            <span>4.0</span>
          </div>
          <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Санкт-Петербургский государственный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">26 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span>5.0</span>
          </div>
          <p>В этом году я закончила отделение востоковедения Гуманитарного института (ГИ). Направление - китайский язык. Поступала сюда с горящими глазами. Как и все, наверное. Было в учебе хорошее ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Высшая школа экономики в Перми</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Станислав Васильев</div>
          <div class="date">28 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }}" alt=""></span>
            <span>4.0</span>
          </div>
          <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Санкт-Петербургский государственный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">26 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span>5.0</span>
          </div>
          <p>В этом году я закончила отделение востоковедения Гуманитарного института (ГИ). Направление - китайский язык. Поступала сюда с горящими глазами. Как и все, наверное. Было в учебе хорошее ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Высшая школа экономики в Перми</strong></p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-nav">
    <div class="swiper-pagination slider-pagination review-01-pagination"></div>
    <div class="slider-nav-btns">
      <div class="swiper-button-prev review-prev01"></div>
      <div class="swiper-button-next review-next01"></div>
    </div>
  </div>
</div>
<!-- / review -->    </div>
  </div>
  <div class="container">
<!-- popular -->
<div class="popular">
  <div class="title-wrap">
    <div class="headline">
      <div class="ico">
        <svg class="icon">
          <use xlink:href="#crown-ico"></use>
        </svg>
      </div>
      Популярные статьи
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
<!-- / popular -->    <div class="title-wrap">
      <div class="headline">
        <div class="ico">
          <svg class="icon">
            <use xlink:href="#files-colorful"></use>
          </svg>
        </div>
        Популярные отзывы
      </div>
      <a href="#" class="btn">Читать все отзывы</a>
    </div>
<!-- reviews -->
<div class="reviews">
  <div class="reviews-slider slider review-02 swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">30 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
            <span>4.5</span>
          </div>
          <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Российский государственный социальный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Станислав Васильев</div>
          <div class="date">28 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }}" alt=""></span>
            <span>4.0</span>
          </div>
          <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Санкт-Петербургский государственный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">26 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span>5.0</span>
          </div>
          <p>В этом году я закончила отделение востоковедения Гуманитарного института (ГИ). Направление - китайский язык. Поступала сюда с горящими глазами. Как и все, наверное. Было в учебе хорошее ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Высшая школа экономики в Перми</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Станислав Васильев</div>
          <div class="date">28 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }}" alt=""></span>
            <span>4.0</span>
          </div>
          <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Санкт-Петербургский государственный университет</strong></p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">26 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span>5.0</span>
          </div>
          <p>В этом году я закончила отделение востоковедения Гуманитарного института (ГИ). Направление - китайский язык. Поступала сюда с горящими глазами. Как и все, наверное. Было в учебе хорошее ...</p>
          <div class="review-subtitle">Отзыв про:</div>
          <p><strong>Высшая школа экономики в Перми</strong></p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-nav">
    <div class="swiper-pagination slider-pagination review-02-pagination"></div>
    <div class="slider-nav-btns">
      <div class="swiper-button-prev review-prev02"></div>
      <div class="swiper-button-next review-next02"></div>
    </div>
  </div>
</div>
<!-- / review -->    <!-- institutions -->
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