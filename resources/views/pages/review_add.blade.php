@extends('layouts.default')

@section('content')

<div class="breadcrumbs-wrapper">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="{{url('/')}}">Главная</a></li>
            <li><a href="{{url('/dobavit-otzyv')}}">Оставить отзыв</a></li>
            <li class="active">Оставить отзыв о Нетология</li>
        </ul>
    </div>
</div>
		<div class="container">	
      <div class="platform-card specific-card">
        <div class="platform-card-head">
          <div class="platform-card-logo"><img src="assets/img/p-logo-big.svg" alt=""></div>
          <ul class="awards">
            <li>
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#building-ico"></use>
                </svg>
              </span>
              ООО “Нетология”
            </li>
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
            <li>
              <span class="ico">
                <svg class="icon">
                  <use xlink:href="#messages-ico"></use>
                </svg>
              </span>
              10 357
            </li>
          </ul>
        </div>
        <div class="platform-card-body add-comment-form">
          <a href="#" class="back">Вернуться назад</a>
          <form>
            <h3>Оставить отзыв</h3>
            <div class="row align-items-center">
              <div class="col-lg-6">
                <input type="file" data-jcf='{"buttonText": "", "placeholderText": "Загрузить фото: jpg или png"}'>
              </div>
              <div class="col-lg-6">
                <div class="rateit-wrapper">
                  <div id="rateit" class="rateit"></div>
                  <div id="value" class="value">0.0</div>
                </div>
              </div>
              <div class="col-lg-3"><div class="form-group"><input type="text" placeholder="Имя*" class="form-control"></div></div>
              <div class="col-lg-3"><div class="form-group"><input type="text" placeholder="Фамилия*" class="form-control"></div></div>
              <div class="col-lg-3"><div class="form-group"><input type="email" placeholder="Почта*" class="form-control"></div></div>
              <div class="col-lg-3">
                <div class="form-group">
                  <select data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false, "fakeDropInBody": false, "useCustomScroll": false}'>
                    <option value="">Город</option>
                    <option value="">Город</option>
                    <option value="">Город</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea placeholder="Написать комментарий..." cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="ch-item">
                  <input type="checkbox" name="agr" id="agr">
                  <label for="agr">Я ознакомился с <a href="#">политикой конфиденциальности</a> и даю согласование на <a href="#">обработку персональных данных</a></label>
                </div>
              </div>
              <div class="col-lg-4 text-right">
                <a href="#" class="btn">Опубликовать</a>
              </div>
            </div>
          </form>
        </div>							
      </div>
		</div>
<!-- viewed -->
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
<!-- / viewed --><!-- platforms -->
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
		<!-- / platforms -->
        
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