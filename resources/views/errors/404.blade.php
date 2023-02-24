<?php
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;

$mainController = new MainController();

$data = $mainController->e404(new Request());

$title = '';
$cities = $data['cities'];
$template = $data['template'];
$settings = $data['settings'];
?>

@extends('layouts.default')

@section('content')
<div class="breadcrumbs-wrapper">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">Главная</a></li>
            <li class="active">Страница не найдена</li>
        </ul>
    </div>
</div>
<div class="container">	      
    <div class="error-page">
        <div class="error-page-img"><img src="{{ asset('assets/img/err.svg') }}" alt=""></div>
        <h2>Упс, страница не найдена!</h2>
        <p>Проверьте ещё раз адрес страницы и введите его снова или перейдите на главную страницу и найти там ссылки на нужные данные.</p>
        <a href="{{url('/')}}" class="btn blue-btn">На главную страницу</a>
    </div>
</div>
@stop