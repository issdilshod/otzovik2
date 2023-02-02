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
        <li><a href="#">Отзывы об университете</a></li>
        <li class="active">Отзыв № 43421</li>
      </ol>
    </nav>
    <!-- hero -->
    <div class="hero university-full">
      <div class="hero-text">
        <div class="date">30 декабря 2022 - 12:30</div>
        <h1 class="mb-1">Отзыв № 43421</h1>
        <p>Московский государственный университет имени М.В.Ломоносова</p>
        <div class="btns">
          <a href="#" class="btn">Читать все отзывы</a>
          <a href="#" class="btn has-ico bordered-btn">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#files-ico"></use>
              </svg>
            </span>
            Оставить отзыв
          </a>
        </div>
      </div>
      <div class="hero-img">
        <div class="university-full-logo mb-0"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>        
      </div>
    </div>
    <!-- / hero -->    
    <!-- reviews-list -->
    <div class="reviews-list">
      <div class="review-card">
        <div class="review-card-top">
          <div class="user">
            <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
            <div class="review-user-name">Евгений Баженов</div>
          </div>
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
        <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
        <p>в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
        <a href="#" class="back">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#arrow-ico"></use>
            </svg>
          </span>
          Вернуться к отзывам об этом Вузе  
        </a>
      </div>
    </div>
    <!-- / reviews-list -->
<!-- honest -->
<div class="honest">
  <h2>Честные отзывы студентов</h2>
  <p>На первом этапе проверки “слив” проверяют редакторы сайта. Они отсеивают необоснованные, подозрительные по нашему мнению отзывы. В случае одобрения отзыва редактором сайта, отзыв публикуется в группе “Типичный абитуриент”.</p>
  <a href="#" class="btn has-ico">
    <span class="ico">
      <svg class="icon">
        <use xlink:href="#files-ico"></use>
      </svg>
    </span>
    Оставить отзыв
  </a>
</div>
<!-- / honest -->    <div class="title-wrap">
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
<!-- / review -->  </div>
  <div class="bg-box">
    <div class="container">
      <div class="title-wrap">
        <div class="headline">
          <div class="ico">
            <svg class="icon">
              <use xlink:href="#files-colorful"></use>
            </svg>
          </div>
          Другие отзывы о ВУЗе
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
<!-- / popular -->    <!-- institutions -->
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
  </div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop