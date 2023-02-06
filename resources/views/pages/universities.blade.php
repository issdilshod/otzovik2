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
        <li class="active">Университеты</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero">
      <div class="hero-text has-size">
        <h1>Текстовый блок</h1>
        <p>Отзыв.ru – интернет-портал для старшеклассников, абитуриентов, студентов. Наша работа – это забота о том, чтобы поиск информации о вузе или колледже, будущей профессии и специальности стал для вас максимально удобным и простым. Поэтому каждый день мы совершенствуем наш сайт и наполняем его новыми интересными материалами, чтобы вы могли найти гораздо больше, чем просто ответы на вопросы.</p>        
      </div>
      <div class="hero-img"><img src="{{ asset('assets/images/hero02.svg') }}" alt=""></div>
    </div>
    <!-- / hero -->

    @include('components.universities.directions')

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
            <div class="help">
                <div class="help-img"><img src="{{ asset('assets/images/help-img.svg') }}" alt=""></div>
                <div class="help-title">Не нашли нужный ВУЗ?</div>
                <a href="#" class="btn">Список ВУЗов</a>
            </div>
            </div>
        </div>
      
        @include('components.pagination.pagination')

    </div>
    <!--  /institutions -->

    @include('components.reviews.honest')    

</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')
    </div>
</div>

<div class="container">
    
    @include('components.universities.popular')

    @include('components.reviews.popular')

    @include('components.reviews.info')
    
</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop