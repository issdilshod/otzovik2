<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" class="logo"><img src="{{ asset('assets/img/logo-white.svg') }}" alt=""></a>
                <ul class="socially">
                    <li><a href="#"><img src="{{ asset('assets/img/instagram.svg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('assets/img/vk.svg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('assets/img/telegram.svg') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('assets/img/whatsapp.svg') }}" alt=""></a></li>
                </ul>
                <a href="tel:+ 7(999)9999999" class="phone">
                    <span class="ico">
                        <svg class="icon">
                        <use xlink:href="#phone-ico"></use>
                        </svg>
                    </span>
                    + 7 (999) 999 - 99 - 99
                </a>
                <div class="adress">
                    <span class="ico">
                        <svg class="icon">
                        <use xlink:href="#pin-ico"></use>
                        </svg>
                    </span>
                    Проспект Вернадского,д. 29 (БЦ Лето)
                </div>
            </div>
            <div class="col-lg-4">
                <div class="f-title">Сервис</div>
                <ul class="f-list">
                    <li><a href="{{url('/o-service')}}">О портале</a></li>
                    <li><a href="{{url('/posti')}}">Статьи</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Связаться с нами</a></li>
                    <li><a href="{{url('policy')}}">Политика конфиденциальности</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="f-title">Для учебных заведений</div>
                <ul class="f-list">
                    <li><a href="#">Рейтинг специальностей</a></li>
                    <li><a href="#">Рейтинг платформ</a></li>
                    <li><a href="#">Добавить учебное заведение</a></li>
                    <li><a href="#">Регистрация</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
<div class="container">
    <div class="copy">&copy; Отзывы <?=date('Y')?>. Все права защищены.</div>
    <div class="create">Разработка <a href="#">W3PROMO</a></div>
</div>
</div>