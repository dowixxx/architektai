//PROJECT FULL WIDTH SLICK SLIDER
jQuery(document).ready(function($) {
    let $slideshow = $('#project .slider').slick({
       infinite: true,
       mobileFirst: true,
       vertical: false,
       fade: true,
       autoplay: false,
       autoplaySpeed: 5000,
       speed: 1000,
       dots: true,
       dotsClass: 'slider-paging-number',
       arrows: true,
       nextArrow: $('#next'),
       prevArrow: $('#prev'),
       pauseOnHover: true,
       slidesPerRow: 1,
       slidesToShow: 1,
       slidesToScroll: 1,
       adaptiveHeight: false,
       customPaging: function (slick,index) { 
         return (index + 1) + ' ' + '/' + ' ' + slick.slideCount; 
         }
         })
         .on('afterChange', function (event, slick, currentSlide) {
             $(this).find('*[role="tablist"]').find('li').eq(0).text(slick.options.customPaging.call(this,  slick, currentSlide));
 
     });
     
     $('#project .slider').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow.slick('slickPrev');
         }
     });
     
       $('#project .slider').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow.slick('slickPrev');
         }
     });
     
     $('#project .slider').on('mousemove', function(e){
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $('.slick-slide').css('cursor','url(./content/slider-arrow--right.svg), auto');
         } else if(pWidth/2 > x) {
           $('.slick-slide').css('cursor','url(./content/slider-arrow--left.svg), auto');
         }
     });
      
});



//PROJECT SECOND SLIDER
jQuery(document).ready(function($) {
    let $slideshow2 = $('.slider--solo-project--second').slick({
       infinite: true,
       mobileFirst: true,
       vertical: false,
       fade: true,
       autoplay: false,
       autoplaySpeed: 5000,
       speed: 1000,
       dots: true,
       dotsClass: 'slider-paging-number',
       arrows: true,
       nextArrow: $('#next2'),
       prevArrow: $('#prev2'),
       pauseOnHover: true,
       slidesPerRow: 1,
       slidesToShow: 1,
       slidesToScroll: 1,
       adaptiveHeight: false,
       customPaging: function (slick,index) { 
         return (index + 1) + ' ' + '/' + ' ' + slick.slideCount; 
         }
         })
         .on('afterChange', function (event, slick, currentSlide) {
             $(this).find('*[role="tablist"]').find('li').eq(0).text(slick.options.customPaging.call(this,  slick, currentSlide));
 
     });
     
     $('.slider--solo-project--second').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow2.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow2.slick('slickPrev');
         }
     });
     
       $('.slider--solo-project--second').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow2.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow2.slick('slickPrev');
         }
     });
     
     $('.slider--solo-project--second').on('mousemove', function(e){
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $('.slick-slide--second').css('cursor','url(./content/slider-arrow--right.svg), auto');
         } else if(pWidth/2 > x) {
           $('.slick-slide--second').css('cursor','url(./content/slider-arrow--left.svg), auto');
         }
     });
      
});



//PROJECT THIRD SLIDER
jQuery(document).ready(function($) {
    let $slideshow3 = $('.slider--solo-project--third').slick({
       infinite: true,
       mobileFirst: true,
       vertical: false,
       fade: true,
       autoplay: false,
       autoplaySpeed: 5000,
       speed: 1000,
       dots: true,
       dotsClass: 'slider-paging-number',
       arrows: true,
       nextArrow: $('#next3'),
       prevArrow: $('#prev3'),
       pauseOnHover: true,
       slidesPerRow: 1,
       slidesToShow: 1,
       slidesToScroll: 1,
       adaptiveHeight: false,
       customPaging: function (slick,index) { 
         return (index + 1) + ' ' + '/' + ' ' + slick.slideCount; 
         }
         })
         .on('afterChange', function (event, slick, currentSlide) {
             $(this).find('*[role="tablist"]').find('li').eq(0).text(slick.options.customPaging.call(this,  slick, currentSlide));
 
     });
     
     $('.slider--solo-project--third').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow3.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow3.slick('slickPrev');
         }
     });
     
       $('.slider--solo-project--third').click(function(e) {
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $slideshow3.slick('slickNext');
         } else if(pWidth/2 > x) {
           $slideshow3.slick('slickPrev');
         }
     });
     
     $('.slider--solo-project--third').on('mousemove', function(e){
          var pWidth = $(this).innerWidth();
          var pOffset = $(this).offset(); 
          var x = e.pageX - pOffset.left;
    
         if(pWidth/2 < x) {
           $('.slick-slide--third').css('cursor','url(./content/slider-arrow--right.svg), auto');
         } else if(pWidth/2 > x) {
           $('.slick-slide--third').css('cursor','url(./content/slider-arrow--left.svg), auto');
         }
     });
      
});