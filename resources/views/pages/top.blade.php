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
        <li class="active">Топ ВУЗов</li>
      </ol>
    </nav>
    <!-- top-rate -->
    <div class="top-rate white-bg">      
      <div class="headline">
        <span class="ico">
          <svg class="icon">
            <use xlink:href="#cup-ico"></use>
          </svg>
        </span>
        Топ ВУЗов по оценкам пользователей
      </div>
      <p>Мы провели анализ и собрали для вас лучшие вузы по оценкам пользователей из разных регионов.</p>      
      <div class="top-table">
        <div class="top-table-title">
          <div class="cell cell01">№</div>
          <div class="cell cell02">Название орзанизации</div>
          <div class="cell cell03">Мировой рейтинг</div>
          <div class="cell cell03">Российский рейтинг</div>
          <div class="cell cell03">Отзывы компании</div>
        </div>
        <div class="top-table-body">
          <div class="top-table-row">
            <div class="cell cell01">01</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Национальный исследовательский университет «Высшая школа экономики»</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                305
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                5
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                5 620
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">02</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Московский государственный университет имени М.В.Ломоносова</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                78
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                1
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                4 842
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">03</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Национальный исследовательский университет «Высшая школа экономики»</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                305
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                5
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                5 620
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">04</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Московский государственный университет имени М.В.Ломоносова</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                78
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                1
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                4 842
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">05</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Национальный исследовательский университет «Высшая школа экономики»</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                305
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                5
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                5 620
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">06</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Московский государственный университет имени М.В.Ломоносова</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                78
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                1
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                4 842
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">07</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Национальный исследовательский университет «Высшая школа экономики»</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                305
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                5
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                5 620
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">08</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Московский государственный университет имени М.В.Ломоносова</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                78
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                1
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                4 842
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">09</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Национальный исследовательский университет «Высшая школа экономики»</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                305
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                5
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                5 620
              </div>
            </div>
          </div>
          <div class="top-table-row">
            <div class="cell cell01">10</div>
            <div class="cell cell04"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
            <div class="cell cell02"><p>Московский государственный университет имени М.В.Ломоносова</p></div>
            <div class="cell cell03" data-title="Мировой рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                  </svg>
                </span>
                78
              </div>
            </div>
            <div class="cell cell03" data-title="Российский рейтинг">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#medal01-ico"></use>
                  </svg>
                </span>
                1
              </div>
            </div>
            <div class="cell cell03" data-title="Отзывы компании">
              <div class="rate-info">
                <span class="ico">
                  <svg class="icon">
                    <use xlink:href="#files-colorful"></use>
                  </svg>
                </span>
                4 842
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- / top-rate -->
  </div>
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
<!-- / review --><!-- text -->
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