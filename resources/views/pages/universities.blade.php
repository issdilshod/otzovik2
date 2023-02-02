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
        <li class="active">Университеты</li>
      </ol>
    </nav>
    <!-- hero -->
    <div class="hero">
      <div class="hero-text has-size">
        <h1>Текстовый блок</h1>
        <p>Отзыв.ru – интернет-портал для старшеклассников, абитуриентов, студентов. Наша работа – это забота о том, чтобы поиск информации о вузе или колледже, будущей профессии и специальности стал для вас максимально удобным и простым. Поэтому каждый день мы совершенствуем наш сайт и наполняем его новыми интересными материалами, чтобы вы могли найти гораздо больше, чем просто ответы на вопросы.</p>        
      </div>
      <div class="hero-img"><img src="{{ asset('assets/images/hero02.svg') }} alt=""></div>
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
            <use xlink:href="#teacher-full"></use>
          </svg>
        </div>
        Учебные заведения
      </div>
      <div class="sort">
        <a href="#" class="sort-item location">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#location-empty"></use>
            </svg>
          </span>
          Москва
        </a>
        <a href="#" class="sort-item location">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#filter-ico"></use>
            </svg>
          </span>
          По количеству отзывов
        </a>
      </div>
    </div>
    <!-- institutions -->
    <div class="institutions">      
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="institution-card">
            <div class="institution-title"><a href="#">Дальневосточный федеральный университет</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo02.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo03.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo01.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo04.png') }} alt=""></a></div>
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
            <div class="institution-title"><a href="#">Дальневосточный федеральный университет</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo02.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo03.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo01.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo04.png') }} alt=""></a></div>
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
            <div class="institution-title"><a href="#">Дальневосточный федеральный университет</a></div>
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo02.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo03.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo01.png') }} alt=""></a></div>
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
          <div class="help">
            <div class="help-img"><img src="{{ asset('assets/images/help-img.svg') }} alt=""></div>
            <div class="help-title">Не нашли нужный ВУЗ?</div>
            <a href="#" class="btn">Список ВУЗов</a>
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
    <!--  /institutions -->
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
<!-- / honest -->  </div>
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
  <div class="reviews-slider slider review-02 swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">30 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-half.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo02.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo03.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo01.png') }} alt=""></a></div>
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
            <div class="institution-img"><a href="#"><img src="{{ asset('assets/images/logo04.png') }} alt=""></a></div>
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
  <div class="reviews-slider slider review-01 swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <div class="review-user-name">Евгений Баженов</div>
          <div class="date">30 декабря 2022</div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-half.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star-empty.svg') }} alt=""></span>
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
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }} alt=""></span>
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