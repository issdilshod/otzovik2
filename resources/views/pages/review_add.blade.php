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
        <li class="active">Оставить комментарий</li>
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
        </div>
      </div>
      <div class="hero-img">
        <div class="university-full-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
        <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
      </div>
    </div>
    <!-- / hero -->    
    <!-- form-block -->
    <div class="form-block white-form">
      <form>
        <h2>Оставить комментарии</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Имя*" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Фамилия" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input type="text" placeholder="Почта*" class="form-control"></div>
          </div>
          <div class="col-lg-12">
            <div class="form-group"><textarea placeholder="Комментарии*" cols="30" rows="10" class="form-control"></textarea></div>
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
        <div class="ch-item">
          <input type="checkbox" name="f-agr" id="f-agr">
          <label for="f-agr">Я ознакомился с <a href="#">политикой конфиденциальности</a> и даю согласование на <a href="#">обработку персональных данных</a></label>
        </div>
      </form>
    </div>
    <!-- / form-block -->
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