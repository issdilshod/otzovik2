@extends('layouts.default')

@section('content')

<div class="breadcrumbs-wrapper">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">Главная</a></li>
            <li class="active">FAQ</li>
        </ul>
    </div>
</div>
		<div class="container">	      
			<div class="title-wrap text-left">
        <h1>Ответы на частые вопросы</h1>
        <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития. Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании существенных финансовых и административных условий.</p>
      </div>
      <!-- faq -->
      <div class="faq">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="acco-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Какие документы нужны для зачисления на курс?
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>Значимость этих проблем настолько очевидна, что консультация с широким активом говорит о возможностях распределения внутренних резервов и ресурсов. Картельные сговоры не допускают ситуации, при которой интерактивные прототипы призывают нас к новым свершениям, которые, в свою очередь, должны быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Прежде всего, курс на социально-ориентированный национальный проект обеспечивает актуальность поставленных обществом задач.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="acco-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Действителен ли сертификат за границей?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Значимость этих проблем настолько очевидна, что консультация с широким активом говорит о возможностях распределения внутренних резервов и ресурсов. Картельные сговоры не допускают ситуации, при которой интерактивные прототипы призывают нас к новым свершениям, которые, в свою очередь, должны быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Прежде всего, курс на социально-ориентированный национальный проект обеспечивает актуальность поставленных обществом задач.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="acco-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Какой средний бал для прохождения курса?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>Значимость этих проблем настолько очевидна, что консультация с широким активом говорит о возможностях распределения внутренних резервов и ресурсов. Картельные сговоры не допускают ситуации, при которой интерактивные прототипы призывают нас к новым свершениям, которые, в свою очередь, должны быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Прежде всего, курс на социально-ориентированный национальный проект обеспечивает актуальность поставленных обществом задач.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / faq -->
		</div>				

<!-- sending -->
		<div class="sending">
			<div class="container">
				<div class="sending-body">
					<form>
						<div class="sending-title">Подпишитесь на нашу рассылку</div>
						<p class="large">Получайте рассылку с набором полезных статей по 2 раза в неделю и будь в курсе всех событий</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group"><input type="text" placeholder="Ваше Имя" class="form-control"></div>
							</div>
							<div class="col-sm-6">
								<div class="form-group"><input type="email" placeholder="E-mail" class="form-control"></div>
							</div>
						</div>
						<div class="sending-bottom">
							<button class="btn" data-toggle="modal" data-target="#modal02">Подписаться</button>
							<div class="agree">Отправляя данную форму, вы соглашаетесь с <a href="#">политикой конфиденциальности</a> и <a href="#">обработку персональных данных</a></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- / sending --><!-- platforms -->
		<div class="platforms">
			<div class="container">
				<div class="title-wrap">
					<h2>Популярные образовательные платформы</h2>
				</div>								
			</div>
			<div class="paltforms-slider-01 swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo01.svg" alt=""></div>
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
									<p>Онлайн-школа, которая с 2016 года запускает одни из лучших курсов в digital</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo02.svg" alt=""></div>
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
											№ 1
										</li>
									</ul>
								</div>
								<div class="platform-card-body">
									<p>Образовательная платформа «Нетология» мы учим профессиям и навыкам будущего</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo03.svg" alt=""></div>
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
											№ 6
										</li>
									</ul>
								</div>
								<div class="platform-card-body">
									<p>Онлайн-школа, которая с 2018 года запускает одни из лучших курсов в digital индустрии</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo04.svg" alt=""></div>
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
									<p>Онлайн-школа, которая с 2016 года запускает одни из лучших курсов в digital</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo01.svg" alt=""></div>
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
									<p>Онлайн-школа, которая с 2016 года запускает одни из лучших курсов в digital</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo02.svg" alt=""></div>
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
											№ 1
										</li>
									</ul>
								</div>
								<div class="platform-card-body">
									<p>Образовательная платформа «Нетология» мы учим профессиям и навыкам будущего</p>
								</div>							
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="platform-card">
							<a href="#">
								<div class="platform-card-head">
									<div class="platform-card-logo"><img src="assets/img/p-logo03.svg" alt=""></div>
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
											№ 6
										</li>
									</ul>
								</div>
								<div class="platform-card-body">
									<p>Онлайн-школа, которая с 2018 года запускает одни из лучших курсов в digital индустрии</p>
								</div>							
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="slider-nav">
					<a href="#" class="btn">Посмотреть все</a>
					<div class="slider-btns">					
						<div class="platforms-01-prev swiper-button-prev"></div>
						<div class="platforms-01-next swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- / platforms --><!-- viewed -->
<div class="viewed">
  <div class="container">
    <div class="title-wrap">
      <h2>Самые просматриваемые отзывы</h2>
      <p>С другой стороны консультация с широким активом требуют определения и уточнения модели развития.</p>
    </div>
  </div>
  <div class="viewed-slider swiper">
    <div class="swiper-wrapper">      
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
            <div class="comment-card-photo"><img src="assets/img/photo01.jpg" alt=""></div>
          </div>
          <p>Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше своим внешним видом вызывала лишь ужас и полное непонимание.</p>
          <p>Считаю, что мне очень повезло с куратором. Он очень развёрнуто отвечал на все мои вопросы, подробно рассказывал, что я сделал не совсем правильно — даже прикладывал видео, на которых показывал, как сделать лучше!</p>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="comment-card">
          <div class="comment-card-top">
            <div class="comment-card-text">
              <div class="comment-name">
                Людмила Юрченко, г. Москва
                <span class="check">
                  <svg class="icon">
                    <use xlink:href="#check-ico"></use>
                  </svg>
                </span>
              </div>
              <div class="platform-link">Платформа: <a href="#">Skysmart</a></div>
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
            <div class="comment-card-photo"><img src="assets/img/photo02.jpg" alt=""></div>
          </div>
          <p>Я новичок в профессии, и мне важно было, чтобы курс сочетал в себе теорию и практику. Свои ощущения я назову более чем положительными, потому что курс мне понравился. Я очень много получила полезной информации, которой буду пользоваться. Сейчас я в процессе поиска работы, и карьерные консультанты Skillbox мне в этом очень помогают.</p>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="comment-card">
          <div class="comment-card-top">
            <div class="comment-card-text">
              <div class="comment-name">
                Ирина Афанасьева, г. Череповец
                <span class="check">
                  <svg class="icon">
                    <use xlink:href="#check-ico"></use>
                  </svg>
                </span>
              </div>
              <div class="platform-link">Платформа: <a href="#">Skillbox</a></div>
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
            <div class="comment-card-photo"><img src="assets/img/photo03.jpg" alt=""></div>
          </div>
          <p>Я программист. Долгое время занималась разработкой и внедрением систем, а затем руководила IT-подразделениями крупных энергетических компаний. Сейчас для меня настало время перемен, и я подумала, что нужно обновить знания. Тем более что теоретических основ по управлению проектами у меня не было.</p>
          <a href="#" class="more">Прочитать полностью</a>
        </div>
      </div>
    </div>
  </div>  
  <div class="slider-nav">
    <a href="#" class="btn bordered-btn white-btn">Читать все отзывы</a>
    <div class="slider-btns">					
      <div class="viewed-prev swiper-button-prev"></div>
      <div class="viewed-pagination swiper-pagination"></div>
      <div class="viewed-next swiper-button-next"></div>
    </div>
  </div>  
</div>
<!-- / viewed -->

<!-- text -->
<div class="text">
    <div class="container">
        <h2>Оценивайте и находите компании!</h2>
        <p>Наш сервис помогает сформировать наилучшие отношения между клиентом и компанией! Если вы клиент вы можете оставить свой честный отзыв и получить ответ от официального представительства.Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.</p>
        <a href="#" class="btn bordered-btn">Читать дальше</a>
    </div>
</div>
<!-- / text -->

@include('includes.modals.subscribe')

@include('includes.modals.location', ["cities" => $cities]);

@stop