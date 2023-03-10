<div class="super-header">
    <div class="container">
        <a href="#" data-toggle="modal" data-target="#modal01" class="location">
            <span class="ico">
                <svg class="icon">
                    <use xlink:href="#location-ico"></use>
                </svg>
            </span>
            Санкт-петербург
        </a>
        <div class="right-header">
            <a href="tel:+ 7(999)9999999" class="phone">
                <span class="ico">
                    <svg class="icon">
                        <use xlink:href="#call-ico"></use>
                    </svg>
                </span>
                + 7 (999) 999 - 99 - 99
            </a>
        </div>
        <ul class="socially">
            <li>
                <a class="_change_able" href="https://{{$template['header_telegram_link']??''}}" data-key="header_telegram_link" data-page="">
                    <img src="{{asset('assets/img/telegram.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a class="_change_able" href="https://{{$template['header_whatsapp_link']??''}}" data-key="header_whatsapp_link" data-page="">
                    <img src="{{asset('assets/img/whatsapp.svg')}}" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="header-inner">
    <div class="container">
        <<?php echo (request()->is('/'))?'span':'a';?> href="{{url('/')}}" class="logo">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="">
        </<?php echo (request()->is('/'))?'span':'a';?>>
        <ul class="main-nav">
            <li><a href="{{url('/platformi')}}">Школы</a></li>
            <li><a href="{{url('/otzyvy')}}">Отзывы</a></li>
            <li><a href="{{url('/o-service')}}">О портале</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
        <div class="inner-right">
            <div class="search">
                <form>
                <div class="search-ico">
                    <svg class="icon">
                        <use xlink:href="#search-ico"></use>
                    </svg>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control">
                    <div class="search-btn">
                        <svg class="icon">
                            <use xlink:href="#search-ico"></use>
                        </svg>
                    </div>
                    <a href="#" class="close"></a>
                </div>
                </form>
            </div>
            <a href="{{url('/platformi')}}" class="btn">Оставить отзыв</a>
            <div class="nav-ico"></div>        
        </div>
        <div class="backdrop"></div>
    </div>
</div>