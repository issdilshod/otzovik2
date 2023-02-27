@extends('layouts.default')

@section('content')

<div class="breadcrumbs-wrapper">
    <div class="container">
    <ul class="breadcrumbs">
        <li><a href="{{url('/')}}">Главная</a></li>
        <li class="active">Школы</li>
    </ul>
    </div>
</div>

<div class="container">	
    <ul class="tag-list">
        <li><a href="#" class="active">Личностный рост</a></li>
        <li><a href="#">Skillbox</a></li>
        <li><a href="#">Geekbrains</a></li>
        <li><a href="#">Нетология</a></li>
        <li><a href="#">Otus</a></li>
        <li><a href="#">Skillfactory</a></li>
        <li><a href="#">Synergy</a></li>
        <li><a href="#">Программирование</a></li>
        <li><a href="#">Курсы тестировщиков</a></li>
        <li><a href="#">Финансовая аналитика</a></li>
    </ul>		
    <div class="title-wrap text-left">
        <h1>Образовательные платформы</h1>
        <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
    </div>
	<div class="row">
		<div class="col-lg-8">
            <a href="#" class="sort">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#filter-ico"></use>
                </svg>
                </span>
                По рейтингу
            </a>
            <!-- platforms-list -->
            <div class="platforms-list">
                <div class="row">

                    <div class="col-md-6">
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

                
                </div>
                <div class="text-center">
                    <a href="#" class="btn">Посмотреть ещё</a>
                </div>
            </div>
            <!-- / platforms-list -->
		</div>
        <div class="col-lg-4">
            <aside>
                <div class="proposal-teaser">
                    <div class="proposal-teaser-logo"><a href="#"><img src="{{asset('assets/img/gb-logo.svg')}}" alt=""></a></div>
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

<!-- platforms -->
<div class="platforms">
    <div class="container">
        <div class="title-wrap">
            <h2>Популярные образовательные платформы</h2>
        </div>								
    </div>
    @include('includes.platforms.popular_minimal')
</div>
<!-- / platforms -->

<!-- viewed -->
<div class="viewed">
    <div class="container">
        <div class="title-wrap">
        <h2>Самые просматриваемые отзывы</h2>
        <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития.</p>
        </div>
    </div>
    @include('includes.reviews.viewed')
</div>
<!-- / viewed -->

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