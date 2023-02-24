@extends('layouts.default')

@section('content')

<!-- hero -->
<div class="hero">
    <div class="home-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-img"><img src="{{ asset('assets/img/hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="hero-text">
                        <h1>Независимый сервис по оценке платформ для онлайн обучения</h1>
                        <p class="large">Узнай что реально пишут о всех извесных платформах для онлайн обучения, которые вы рассматриваете для поступления!</p>
                        <a href="#" class="btn">Подобрать платформу</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-img"><img src="{{ asset('assets/img/hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="hero-text">
                        <h1>Независимый сервис по оценке платформ для онлайн обучения</h1>
                        <p class="large">Узнай что реально пишут о всех извесных платформах для онлайн обучения, которые вы рассматриваете для поступления!</p>
                        <a href="#" class="btn">Подобрать платформу</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-img"><img src="{{ asset('assets/img/hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="hero-text">
                        <h1>Независимый сервис по оценке платформ для онлайн обучения</h1>
                        <p class="large">Узнай что реально пишут о всех извесных платформах для онлайн обучения, которые вы рассматриваете для поступления!</p>
                        <a href="#" class="btn">Подобрать платформу</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-slider-pagination"></div>
    </div>
    <div class="container">
        <ul class="benefits">
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#monitor-ico"></use>
                    </svg>
                </span>
                <strong>452 851</strong>
                посещаемость
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#files-ico"></use>
                    </svg>
                </span>
                <strong>45 285</strong>
                отзывов
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#users-ico"></use>
                    </svg>
                </span>
                <strong>4 528</strong>
                пользователей
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#teacher-ico"></use>
                    </svg>
                </span>
                <strong>452</strong>
                платформ
            </li>
        </ul>
    </div>
</div>
<!-- / hero -->

<!-- platforms -->
<div class="platforms">
    <div class="container">
        <div class="title-wrap">
            <h2>Популярные образовательные платформы</h2>
            <p class="large">С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
        </div>								
    </div>
    <div class="paltforms-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo01.svg') }}" alt=""></div>
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
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo02.svg') }}" alt=""></div>
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
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo03.svg') }}" alt=""></div>
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
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo04.svg') }}" alt=""></div>
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
                            <li><span>Направлений:</span> Более 20</li>
                            <li><span>Стоимость:</span> от 1 699 руб.</li>
                            <li><span>Рассрочка:</span> Есть</li>
                            <li><span>Срок обучения:</span> от 3 месяцев</li>
                        </div>
                        <a href="#" class="btn bordered-btn">Оставить отзыв</a>
                    </div>							
                </div>
            </div>
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo01.svg') }}" alt=""></div>
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
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo02.svg') }}" alt=""></div>
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
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo03.svg') }}" alt=""></div>
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
    </div>
    <div class="container">
        <div class="slider-nav">
            <a href="#" class="btn">Посмотреть все</a>
            <div class="slider-btns">					
                <div class="platforms-prev swiper-button-prev"></div>
                <div class="platforms-next swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>
<!-- / platforms -->		
        
<!-- top-block -->
<div class="top-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2><span class="violet">ТОП 6</span> онлайн платформ по мнению редакции</h2>
                <p class="large">С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo02.svg') }}" alt="">
                            <div class="num">
                                <svg class="icon">
                                    <use xlink:href="#cup-color"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo01.svg') }}" alt="">
                            <div class="num">2</div>
                        </a>
                    </div>
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo03.svg') }}" alt="">
                            <div class="num">3</div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo04.svg') }}" alt="">
                            <div class="num">4</div>
                        </a>
                    </div>
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo05.svg') }}" alt="">
                            <div class="num">5</div>
                        </a>
                    </div>
                    <div class="top-card">
                        <a href="#">
                            <img src="{{ asset('assets/img/p-logo02.svg') }}" alt="">
                            <div class="num">6</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- / top-block -->
<div class="container">
    <div class="teaser">
        <h2>Не можете решить где обучаться?</h2>
        <p class="large">Мы поможем Вам подобрать платфому для онлайн обучения, где Вас смогут научить всему что пожелаете.</p>
        <a href="#" class="btn bordered-btn white-btn">Подобрать платформу</a>
    </div>		
    <div class="title-wrap text-left">
        <h2>Последние опубликованные отзывы</h2>
        <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- comments -->
            <div class="comments">
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo01.jpg') }}" alt=""></div>
                    </div>
                    <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
                    <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
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
                            <div class="platform-link">Платформа: <a href="#">Skysmart</a></div>
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo02.jpg') }}" alt=""></div>
                    </div>
                    <p>Я новичок в профессии, и мне важно было, чтобы курс сочетал в себе теорию и практику. Свои ощущения я назову более чем положительными, потому что курс мне понравился. Я очень много получила полезной информации, которой буду пользоваться. Сейчас я в процессе поиска работы, и карьерные консультанты Skillbox мне в этом очень помогают.</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
                <div class="comment-card">
                    <div class="comment-card-top">
                        <div class="comment-card-text">
                            <div class="comment-name">
                                Ирина Афанасьева, г. Череповец
                                <span class="check">
                                    <svg class="icon">
                                        <use xlink:href="#check-ico"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="platform-link">Платформа: <a href="#">Skillbox</a></div>
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo03.jpg') }}" alt=""></div>
                    </div>
                    <p>Я программист. Долгое время занималась разработкой и внедрением систем, а затем руководила IT-подразделениями крупных энергетических компаний. Сейчас для меня настало время перемен, и я подумала, что нужно обновить знания. Тем более что теоретических основ по управлению проектами у меня не было.</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
                <div class="comment-card">
                    <div class="comment-card-top">
                        <div class="comment-card-text">
                            <div class="comment-name">
                                Андрей Жураков, г. Москва
                                <span class="check uncheck">
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo01.jpg') }}" alt=""></div>
                    </div>
                    <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
                    <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
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
                            <div class="platform-link">Платформа: <a href="#">Skysmart</a></div>
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo02.jpg') }}" alt=""></div>
                    </div>
                    <p>Я новичок в профессии, и мне важно было, чтобы курс сочетал в себе теорию и практику. Свои ощущения я назову более чем положительными, потому что курс мне понравился. Я очень много получила полезной информации, которой буду пользоваться. Сейчас я в процессе поиска работы, и карьерные консультанты Skillbox мне в этом очень помогают.</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
                <div class="text-center">
                    <a href="#" class="btn">Перейти ко всем отзывам</a>
                </div>
            </div>
            <!-- / comments -->
        </div>
        <div class="col-lg-4">
            <aside>
                <div class="proposal-teaser">
                    <div class="proposal-teaser-logo"><a href="#"><img src="{{ asset('assets/img/gb-logo.svg') }}" alt=""></a></div>
                    <p><strong>Мы обучаем с нуля профессиям и предоставляем знания</strong> по востребованным специальностям и направлениям в сфере ИТ.</p>
                    <ul>
                        <li>Аналитика</li>
                        <li>Тестирование</li>
                        <li>Продуктовое управление в ИТ</li>
                        <li>Проектное управление в ИТ</li>
                        <li>Программирование</li>
                        <li>Архитектура</li>
                    </ul>
                </div>
                <div class="add-comment">
                    <div class="title">Оставьте отзыв</div>
                    <p>Расскажите о своем опыте использования образовательных платформ</p>
                    <a href="#" class="btn blue-btn">Оставить отзыв</a>
                    <div class="subtitle">Как мы работаем с отзывами</div>
                    <ul>
                        <li>Отзыв проходит модерацию</li>
                        <li>Представитель онлайн-школы отвечает на отзыв</li>
                        <li>Решение проблемы на сайте</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- sending subscribe -->
<div class="sending">
    <div class="container">
        <div class="sending-body">
            <form>
                <div class="sending-title">Подпишитесь на нашу рассылку</div>
                <p class="large">Получайте рассылку с набором полезных статей по 2 раза в неделю и будь в курсе всех событий</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group"><input type="text" placeholder="Ваше Имя" class="form-control"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group"><input type="email" placeholder="E-mail" class="form-control"></div>
                    </div>
                </div>
                <div class="sending-bottom">
                    <button class="btn" data-toggle="modal" data-target="#modal02">Подписаться</button>
                    <div class="agree">Отправляя данную форму, вы соглашаетесь с <a href="#">политикой конфиденциальности</a> и <a href="#">обработку персональных данных</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / sending subscribe -->
        
<!-- popular-articles -->
<div class="popular-articles">
    <div class="container">
        <div class="title-wrap text-left">
            <h2>Популярные статьи</h2>
            <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
        </div>
        <div class="articles-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic01.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic02.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic03.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic01.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic02.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="article-card">
                        <a href="#">
                        <img src="{{ asset('assets/img/pic03.jpg') }}" alt="">
                        <div class="article-card-text">
                            <div class="date">16.01.2023</div>
                            <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav">
            <a href="#" class="btn">Читать все статьи</a>
            <div class="slider-btns">        
                <div class="articles-prev swiper-button-prev"></div>
                <div class="articles-next swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>
<!-- / popular-articles -->

<!-- viewed reviews -->
<div class="viewed">
    <div class="container">
        <div class="title-wrap">
            <h2>Самые просматриваемые отзывы</h2>
            <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития.</p>
        </div>
    </div>
    <div class="viewed-slider swiper">
        <div class="swiper-wrapper">      
            <div class="swiper-slide">
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo01.jpg') }}" alt=""></div>
                    </div>
                    <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
                    <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
            </div>
            <div class="swiper-slide">
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
                            <div class="platform-link">Платформа: <a href="#">Skysmart</a></div>
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo02.jpg') }}" alt=""></div>
                    </div>
                    <p>Я новичок в профессии, и мне важно было, чтобы курс сочетал в себе теорию и практику. Свои ощущения я назову более чем положительными, потому что курс мне понравился. Я очень много получила полезной информации, которой буду пользоваться. Сейчас я в процессе поиска работы, и карьерные консультанты Skillbox мне в этом очень помогают.</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="comment-card">
                    <div class="comment-card-top">
                        <div class="comment-card-text">
                            <div class="comment-name">
                                Ирина Афанасьева, г. Череповец
                                <span class="check">
                                    <svg class="icon">
                                        <use xlink:href="#check-ico"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="platform-link">Платформа: <a href="#">Skillbox</a></div>
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
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo03.jpg') }}" alt=""></div>
                    </div>
                    <p>Я программист. Долгое время занималась разработкой и внедрением систем, а затем руководила IT-подразделениями крупных энергетических компаний. Сейчас для меня настало время перемен, и я подумала, что нужно обновить знания. Тем более что теоретических основ по управлению проектами у меня не было.</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
            </div>
        </div>
    </div>  
    <div class="slider-nav">
        <a href="#" class="btn bordered-btn white-btn">Читать все отзывы</a>
        <div class="slider-btns">					
            <div class="viewed-prev swiper-button-prev"></div>
            <div class="viewed-pagination swiper-pagination"></div>
            <div class="viewed-next swiper-button-next"></div>
        </div>
    </div>  
</div>
<!-- / viewed reviews -->

<!-- text -->
<div class="text">
    <div class="container">
        <h2>Оценивайте и находите компании!</h2>
        <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.</p>
        <a href="#" class="btn bordered-btn">Читать дальше</a>
    </div>
</div>
<!-- / text -->

@include('includes.modals.subscribe', ["msg" => 'success'])

@stop