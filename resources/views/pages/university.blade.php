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
        <li><a href="#">Университеты</a></li>
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
    <!-- / text          -->
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
      <div class="title-wrap">
        <div class="headline">
          <div class="ico">
            <svg class="icon">
              <use xlink:href="#files-colorful"></use>
            </svg>
          </div>
          ППоследние отзывы о ВУЗе
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
<!-- / review -->    <!-- faq -->
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