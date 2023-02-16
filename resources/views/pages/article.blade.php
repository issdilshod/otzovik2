@extends('layouts.default')

@section('content')
<main>
  <div class="container">

    <nav class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="{{url('/')}}" class="home">
            <span class="ico">
              <svg class="icon">
                <use xlink:href="#home-ico"></use>
              </svg>
            </span>
            Главная
          </a>
        </li>
        <li><a href="{{url('posti')}}">Блог</a></li>     
        <li class="active">{{$current_article->title}}</li>
      </ol>
    </nav>

    <!-- article -->
    <div class="article">
      <h1>{{$current_article->title}}</h1>
      <figure><img src="{{ asset('storage/'.$current_article->cover) }}" alt=""></figure>
      <p>{{$current_article->text}}</p>
      <hr>  
      <div class="article-bottom">
        <div class="socially-wrap">
          <p>Поделиться в соц сетях</p>
          <ul class="content-socially">
            <li>
              <a href="#">
                <span class="ico fb">
                  <svg class="icon">
                    <use xlink:href="#fb-ico"></use>
                  </svg>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="ico twitter">
                  <svg class="icon">
                    <use xlink:href="#twitter-ico"></use>
                  </svg>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="ico telegram">
                  <svg class="icon">
                    <use xlink:href="#telegram-ico"></use>
                  </svg>
                </span>
              </a>
            </li>                    
            <li>
              <a href="#">
                <span class="ico viber">
                  <svg class="icon">
                    <use xlink:href="#viber-ico"></use>
                  </svg>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="ico vk">
                  <svg class="icon">
                    <use xlink:href="#vk-ico"></use>
                  </svg>
                </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="right">
          <div class="date">{{\App\Services\Admin\Misc\SystemService::get_dateTime_human($current_article->updated_at)}}</div>
          <div class="name">{{$current_article->user_first_name}} {{$current_article->user_last_name}}</div>
        </div>
      </div>
    </div>
    <!-- / article -->

    <!-- reviews-list -->
    <div class="reviews-list">
        <div class="headline">Комментарии</div>

        <div class="review-card">
            <div class="review-card-top">
            <div class="user">
                <div class="user-photo"><img src="{{ asset('assets/images/photo.jpg') }}" alt=""></div>
                <div class="review-user-name">Евгений Баженов</div>
            </div>
            <div class="date">30 декабря 2022</div>
            <div class="rating">
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star.svg') }}" alt=""></span>
                <span><img src="{{ asset('assets/images/star-half.svg') }}" alt=""></span>
                <span>4.5</span>
            </div>
            </div>
            <p>Поступил в 21 году на специальность "лингвистика", меня порадовало то, что в данном вузе такое направление присутствовало, т.к. сложно найти это направление в других университетах ...</p>
            <div class="review-bottm-nav">
            <a href="#" class="like">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#like-ico"></use>
                </svg>
                </span>
            </a>
            <a href="#" class="dislike">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#dislike-ico"></use>
                </svg>
                </span>
            </a>
            <a href="#">Ответить</a>
            </div>
        </div>
      
    </div>
    <!-- / reviews-list -->

    <!-- form-block -->
    <div class="form-block">
        <form id="comment-add-form">
            @csrf
            <input name="article_id" type="hidden" value="{{$current_article->id}}" />
            <h2>Оставить комментарию</h2>
            <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <input name="first_name" type="text" placeholder="Имя*" class="form-control" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input name="last_name" type="text" placeholder="Фамилия" class="form-control" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <input name="email" type="text" placeholder="Почта*" class="form-control" />
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <textarea name="text" placeholder="Отзыв*" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            </div>
            <div class="form-block-btm">
            <button class="btn has-ico">
                <span class="ico">
                <svg class="icon">
                    <use xlink:href="#letter-ico"></use>
                </svg>
                </span>
                Оставить комментарию
            </button>
            <div class="rateit-wrapper">
                <div id="rateit" class="rateit"></div>
                <div id="value" class="value">0.0</div>
            </div>
            <div class="file-box">
                <input type="file" name="file" data-jcf='{"buttonText": "", "placeholderText": "Загрузить фото: jpg или png"}'>
            </div>
            </div>
        </form>
    </div>
    <!-- / form-block -->
    <script>
        // ajax send comment
        $(document).on('submit', '#comment-add-form', function(e){
            e.preventDefault();

            var validated = true;

            if ($('input[name="first_name"]').val()==''){
                $('input[name="first_name"]').css('border', '1px solid rgb(255 0 0 / 38%)');
                validated = false;
            }
            if ($('input[name="email"]').val()==''){
                $('input[name="email"]').css('border', '1px solid rgb(255 0 0 / 38%)');
                validated = false;
            }
            if ($('textarea[name="text"]').val()==''){
                $('textarea[name="text"]').css('border', '1px solid rgb(255 0 0 / 38%)');
                validated = false;
            }

            if (!validated){ return false; }

            // serialize to form data
            var formData = new FormData();
            if ($('input[name="file"]').prop('files').length>0){
                formData.append('avatar', $('input[name="file"]').prop('files')[0]);
            }

            formData.append('first_name', $('input[name="first_name"]').val());
            formData.append('last_name', $('input[name="last_name"]').val());
            formData.append('email', $('input[name="email"]').val());
            formData.append('text', $('textarea[name="text"]').val());
            formData.append('article_id', $('input[name="article_id"]').val());
            //formData.append('replay_id', )
            formData.append('_token', $('input[name="_token"]').val());
            formData.append('star', $('#value').html());

            $.ajax({
                type: 'post',
                url: '<?=url('api/comment')?>',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(res){
                    $('#modal04').modal('show');
                }
            });
        });
    </script>

    @include('components.articles.popular')

</div>

<div class="bg-box">
    <div class="container">
        @include('components.reviews.last')  
    </div>
</div>

<div class="container">
    
    @include('components.universities.popular')

    @include('components.reviews.popular')
    
</div>
</main>

@include('components.modals.location')

@include('components.modals.success-subscribe')

@include('components.modals.success-comment-post')

@include('components.svgs.welcome')

@stop