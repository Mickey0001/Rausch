$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    var mymenu = true;
    if(scroll > 800) {
        $('.nav-menu').removeClass("large").addClass("small");
        $('.arrow').hide();
      } else {
        $('.nav-menu').addClass("large").removeClass("small");
        $('.arrow').show();
      }; 
  });
  
  // side Menu 
  $('.toc.item').click(function() {
    $('.ui.sidebar').sidebar('toggle');
  });
  
  $('.path-slieder').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: $('.left-angel'),
    nextArrow: $('.right-angel'),
    responsive: [
      {
        breakpoint: 900,
        settings: {
          dots: true,
          autoplay: false,
          speed: 1500, 
          dotsClass: 'bullet',
          customPaging : function(slider, i) {
            var title = $(slider.$slides[i]).data('bullet');
            return '<span class="dot"></span>';
          },
        }
      }
    ]
  });

  $('.home-text-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    prevArrow: $('.left-angel'),
    nextArrow: $('.right-angel'),
    responsive: [
      {
        breakpoint: 900,
        settings: 'unslick'
      }
    ]
  });
}); /*Jquery*/



