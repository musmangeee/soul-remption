$(document).ready(function(){
    var owl = $('.owl-carousel');

    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });
      
      $(".zoom").hover(function(){
          $(this).addClass('transition');
      }, function(){
          $(this).removeClass('transition');
      });

      owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });


 

    $('.carousel').carousel({
        interval: 8000
      })


    $('.play').click(function () {
        if($(this).parent().prev().get(0).paused){
            $(this).parent().prev().get(0).play();
            $(this).parent().prev().removeClass('blurEffect');
            $('.content').hide();
        }
    });

    $('.video').on('ended',function(){
        $(this).addClass('blurEffect');
      $('.content').show();
    });
});