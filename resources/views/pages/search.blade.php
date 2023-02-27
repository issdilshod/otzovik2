@extends('layouts.default')

@section('content')

<div class="breadcrumbs-wrapper">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">Главная</a></li>          
            <li class="active">Результат поиска</li>
        </ul>
    </div>
</div>
		<div class="container">	 
      <h2>Найдено 28 позиций</h2> 
      <div class="full-search has-indent">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Обазовательная платформа в СПБ">
            <button class="search-btn">
              <svg class="icon">
                <use xlink:href="#search-ico"></use>
              </svg>
            </button>
          </div>
        </form>
      </div>
      <!-- platforms-list -->
      <div class="platforms-list">
        <h4>Найдено 7 Образовательных платформ</h4>
        <div class="row">
          <div class="col-lg-4">
            <div class="platform-card">
              <div class="platform-card-head">
                <div class="platform-card-logo"><img src="assets/img/p-logo01.svg" alt=""></div>
                <ul class="awards">
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#star-ico"></use>
                      </svg>
                    </span>
                    4.7
                  </li>
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#cup-ico"></use>
                      </svg>
                    </span>
                    № 4
                  </li>
                </ul>
              </div>
              <div class="platform-card-body">
                <p>Онлайн-школа, которая с 2016 года запускает одни из лучших курсов в digital</p>
                <div class="platform-descript">
                  <li><span>Направлений:</span> Более 28</li>
                  <li><span>Стоимость:</span> от 1 699 руб.</li>
                  <li><span>Рассрочка:</span> Есть</li>
                  <li><span>Срок обучения:</span> от 3 месяцев</li>
                </div>
                <a href="#" class="btn bordered-btn">Оставить отзыв</a>
              </div>							
            </div>
          </div>
          <div class="col-lg-4">
            <div class="platform-card">
              <div class="platform-card-head">
                <div class="platform-card-logo"><img src="assets/img/p-logo02.svg" alt=""></div>
                <ul class="awards">
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#star-ico"></use>
                      </svg>
                    </span>
                    4.7
                  </li>
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#cup-ico"></use>
                      </svg>
                    </span>
                    № 1
                  </li>
                </ul>
              </div>
              <div class="platform-card-body">
                <p>Образовательная платформа «Нетология» мы учим профессиям и навыкам будущего</p>
                <div class="platform-descript">
                  <li><span>Направлений:</span> Более 60</li>
                  <li><span>Стоимость:</span> от 2 400 руб.</li>
                  <li><span>Рассрочка:</span> Есть</li>
                  <li><span>Срок обучения:</span> от 3 месяцев</li>
                </div>
                <a href="#" class="btn bordered-btn">Оставить отзыв</a>
              </div>							
            </div>
          </div>
          <div class="col-lg-4">
            <div class="platform-card">
              <div class="platform-card-head">
                <div class="platform-card-logo"><img src="assets/img/p-logo03.svg" alt=""></div>
                <ul class="awards">
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#star-ico"></use>
                      </svg>
                    </span>
                    4.7
                  </li>
                  <li>
                    <span class="ico">
                      <svg class="icon">
                        <use xlink:href="#cup-ico"></use>
                      </svg>
                    </span>
                    № 6
                  </li>
                </ul>
              </div>
              <div class="platform-card-body">
                <p>Онлайн-школа, которая с 2018 года запускает одни из лучших курсов в digital индустрии</p>
                <div class="platform-descript">
                  <li><span>Направлений:</span> Более 24</li>
                  <li><span>Стоимость:</span> от 1 500 руб.</li>
                  <li><span>Рассрочка:</span> Есть</li>
                  <li><span>Срок обучения:</span> от 3 месяцев</li>
                </div>
                <a href="#" class="btn bordered-btn">Оставить отзыв</a>
              </div>							
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="#" class="btn">Посмотреть ещё</a>
        </div>
      </div>
      <!-- / platforms-list -->    			
      <!-- comments -->
      <div class="comments">
        <h4>Найдено 12 Отзывов</h4>
        <div class="comment-card">
          <div class="comment-card-top">
            <div class="comment-card-text">
              <div class="comment-name">
                Андрей Жураков, г. Москва
                <span class="check">
                  <svg class="icon">
                    <use xlink:href="#check-ico"></use>
                  </svg>
                </span>
              </div>
              <div class="platform-link">Платформа: <a href="#">Нетология</a></div>
              <div class="rating">
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="rate-num">5.0</span>
              </div>
            </div>
            <div class="comment-card-photo"><img src="assets/img/photo01.jpg" alt=""></div>
          </div>
          <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
          <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
          <div class="rate">
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#like-ico"></use>
                </svg>
              </span>
              100
            </a>
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#dislike-ico"></use>
                </svg>
              </span>
              1000
            </a>
          </div>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
        <div class="comment-card">
          <div class="comment-card-top">
            <div class="comment-card-text">
              <div class="comment-name">
                Людмила Юрченко, г. Москва
                <span class="check">
                  <svg class="icon">
                    <use xlink:href="#check-ico"></use>
                  </svg>
                </span>
              </div>
              <div class="platform-link">Платформа: <a href="#">Нетология</a></div>
              <div class="rating">
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="rate-num">5.0</span>
              </div>
            </div>
            <div class="comment-card-photo"><img src="assets/img/photo02.jpg" alt=""></div>
          </div>
          <p>Я новичок в профессии, и мне важно было, чтобы курс сочетал в себе теорию и практику. Свои ощущения я назову более чем положительными, потому что курс мне понравился. Я очень много получила полезной информации, которой буду пользоваться. Сейчас я в процессе поиска работы, и карьерные консультанты Skillbox мне в этом очень помогают.</p>
          <div class="rate">
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#like-ico"></use>
                </svg>
              </span>
              100
            </a>
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#dislike-ico"></use>
                </svg>
              </span>
              1000
            </a>
          </div>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
        <div class="comment-card">
          <div class="comment-card-top">
            <div class="comment-card-text">
              <div class="comment-name">
                Андрей Жураков, г. Москва
                <span class="check">
                  <svg class="icon">
                    <use xlink:href="#check-ico"></use>
                  </svg>
                </span>
              </div>
              <div class="platform-link">Платформа: <a href="#">Нетология</a></div>
              <div class="rating">
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="star">
                  <svg class="icon">
                    <use xlink:href="#star-ico"></use>
                  </svg>
                </span>
                <span class="rate-num">5.0</span>
              </div>
            </div>
            <div class="comment-card-photo"><img src="assets/img/photo01.jpg" alt=""></div>
          </div>
          <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
          <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
          <div class="rate">
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#like-ico"></use>
                </svg>
              </span>
              100
            </a>
            <a href="#">
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#dislike-ico"></use>
                </svg>
              </span>
              1000
            </a>
          </div>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
        <div class="text-center">
          <a href="#" class="btn">Посмотреть ещё</a>
        </div>
      </div>			
      <!-- / comments -->
      <!-- popular-articles -->
      <div class="popular-articles">
        <h4>Найдено 3 Статьи</h4>
        <div class="row">
          <div class="col-lg-4">
            <div class="article-card">
              <a href="#">
                <img src="assets/img/pic01.jpg" alt="">
                <div class="article-card-text">
                  <div class="date">16.01.2023</div>
                  <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="article-card">
              <a href="#">
                <img src="assets/img/pic01.jpg" alt="">
                <div class="article-card-text">
                  <div class="date">16.01.2023</div>
                  <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="article-card">
              <a href="#">
                <img src="assets/img/pic01.jpg" alt="">
                <div class="article-card-text">
                  <div class="date">16.01.2023</div>
                  <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- / popular-articles -->
</div>

@include('includes.modals.subscribe')

@include('includes.modals.location', ["cities" => $cities]);

@stop