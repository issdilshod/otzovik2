<div class="paltforms-slider-01 swiper">
    <div class="swiper-wrapper">

        @foreach ($popular_minimal_platforms as $platform)
            <div class="swiper-slide">
                <div class="platform-card">
                    <a href="{{url('/platforma/'.$platform->slug)}}">
                        <div class="platform-card-head">
                            <div class="platform-card-logo">
                                <img src="{{asset('storage/'.$platform->logo)}}" alt="">
                            </div>
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
                            <p>{{$platform->name}}</p>
                        </div>							
                    </a>
                </div>
            </div>
        @endforeach

    </div>
</div>
<div class="container">
    <div class="slider-nav">
        <a href="{{url('/top-platformi')}}" class="btn">Посмотреть все</a>
        <div class="slider-btns">					
            <div class="platforms-01-prev swiper-button-prev"></div>
            <div class="platforms-01-next swiper-button-next"></div>
        </div>
    </div>
</div>