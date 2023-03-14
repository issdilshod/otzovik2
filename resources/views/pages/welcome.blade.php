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
                        <h1 class="_change_able" data-key="index_banner1_h1" data-page="{{$_GET['_page']??''}}">{{$template['index_banner1_h1']??__('global_empty')}}</h1>
                        <p class="large _change_able" data-key="index_banner1_p" data-page="{{$_GET['_page']??''}}">{{$template['index_banner1_p']??__('global_empty')}}</p>
                        <a href="{{url('/platformi')}}" class="btn">Подобрать платформу</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-img"><img src="{{ asset('assets/img/hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="hero-text">
                        <h1 class="_change_able" data-key="index_banner2_h1" data-page="{{$_GET['_page']??''}}">{{$template['index_banner2_h1']??__('global_empty')}}</h1>
                        <p class="large _change_able" data-key="index_banner2_p" data-page="{{$_GET['_page']??''}}">{{$template['index_banner2_p']??__('global_empty')}}</p>
                        <a href="{{url('/platformi')}}" class="btn">Подобрать платформу</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-img"><img src="{{ asset('assets/img/hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="hero-text">
                        <h1 class="_change_able" data-key="index_banner3_h1" data-page="{{$_GET['_page']??''}}">{{$template['index_banner3_h1']??__('global_empty')}}</h1>
                        <p class="large _change_able" data-key="index_banner3_p" data-page="{{$_GET['_page']??''}}">{{$template['index_banner3_p']??__('global_empty')}}</p>
                        <a href="{{url('/platformi')}}" class="btn">Подобрать платформу</a>
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
                <strong class="_change_able" data-key="index_counter1" data-page="{{$_GET['_page']??''}}">{{$template['index_counter1']??__('global_empty')}}</strong>
                посещаемость
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#files-ico"></use>
                    </svg>
                </span>
                <strong class="_change_able" data-key="index_counter2" data-page="{{$_GET['_page']??''}}">{{$template['index_counter2']??__('global_empty')}}</strong>
                отзывов
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#users-ico"></use>
                    </svg>
                </span>
                <strong class="_change_able" data-key="index_counter3" data-page="{{$_GET['_page']??''}}">{{$template['index_counter3']??__('global_empty')}}</strong>
                пользователей
            </li>
            <li>
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#teacher-ico"></use>
                    </svg>
                </span>
                <strong class="_change_able" data-key="index_counter4" data-page="{{$_GET['_page']??''}}">{{$template['index_counter4']??__('global_empty')}}</strong>
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
    @include('includes.platforms.popular')	
</div>
<!-- / platforms -->	
        
<!-- top-block -->
<div class="top-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2><span class="violet">ТОП 6</span> онлайн платформ по мнению редакции</h2>
                <p class="large _change_able" data-key="index_top_p" data-page="{{$_GET['_page']??''}}">{{$template['index_top_p']??__('global_empty')}}</p>
            </div>
            <div class="col-lg-6">
                @include('includes.platforms.top6')
            </div>
        </div>
    </div>
</div>

<!-- / top-block -->
<div class="container">
    <div class="teaser">
        <h2 class="_change_able" data-key="index_teaser_h2" data-page="{{$_GET['_page']??''}}">{{$template['index_teaser_h2']??__('global_empty')}}</h2>
        <p class="large _change_able" data-key="index_teaser_p" data-page="{{$_GET['_page']??''}}">{{$template['index_teaser_p']??__('global_empty')}}</p>
        <a href="{{url('/platformi')}}" class="btn bordered-btn white-btn">Подобрать платформу</a>
    </div>
    <div class="title-wrap text-left">
        <h2>Последние опубликованные отзывы</h2>
        <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
    </div>
    <div class="row">
        <div class="col-lg-8">
            @include('includes.reviews.last')
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
                    <a href="{{url('/dobavit-otzyv')}}" class="btn blue-btn">Оставить отзыв</a>
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
            <form id="sending-subscribe">
                <div class="sending-title">Подпишитесь на нашу рассылку</div>
                <p class="large">Получайте рассылку с набором полезных статей по 2 раза в неделю и будь в курсе всех событий</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group"><input type="text" name="name" placeholder="Ваше Имя" class="form-control"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group"><input type="email" name="email" placeholder="E-mail" class="form-control"></div>
                    </div>
                </div>
                <div class="sending-bottom">
                    <button class="btn">Подписаться</button>
                    <div class="agree">Отправляя данную форму, вы соглашаетесь с <a href="{{url('/policy')}}">политикой конфиденциальности</a> и <a href="{{url('/legal')}}">обработку персональных данных</a></div>
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
        @include('includes.articles.popular')
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
    @include('includes.reviews.viewed')
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

@include('includes.modals.subscribe')

@include('includes.modals.location', ["cities" => $cities]);

@stop