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
        <li><a href="#">Блог</a></li>
        <li><a href="#">Топ 10 вузов</a></li>        
        <li class="active">Куда вступить в 2022 году</li>
      </ol>
    </nav>
    <!-- article -->
    <div class="article">
      <h1>Топ 10 вузов куда поступить в 2022 году</h1>
      <a href="#" class="back">
        <span class="ico">
          <svg class="icon">
            <use xlink:href="#arrow-ico"></use>
          </svg>
        </span>
        Вернуться к отзывам об этом Вузе  
      </a>
      <figure><img src="{{ asset('assets/images/img.jpg') }}" alt=""></figure>
      <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
      <hr>  
      <div class="article-bottom">
        <div class="socially-wrap">
          <p>Поделиться в соц сетях</p>
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
        <div class="right">
          <div class="date">30 декабря 2022</div>
          <div class="name">Никита Боженов</div>
        </div>
      </div>
    </div>
    <!-- / article -->
    <!-- reviews-list -->
    <div class="reviews-list">
      <div class="headline">Комментарии</div>
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
        <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
        <div class="review-bottm-nav">
          <a href="#" class="like">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#like-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#" class="dislike">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#dislike-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#">Ответить</a>
        </div>
      </div>
      <div class="review-card">
        <div class="review-card-top">
          <div class="user">
            <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
            <div class="review-user-name">Евгений Баженов</div>
          </div>
          <div class="answer">
            В ответе к: <span>Евгений Баженов</span>
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
        <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
        <div class="review-bottm-nav">
          <a href="#" class="like">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#like-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#" class="dislike">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#dislike-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#">Ответить</a>
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
        <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
        <div class="review-bottm-nav">
          <a href="#" class="like">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#like-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#" class="dislike">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#dislike-ico"></use>
              </svg>
            </span>
          </a>
          <a href="#">Ответить</a>
        </div>
      </div>
    </div>
    <!-- / reviews-list -->
    <!-- form-block -->
    <div class="form-block">
      <form>
        <h2>Оставить комментарии</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Имя" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Фамилия" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Почта" class="form-control"></div>
          </div>
          <div class="col-lg-12">
            <div class="form-group"><textarea placeholder="Комментарии" cols="30" rows="10" class="form-control"></textarea></div>
          </div>
        </div>
        <div class="form-block-btm">
          <button class="btn has-ico">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#letter-ico"></use>
              </svg>
            </span>
            Оставить комментарии
          </button>
          <div class="file-box">
            <input type="file" data-jcf='{"buttonText": "", "placeholderText": "Загрузить фото: jpg или png"}'>
          </div>
        </div>
      </form>
    </div>
    <!-- / form-block -->
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
<!-- / popular -->  </div>
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
    <div class="title-wrap">
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
  
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop