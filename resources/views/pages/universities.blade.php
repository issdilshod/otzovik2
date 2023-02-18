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
        <h1 class="_change_able" data-key="universities_info_h1" data-value="{{$template['universities_info_h1']}}">{{$template['universities_info_h1']}}</h1>
        <p class="_change_able" data-key="universities_info_p" data-value="{{$template['universities_info_p']}}">{{$template['universities_info_p']}}</p>        
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
            @foreach ($list as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="institution-card">
                        <div class="institution-title"><a href="{{url('/universitet/'.$item->slug)}}">{{$item->name}}</a></div>
                        <div class="institution-img"><a href="{{url('/universitet/'.$item->slug)}}"><img src="{{ asset('storage/'.$item->logo) }}" alt=""></a></div>
                        <div class="institution-labels">
                            <div class="i-label full">
                                <div class="rate-info">
                                <span class="ico">
                                    <svg class="icon">
                                    <use xlink:href="#files-colorful"></use>
                                    </svg>
                                </span>
                                {{$item->reviews_count}}
                                </div>
                            </div>
                            <div class="i-label">
                                <div class="rate-info">
                                <span class="ico">
                                    <svg class="icon">
                                    <use xlink:href="#medal01-ico"></use>
                                    </svg>
                                </span>
                                {{$item->russian_rate}}
                                </div>
                            </div>
                            <div class="i-label">
                                <div class="rate-info">
                                <span class="ico">
                                    <svg class="icon">
                                    <use xlink:href="#medal-ico"></use>
                                    </svg>
                                </span>
                                {{$item->worlds_rate}}
                                </div>
                            </div>
                        </div>
                        @if ($item->accreditation)
                        <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div> 
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="help">
                    <div class="help-img"><img src="{{ asset('assets/images/help-img.svg') }}" alt=""></div>
                    <div class="help-title">Не нашли нужный ВУЗ?</div>
                    <a href="{{url('/universitety')}}" class="btn">Список ВУЗов</a>
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