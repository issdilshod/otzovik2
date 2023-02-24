$(document).ready(function(){   

  jcf.replaceAll();

	
  $('.search-ico').click(function (e) {
    e.preventDefault(e);
    $(this).parents('.header').find('.search').addClass('search-open');
  });
  $('.search .close').click(function (e) {
    e.preventDefault(e);
    $(this).parents('.search').removeClass('search-open');
  });

  $('.nav-ico').click(function (e) {
    e.preventDefault(e);
    $('body').toggleClass('js-open');
  });
  $('.backdrop').click(function (e) {
    e.preventDefault(e);
    $('body').removeClass('js-open');
  });

  var swiper = new Swiper(".home-slider", {
    slidesPerView: 1,
    spaceBetween: 24,
    pagination: {
      el: ".home-slider-pagination",
      clickable: true,
    },   
  });

  var swiper = new Swiper(".paltforms-slider", {
    slidesPerView: 1,
    spaceBetween: 15,
    paginationClickable: true,
    loop: true,
    navigation: {
      nextEl: ".platforms-next",
      prevEl: ".platforms-prev",
    },
    breakpoints: {      
      768: {
        slidesPerView: 2,   
        spaceBetween: 30,     
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,        
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30,        
      },
    },
  });

  var swiper = new Swiper(".paltforms-slider-01", {
    slidesPerView: 1,
    spaceBetween: 15,
    paginationClickable: true,
    loop: true,
    navigation: {
      nextEl: ".platforms-01-next",
      prevEl: ".platforms-01-prev",
    },
    breakpoints: {      
      768: {
        slidesPerView: 2,   
        spaceBetween: 30,     
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 30,        
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30,        
      },
    },
  });

  var swiper = new Swiper(".articles-slider", {
    slidesPerView: 1,
    spaceBetween: 30,    
    paginationClickable: true,
    loop: true,
    navigation: {
      nextEl: ".articles-next",
      prevEl: ".articles-prev",
    },
    breakpoints: {      
      768: {
        slidesPerView: 2,        
      },
      1024: {
        slidesPerView: 3,        
      },
    },
  });

  var swiper = new Swiper(".viewed-slider", {
    slidesPerView: 1,
    spaceBetween: 15,    
    paginationClickable: true,
    centeredSlides: true,
    // loop: true,
    navigation: {
      nextEl: ".viewed-next",
      prevEl: ".viewed-prev",
    },
    pagination: {
      el: ".viewed-pagination",
      type: "fraction",
    },
    breakpoints: {      
      768: {        
        spaceBetween: 30,     
      },      
    },
  });

  var swiper = new Swiper(".viewed-slider-01", {
    slidesPerView: 1,
    spaceBetween: 15,    
    paginationClickable: true,
    centeredSlides: true,
    // loop: true,
    navigation: {
      nextEl: ".viewed-next-01",
      prevEl: ".viewed-prev-01",
    },
    pagination: {
      el: ".viewed-pagination-01",
      type: "fraction",
    },
    breakpoints: {      
      768: {        
        spaceBetween: 30,     
      },      
    },
  });

  $("#rateit").bind('rated', function (event, value) { 
    $('#value').text(value); 
  });
});

