<div class="title-wrap">
    <div class="headline">
    <div class="ico">
        <svg class="icon">
        <use xlink:href="#files-colorful"></use>
        </svg>
    </div>
    Популярные отзывы о ВУЗах <!-- Другие отзывы о ВУЗе -->
    </div>
    <a href="{{url('/otzyvy')}}" class="btn">Читать все отзывы</a>
</div>
<!-- reviews -->
<div class="reviews">
  <div class="reviews-slider slider review-01 swiper">
    <div class="swiper-wrapper">

        @foreach ($popular_reviews as $review)
            <div class="swiper-slide">
                <div class="review-card">
                <div class="review-user-name">{{$review->user_first_name}} {{$review->user_last_name}}</div>
                <div class="date">{{$review->created_at}}</div>
                <div class="rating">
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                    <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                    <span>4.5</span>
                </div>
                <p>{{\Illuminate\Support\Str::limit($review->text, 179, '...')}}</p>
                <div class="review-subtitle">Отзыв про:</div>
                <p><strong>{{$review->university_name}}</strong></p>
                </div>
            </div>
        @endforeach

    </div>
  </div>
  <div class="slider-nav">
    <div class="swiper-pagination slider-pagination review-01-pagination"></div>
    <div class="slider-nav-btns">
      <div class="swiper-button-prev review-prev01"></div>
      <div class="swiper-button-next review-next01"></div>
    </div>
  </div>
</div>
<!-- / review -->