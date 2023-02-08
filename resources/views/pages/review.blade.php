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
        <li><a href="{{url('/universitet/'.$current_review->university_slug)}}">Отзывы об университете</a></li>
        <li class="active">Отзыв {{$current_review->university_name}} № {{$current_review->number}}</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero university-full">
      <div class="hero-text">
        <div class="date">{{$current_review->updated_at}}</div>
        <h1 class="mb-1">Отзыв {{$current_review->university_name}} № {{$current_review->number}}</h1>
        <p>{{$current_review->university_name}}</p>
        <div class="btns">
          <a href="{{url('otzyvy')}}" class="btn">Читать все отзывы</a>
          <a href="{{url('dobavit-otzyv/'.$current_review->university_slug)}}" class="btn has-ico bordered-btn">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#files-ico"></use>
              </svg>
            </span>
            Оставить отзыв
          </a>
        </div>
      </div>
      <div class="hero-img">
        <div class="university-full-logo mb-0"><img src="{{asset('storage/'.$current_review->university_logo)}}" alt=""></div>        
      </div>
    </div>
    <!-- / hero -->  

    <!-- reviews-list -->
    <div class="reviews-list">
      <div class="review-card">
        <div class="review-card-top">
          <div class="user">
            <div class="user-photo"><img src="{{ asset('storage/'.$current_review->user_avatar) }}" alt=""></div>
            <div class="review-user-name">{{$current_review->user_first_name}} {{$current_review->user_last_name}}</div>
          </div>
          <div class="rating">
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
            <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
            <span>4.5</span>
          </div>
        </div>
        <p>{{$current_review->text}}</p>
        <a href="{{url('/universitet/'.$current_review->university_slug)}}" class="back">
          <span class="ico">
            <svg class="icon">
              <use xlink:href="#arrow-ico"></use>
            </svg>
          </span>
          Вернуться к отзывам об этом Вузе  
        </a>
      </div>
    </div>
    <!-- / reviews-list -->

    @include('components.reviews.honest')

    @include('components.reviews.popular')

</div>

<div class="bg-box">
    <div class="container">
        <!-- university review -->
    </div>
</div>

<div class="container">

    @include('components.articles.popular')
    
    @include('components.universities.popular')
    
</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop