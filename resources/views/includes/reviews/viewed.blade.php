<div class="viewed-slider swiper">
    <div class="swiper-wrapper">   
        
        @foreach ($popular_reviews as $review)
            <div class="swiper-slide">
                <div class="comment-card">
                    <div class="comment-card-top">
                        <div class="comment-card-text">
                            <div class="comment-name">
                                Андрей Жураков, г. Москва
                                <span class="check">
                                    <svg class="icon">
                                        <use xlink:href="#check-ico"></use>
                                    </svg>
                                </span>
                            </div>
                            <div class="platform-link">Платформа: <a href="#">Нетология</a></div>
                            <div class="rating">
                                <span class="star">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                <span class="star">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                <span class="star">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                <span class="star">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                <span class="star">
                                    <svg class="icon">
                                        <use xlink:href="#star-ico"></use>
                                    </svg>
                                </span>
                                <span class="rate-num">5.0</span>
                            </div>
                        </div>
                        <div class="comment-card-photo"><img src="{{ asset('assets/img/photo01.jpg') }}" alt=""></div>
                    </div>
                    <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
                    <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
                    <a href="#" class="more">Прочитать полностью</a>
                </div>
            </div>
        @endforeach

    </div>
</div>  
<div class="slider-nav">
    <a href="{{url('/otzyvy')}}" class="btn bordered-btn white-btn">Читать все отзывы</a>
    <div class="slider-btns">					
        <div class="viewed-prev swiper-button-prev"></div>
        <div class="viewed-pagination swiper-pagination"></div>
        <div class="viewed-next swiper-button-next"></div>
    </div>
</div> 