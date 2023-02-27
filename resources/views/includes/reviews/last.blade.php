<!-- comments -->
<div class="comments">
    
    @foreach ($last_reviews as $review)
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
    @endforeach

    <div class="text-center">
        <a href="{{url('/otzyvy')}}" class="btn">Перейти ко всем отзывам</a>
    </div>
</div>
<!-- / comments -->