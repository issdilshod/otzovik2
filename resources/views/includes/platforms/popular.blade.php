<div class="paltforms-slider swiper">
    <div class="swiper-wrapper">

        @foreach ($popular_platforms as $platform)
            <div class="swiper-slide">
                <div class="platform-card">
                    <div class="platform-card-head">
                        <div class="platform-card-logo"><img src="{{ asset('assets/img/p-logo01.svg') }}" alt=""></div>
                        <ul class="awards">
                            <li>
                                <span class="ico">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                4.7
                            </li>
                            <li>
                                <span class="ico">
                                    <svg class="icon">
                                        <use xlink:href="#cup-ico"></use>
                                    </svg>
                                </span>
                                № 4
                            </li>
                        </ul>
                    </div>
                    <div class="platform-card-body">
                        <p>Онлайн-школа, которая с 2016 года запускает одни из лучших курсов в digital</p>
                        <div class="platform-descript">
                            <li><span>Направлений:</span> Более 28</li>
                            <li><span>Стоимость:</span> от 1 699 руб.</li>
                            <li><span>Рассрочка:</span> Есть</li>
                            <li><span>Срок обучения:</span> от 3 месяцев</li>
                        </div>
                        <a href="#" class="btn bordered-btn">Оставить отзыв</a>
                    </div>							
                </div>
            </div>
        @endforeach

    </div>
</div>
<div class="container">
    <div class="slider-nav">
        <a href="{{url('/shkoly')}}" class="btn">Посмотреть все</a>
        <div class="slider-btns">					
            <div class="platforms-prev swiper-button-prev"></div>
            <div class="platforms-next swiper-button-next"></div>
        </div>
    </div>
</div>