<!-- institutions -->
<div class="institutions">
    <div class="title-wrap">
    <div class="headline">
        <div class="ico">
        <svg class="icon">
            <use xlink:href="#files-colorful"></use>
        </svg>
        </div>
        Популярные ВУЗы
    </div>
    <a href="{{url('/universitety')}}" class="btn">Смотреть все ВУЗы</a>
    </div>
    <div class="row">
        @foreach ($popular_universities as $university)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="institution-card">
                <div class="institution-title"><a href="{{url('/universitet/'.$university->slug)}}">{{$university->name}}</a></div>
                <div class="institution-img"><a href="{{url('/universitet/'.$university->slug)}}"><img src="{{ asset('/storage/'.$university->logo) }}" alt=""></a></div>
                <div class="institution-labels">
                    <div class="i-label full">
                    <div class="rate-info">
                        <span class="ico">
                        <svg class="icon">
                            <use xlink:href="#files-colorful"></use>
                        </svg>
                        </span>
                        {{$university->reviews_count}}
                    </div>
                    </div>
                    <div class="i-label">
                    <div class="rate-info">
                        <span class="ico">
                        <svg class="icon">
                            <use xlink:href="#medal01-ico"></use>
                        </svg>
                        </span>
                        {{$university->russian_rate}}
                    </div>
                    </div>
                    <div class="i-label">
                    <div class="rate-info">
                        <span class="ico">
                        <svg class="icon">
                            <use xlink:href="#medal-ico"></use>
                        </svg>
                        </span>
                        {{$university->worlds_rate}}
                    </div>
                    </div>
                </div>
                @if ($university->accreditation)
                <div class="accreditation"><div class="inner">Гос Аккредитация: Есть</div></div>
                @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- / institutions --> 