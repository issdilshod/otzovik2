<div class="container">
    <div class="sending">
      <form>
        <div class="row">
          <div class="col-lg-6">
            <div class="headline">
              <div class="ico">
                <svg class="icon">
                  <use xlink:href="#send-ico"></use>
                </svg>
              </div>
              Подпишитесь на рассылку сегодня
            </div>
            <p>И будьте вкурсе всех новостей. Также вы будете получать уведомления о всех важных мероприятиях вузов и тд.</p>
          </div>
          <div class="col-lg-6 d-flex justify-content-end">
            <div class="send-inner">
              <div class="sending-group">
                <input id="footer-email" type="email" placeholder="Введите почту" class="form-control">
                <button id="footer-subscribe" class="send-btn">
                  <svg class="icon">
                    <use xlink:href="#letter-ico"></use>
                  </svg>
                </button>
              </div>
              <div class="agree">Нажимая на “Отправить” я соглашаюсь на <a href="#">обработку персональных данных</a> и <a href="#">политикой конфиденциальности</a> сайта</div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="footer-top">
      <div class="f-col">
        <a href="#" class="logo"><img src="{{ asset('assets/images/white-logo.svg') }}" alt=""></a>
        <ul class="sm-socially">
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
              <span class="ico vk">
                <svg class="icon">
                  <use xlink:href="#vk-ico"></use>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico ok">
                <svg class="icon">
                  <use xlink:href="#ok-ico"></use>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico youtube">
                <svg class="icon">
                  <use xlink:href="#youtube-ico"></use>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="ico viber">
                <svg class="icon">
                  <use xlink:href="#viber-full"></use>
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
        </ul>
      </div>
      <div class="f-col">
        <div class="f-title">Об сервисе</div>
        <div class="f-list">
          <li><a href="#">Об отзовике</a></li>
          <li><a href="#">Блог</a></li>
          <li><a href="#">Статьи</a></li>
          <li><a href="#">Авторы</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Карта сайта</a></li>
        </div>
      </div>
      <div class="f-col">
        <div class="f-title">Для учебных заведений </div>
        <div class="f-list">
          <li><a href="#">Условия сотрудничества</a></li>
          <li><a href="#">Добавить учебное заведение</a></li>
          <li><a href="#">Регистрация</a></li>
        </div>
      </div>
      <div class="f-col">
        <div class="f-title">Для абитуриентов</div>
        <div class="f-list">
          <li><a href="#">Университеты</a></li>
          <li><a href="#">Рейтинг специальностей</a></li>
          <li><a href="#">Рейтинг ВУЗов</a></li>
          <li><a href="#">Карта учебных заведений</a></li>
          <li><a href="#">Вопросы о поступлении</a></li>
        </div>
      </div>
      <div class="f-col">
        <div class="f-title">Контакты</div>
        <div class="f-list">
          <li><a href="#">Электронная почта</a></li>
          <li><a href="#">форма обратной связи</a></li>          
        </div>
      </div>
    </div>
    <div class="footer-btm">
      <div class="copy">&copy; Otzovic.ru все права защищены</div>
      <a href="#">Условия использования</a>
      <a href="#">Политика конфиденциальности</a>
    </div>
</div>

<script>

    function subscribe(emailSelector)
    {
        var page = '<?=url()->current()?>';
        var email = $(emailSelector).val();

        if (email.length>3){

            var formData = new FormData();
            formData.append('page', page);
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

    $(document).on('click', '#footer-subscribe', function (e){
        e.preventDefault();
        subscribe('#footer-email');
    })

    $(document).on('click', '#articles-subscribe', function (e){
        e.preventDefault();
        subscribe('#articles-email');
    })

</script>