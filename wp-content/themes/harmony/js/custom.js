jQuery(document).ready(function() {
			

            // banner js


     // testimonial section 

     jQuery('.owl-carousel').owlCarousel({
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




var more = "Read More +";
var less= "Read Less -";

jQuery(document).on('click','.btn-read-more a', function(e){
  e.preventDefault();
  
//   if($('.btn-read-more a').hasClass('more') == true){
//     $(this).html(less).removeClass('more').addClass('less');
// }
//  if($('.btn-read-more a').hasClass('more') == true){
//   $(this).html(more).removeClass('less').addClass('more');
// }
if(jQuery(this).attr('class') == 'more'){
  jQuery(this).addClass('less').removeClass('more');
  jQuery(this).html(less);
  jQuery(this).parent().parent().find('.demo').slideDown('fast');
  
}else{
   jQuery(this).addClass('more').removeClass('less');
   jQuery(this).html(more);
   jQuery(this).parent().parent().find('.demo').slideUp('fast');
}


});



//responsive menu 

   jQuery('.hamburger a').on('click', function(){
   
    jQuery('nav').css({'left':'0'});
   });

   jQuery('.nav_close').on('click', function(){
   
    jQuery('nav').css({'left':'-100%'});
   });




});



//inner gallery section

      /* jQuery(document).jquerygallery({

// displays a thumbnails navigation
'coverImgOverlay' : true,

// CSS classes
'imgActive' : "imgActive",
'thumbnail' : "coverImgOverlay",
'overlay' : "overlay",

// the height of the thumbnails
'thumbnailHeight' : 120,

// custom navigation controls. 
// requires Font Awesome
'imgNext' : "<i class='fa fa-angle-right'></i>",
'imgPrev' : "<i class='fa fa-angle-left'></i>",
'imgClose' : "<i class='fa fa-times'></i>",

// animation speed
'speed' : 300

});*/


