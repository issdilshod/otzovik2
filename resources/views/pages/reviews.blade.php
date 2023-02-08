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
          <a href="{{url('poisk')}}" class="btn has-ico">
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

        @foreach ($list as $item)
            <div class="review-card">
                <div class="review-card-top">
                <div class="user">
                    <div class="user-photo"><img src="{{ asset('storage/'.$item->user_avatar) }}" alt=""></div>
                    <div class="review-user-name">{{$item->user_first_name}} {{$item->user_last_name}}</div>
                </div>
                <div class="date">{{$item->updated_at}}</div>
                <div class="rating">
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                    <span>4.5</span>
                </div>
                </div>
                <p>{{$item->text}}</p>
                <div class="review-card-bottom">
                <a href="{{url('otzyv/'.$item->number)}}" class="light-btn btn">Перейти на страницу отзыва</a>
                <div class="review-about">
                    <p>Отзыв о:</p>
                    <div class="review-about-logo"><img src="{{ asset('storage/'.$item->university_logo) }}" alt=""></div>
                    <div class="review-about-text">{{$item->university_name}}</div>
                </div>
                </div>
            </div> 
        @endforeach
        
      
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