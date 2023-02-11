@extends('layouts.default')

@section('content')
<main>
  <div class="container">
    <nav class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="#" class="home">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#home-ico"></use>
              </svg>
            </span>
            Главная
          </a>
        </li>
        <li class="active">Страница не найдена</li>
      </ol>
    </nav>
    <div class="error-message">
      <div class="error-message-img"><img src="{{ asset('assets/images/error-img.svg')}}" alt=""></div>
      <div class="headline">Упс, страница не найдена!</div>
      <p>Проверьте ещё раз адрес страницы и введите его снова или перейдите на главную страницу и найти там ссылки на нужные данные.</p>
      <a href="{{url('/')}}" class="btn">На главную страницу</a>
    </div>
  </div>  
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.svgs.welcome')

@stop