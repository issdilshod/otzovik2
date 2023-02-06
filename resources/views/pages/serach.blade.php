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
            <li class="active">Поиск университета</li>
        </ol>
        </nav>
        <!-- form -->
        <div class="form">
        <form>
            <h3>Где получить образование</h3>
            <div class="form-row">
            <div class="form-group size01">
                <label for="place">Регион</label>
                <div class="input-wrapper">
                <input type="text" placeholder="Кра|" id="place">
                <div class="input-hint" style="display: none;">
                    <ul>
                    <li><a href="#"><span>Кра</span>снодар</a></li>
                    <li><a href="#"><span>Кра</span>сногорск</a></li>
                    <li><a href="#"><span>Кра</span>сносельск</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="form-group size02">
                <label>Направление</label>
                <select data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false, "fakeDropInBody": false, "useCustomScroll": false}'>
                    @foreach ($directions as $direction)
                        <option value="{{$direction->id}}">{{$direction->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group size03">
                <label>Уровень образования</label>
                <select data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false, "fakeDropInBody": false, "useCustomScroll": false}'>
                <option value="">Высшее</option>
                <option value="">Высшее</option>
                <option value="">Высшее</option>              
                </select>
            </div>
            <div class="form-group size04">
                <label>Форма обучения</label>
                <select data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false, "fakeDropInBody": false, "useCustomScroll": false}'>
                    @foreach ($education_types as $education_type)
                        <option value="{{$education_type->id}}">{{$education_type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="form-btn">
                <svg class="icon">
                    <use xlink:href="#search-ico"></use>
                </svg>
                Искать
                </button>
            </div>
            </div>
        </form>
        </div>
        <!-- / form -->

        <!-- institutions -->
        <div class="institutions">
            <div class="headline">
                <div class="ico">
                <svg class="icon">
                    <use xlink:href="#teacher-full"></use>
                </svg>
                </div>
                Найдено {{$list->total()}} учебных заведения
            </div>
            <div class="row">
                @foreach ($list as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="institution-card">
                            <div class="institution-title"><a href="{{url('/universitet/'.$item->slug)}}">{{$item->name}}</a></div>
                            <div class="institution-img"><a href="{{url('/universitet/'.$item->slug)}}"><img src="{{asset('/storage/'.$item->logo)}}" alt=""></a></div>
                            <div class="institution-labels">
                            <div class="i-label full">
                                <div class="rate-info">
                                <span class="ico">
                                    <svg class="icon">
                                    <use xlink:href="#files-colorful"></use>
                                    </svg>
                                </span>
                                0
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
                            @if($item->accreditation)
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