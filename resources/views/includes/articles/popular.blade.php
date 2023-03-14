<div class="articles-slider swiper">
    <div class="swiper-wrapper">

        @foreach ($popular_articles as $article)
            <div class="swiper-slide">
                <div class="article-card">
                    <a href="{{url('post/'.$article->slug)}}">
                    <img src="{{asset('storage/'.$article->cover)}}" alt="">
                    <div class="article-card-text">
                        <div class="date">{{App\Services\Admin\Misc\SystemService::get_date_for_blog($article->updated_at)}}</div>
                        <div class="article-card-title">{{$article->title}}</div>
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