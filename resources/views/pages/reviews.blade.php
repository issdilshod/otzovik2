@extends('layouts.default')

@section('content')
<main>
<div class="container">

    <nav class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="{{url('/')}}" class="home">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#home-ico"></use>
              </svg>
            </span>
            Главная
          </a>
        </li>
        <li><a href="{{url('/otzyvy')}}">Отзывы</a></li>
        <li class="active">Все отзывы</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero">
      <div class="hero-text">
        <h1>Оценивайте и находите компании!</h1> 
        <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией!</p>       
        <div class="btns">
          <a href="#" class="btn has-ico">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#files-ico"></use>
              </svg>
            </span>
            Оставить отзыв
          </a>
          <a href="#" class="btn has-ico bordered-btn">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#building-ico"></use>
              </svg>
            </span>
            Добавить вуз
          </a>
        </div>
      </div>
      <div class="hero-img"><img src="{{ asset('assets/images/illustration02.svg') }}" alt=""></div>
    </div>
    <!-- / hero -->  

    @include('components.universities.directions')
    
    <div class="title-wrap align-items-center">
      <div class="headline">
        <div class="ico">
          <svg class="icon">
            <use xlink:href="#files-colorful"></use>
          </svg>
        </div>
        Все отзывы
      </div>
      <div class="sort">
        <a href="#" class="sort-item location">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#filter-ico"></use>
            </svg>
          </span>
          По рейтингу
        </a>
      </div>
    </div>  

    <!-- reviews-list -->
    <div class="reviews-list">
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
            <div class="review-card-bottom">
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
            <div class="review-about">
                <p>Отзыв о:</p>
                <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
                <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
            </div>
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
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <div class="review-card-bottom">
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
            <div class="review-about">
                <p>Отзыв о:</p>
                <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
                <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
            </div>
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
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <div class="review-card-bottom">
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
            <div class="review-about">
                <p>Отзыв о:</p>
                <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
                <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
            </div>
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
            <p>Прежде, чем начну говорить о плюсах и минусах, я хотел бы прояснить некоторые моменты, которые судя по количеству негативных отзывов становятся откровением для абитуриентов. Университет - это не школа, вам не будут тут разжевывать каждую строчку из учебника и не будут принуждать вас делать домашку, чтобы вы лучше усваивали материал. Задача лекций и семинаров, особенно по математическим дисциплинам - дать вам ту базу, с которой вы легко сможете понять все остальные аспекты или пункты темы. Точно так же и с задачами. Максимум, что вам предложат - это страницы из задачника и номера задач, которые вы если хотите можете делать, а можете не делать. Могу сказать лишь, что по статистике все те, кто стараются выполнять все пункты, предлагаемые преподавателями, в итоге оказываются на вершине рейтинга, а те, кто филонят полгода и получают неуд начинают строчить негативные комменты о том, как плохо преподавание в ВШЭ.Также хочу обратить внимание, что пишу я максимум про свой факультет и скорее даже про образовательную программу. Я не знаю, как обстоят дела в других местах</p>
            <div class="review-card-bottom">
            <a href="#" class="light-btn btn">Перейти на страницу отзыва</a>
            <div class="review-about">
                <p>Отзыв о:</p>
                <div class="review-about-logo"><img src="{{ asset('assets/images/logo01.png') }}" alt=""></div>
                <div class="review-about-text">МГУ имени М.В.Ломоносова</div>
            </div>
            </div>
        </div>
      
        @include('components.pagination.pagination')

    </div>

</div>

<div class="bg-box">
    <div class="container">      
        @include('components.articles.last')
    </div>
</div>

<div class="container">
    
    @include('components.universities.popular')

    @include('components.reviews.info')

</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop