$(document).ready(function() {

			



            // banner js





     // testimonial section 



     $('.owl-carousel').owlCarousel({

  loop: true,

  margin: 10,

  nav: true,

  navText: [

    "<i class='fa fa-angle-left'></i>",

    "<i class='fa fa-angle-right'></i>"

  ],

  autoplay: true,

  autoplayHoverPause: true,

  responsive: {

    0: {

      items: 1

    },

    600: {

      items: 1

    },

    1000: {

      items: 1

    }

  }

})



// Ranit gallery 



     jQuery(document).on('click','.galleryImgHolder li',function (argument) {

        jQuery(this).addClass('active').siblings().removeClass('active');

         

        jQuery('.galleryPop').addClass('open').find('img').attr('src', jQuery(this).find('img').attr('data-src') );

     }); 



     jQuery(document).on('click','.close_pop',function (argument) {

        jQuery('.galleryPop').removeClass('open');

     }); 



     // scroll for support



      jQuery(document).on('click','.btn.book_btn',function (e) {

        e.preventDefault();

        var suport = jQuery('#suport').offset().top;

        jQuery('html, body').animate({

              scrollTop: suport

        });

          

     }); 



     // scroll for buy button



       jQuery(document).on('click','.buy_btn',function (e) {

        e.preventDefault();

        var suport = jQuery('#pure_pendant').offset().top;

        jQuery('html, body').animate({

              scrollTop: suport

        });

          

     }); 


//responsive menu 

   $('.hamburger a').on('click', function(){
   
    $('nav').css({'left':'0'});
   });

   $('.nav_close').on('click', function(){
   
    $('nav').css({'left':'-100%'});
   });




});





