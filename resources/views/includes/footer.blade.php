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

<!-- Subscribe -->
<script>
    function subscribe(emailSelector)
    {
        var page = '<?=url()->current()?>';
        var email = $(emailSelector).val();

        if (email.length>3){

            var formData = new FormData();
            formData.append('page', page);
            // TODO: Get Name
            formData.append('email', email);

            $.ajax({
                type: 'post',
                url: '<?=url('api/subscribe')?>',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(res){
                    $('#modal02').modal('show');
                    $(emailSelector).val('');
                }
            });
        }
    }

    $(document).on('submit', '#footer-submit', function (e){
        e.preventDefault();
        subscribe('#footer-email');
    })

    $(document).on('submit', '#articles-submit', function (e){
        e.preventDefault();
        subscribe('#articles-email');
    })
</script>

<!-- text SEO show more/less -->
<script>
    $(document).on('click', '.last-info-button', function(e){
        e.preventDefault();
        if (!$(this).parent().find('.big-dots').hasClass('d-none')){ // showing more
            $(this).parent().find('.big-dots').addClass('d-none');
            $(this).parent().find('.extra-text').removeClass('d-none');
            $(this).find('.last-info-button-text').text('Скрыть');
        }else{ // showing less
            $(this).parent().find('.big-dots').removeClass('d-none');
            $(this).parent().find('.extra-text').addClass('d-none');
            $(this).find('.last-info-button-text').text('Читать дальше');
        }
    });
</script>

@if (isset($settings['mode']['mode']) && $settings['mode']['mode']==\Illuminate\Support\Facades\Config::get('app._mode.edit'))
<!-- modes -->
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- SweetAlert2 -->
<script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<input type="hidden" id="_user_id" value="{{$settings['mode']['user_id']}}" />
<input type="hidden" id="_token" value="{{$_GET['_token']}}" />
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    // disable a links for edit mode
    $(document).on('click', 'a', function(e){
        e.preventDefault();
    })

    // disable forms for edit mode
    $(document).on('submit', 'form', function(e){
        e.preventDefault();
    })

    // submit setting form(template)
    $(document).on('submit', '._setting_form', function (e){

        var user_id = $('#_user_id').val();
        var key = $('#_key').val();
        var value = $('#_value').val();
        var page = $('#_page').val();
        var token = $('#_token').val();

        $.ajax({
            type: 'put',
            url: '<?=url('api/setting')?>/'+key,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer '+ token);
            },
            data: {
                user_id: user_id,
                value: value,
                page: page
            },
            success: function(res){
                $('#_modal1').modal('hide');

                $('._change_able[data-key='+key+']').attr('data-value', value);
                $('._change_able[data-key='+key+']').html(value);

                $('#_key').val('');
                $('#_value').val('');
                $('#_page').val('');

                Toast.fire({
                    icon: 'success',
                    title: "{{__('global_success')}}"
                })

            },
            error: function(httpObj, textStatus) {       
                if(httpObj.status==200){
                    // Success
                }else if (httpObj.status==401){
                    Toast.fire({
                        icon: 'error',
                        title: "{{__('global_error')}}"
                    })
                }
            }
        });

    });

    // click elements to update
    $(document).on('click', '._change_able', function(e){
        var key = $(this).attr('data-key');
        var page = $(this).attr('data-page');
        var value = '';

        // if link then get from attr
        if ($(this).attr('data-link')=='1'){
            value = $(this).attr('href');
        }else{
            value = $(this).text().trim();
        }

        $('#_key').val(key);
        $('#_value').val(value);
        $('#_page').val(page);

        $('#_modal1').modal('show');
    })

    // click ui submit
    function submit(){
        $('#_submit').click();
    }
</script>

<div class="modal fade" id="_modal1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{__('global_edit')}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <form class="_setting_form">
                <input type="hidden" id="_key" />
                <input type="hidden" id="_page" />
                <div class="form-group">
                    <label for="_value">{{__('global_value')}}</label>
                    <textarea id="_value" class="form-control" style="height: 200px"></textarea> 
                </div>
                <input type="submit" id="_submit" class="d-none" />
            </form>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{__('global_close_button')}}</button>
            <button type="button" class="btn btn-primary" onclick="submit()">{{__('global_save_button')}}</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.modes -->
@endif