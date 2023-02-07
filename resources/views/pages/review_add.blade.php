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
        <li class="active">Оставить комментарий</li>
      </ol>
    </nav>

    <!-- hero -->
    <div class="hero university-full">
        <div class="hero-text">
            <h1>{{$university->name}}</h1>
            <div class="university-full-row">
            <div class="acc-item">
                <label>Мировой рейтинг:</label>
                <div class="rate-info">
                <span class="ico">
                    <svg class="icon">
                    <use xlink:href="#medal-ico"></use>
                    </svg>
                </span>
                {{$university->worlds_rate}}
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
                {{$university->russian_rate}}
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
                0
                </div>
            </div>          
            </div>
        </div>
        <div class="hero-img">
                <div class="university-full-logo"><img src="{{ asset('storage/'.$university->logo) }}" alt=""></div>
                @if ($university->accreditation)
                <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>  
                @endif
        </div>
    </div>
    <!-- / hero -->   

    <!-- form-block -->
    <div class="form-block white-form">
      <form id="review-add-form" action="{{url('review/')}}" method="post">
        @csrf
        <input name="id" type="hidden" value="{{$university->id}}" />
        <h2>Оставить отзыв</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group"><input name="first_name" type="text" placeholder="Имя*" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input name="last_name" type="text" placeholder="Фамилия" class="form-control"></div>
          </div>
          <div class="col-lg-4">
            <div class="form-group"><input name="email" type="text" placeholder="Почта*" class="form-control"></div>
          </div>
          <div class="col-lg-12">
            <div class="form-group"><textarea name="text" placeholder="Отзыв*" cols="30" rows="10" class="form-control"></textarea></div>
          </div>
        </div>
        <div class="form-block-btm">
          <button class="btn has-ico" id="review-post-button" disabled="disabled">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#letter-ico"></use>
              </svg>
            </span>
            Оставить отзыв
          </button>
          <div class="file-box">
            <input type="file" name="file" data-jcf='{"buttonText": "", "placeholderText": "Загрузить фото: jpg или png"}'>
          </div>
        </div>
        <div class="ch-item">
          <input type="checkbox" name="f-agr" id="f-agr">
          <label for="f-agr">Я ознакомился с <a href="#">политикой конфиденциальности</a> и даю согласование на <a href="#">обработку персональных данных</a></label>
        </div>
      </form>
    </div>
    <!-- / form-block -->
    <script>
        // aggreement
        $(document).on('click', '#f-agr', function(e){
            if($(this).is(':checked')){
                $('#review-post-button').removeAttr('disabled');
            }else{
                $('#review-post-button').attr('disabled', 'disabled');
            }
        });

        // ajax send review
        $(document).on('submit', '#review-add-form', function(e){
            e.preventDefault();
        });
    </script>
</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')    
    </div>
</div>
  
<div class="container">         
    @include('components.reviews.info')
</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop