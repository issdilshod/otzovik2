<div class="articles-slider swiper">
    <div class="swiper-wrapper">

        @foreach ($popular_articles as $article)
            <div class="swiper-slide">
                <div class="article-card">
                    <a href="#">
                    <img src="{{ asset('assets/img/pic01.jpg') }}" alt="">
                    <div class="article-card-text">
                        <div class="date">16.01.2023</div>
                        <div class="article-card-title">Вот вам яркий пример современных тенденций — понимание сути</div>
                    </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
<div class="slider-nav">
    <a href="{{url('/posti')}}" class="btn">Читать все статьи</a>
    <div class="slider-btns">        
        <div class="articles-prev swiper-button-prev"></div>
        <div class="articles-next swiper-button-next"></div>
    </div>
</div>