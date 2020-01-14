//Script for Testimonial
$(document).ready(function () {
        $('.client-single').on('click', function (event) {
           event.preventDefault();
           var active = $(this).hasClass('active');
           var parent = $(this).parents('.testi-wrap');
           if (!active) {
               var activeBlock = parent.find('.client-single.active');
               var currentPos = $(this).attr('data-position');
               var newPos = activeBlock.attr('data-position');
               activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
               activeBlock.attr('data-position', currentPos);
               $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
               $(this).attr('data-position', newPos);
           }
       });
  }(jQuery));

  //Script for testimonial end here


// Script for Gallery
$(function(){

    var swiper = new Swiper('.carousel-gallery .swiper-container', {
      effect: 'slide',
      speed: 900,
      slidesPerView: 5,
      spaceBetween: 20,
      simulateTouch: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false
      },
      pagination: {
        el: '.carousel-gallery .swiper-pagination',
        clickable: true
      },
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 5
        },
        // when window width is <= 480px
        425: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is <= 640px
        768: {
          slidesPerView: 3,
          spaceBetween: 20
        }
      }
    }); /*http://idangero.us/swiper/api/*/

});
