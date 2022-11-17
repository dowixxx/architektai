//HOME HERO SLICK SLIDER
jQuery(document).ready(function($) {
   let $slideshow = $('#home .slider').slick({
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
    
    $('#home .slider').click(function(e) {
         var pWidth = $(this).innerWidth();
         var pOffset = $(this).offset(); 
         var x = e.pageX - pOffset.left;
   
        if(pWidth/2 < x) {
          $slideshow.slick('slickNext');
        } else if(pWidth/2 > x) {
          $slideshow.slick('slickPrev');
        }
    });
    
      $('#home .slider').click(function(e) {
         var pWidth = $(this).innerWidth();
         var pOffset = $(this).offset(); 
         var x = e.pageX - pOffset.left;
   
        if(pWidth/2 < x) {
          $slideshow.slick('slickNext');
        } else if(pWidth/2 > x) {
          $slideshow.slick('slickPrev');
        }
    });
    
    $('#home .slider').on('mousemove', function(e){
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



// EXPAND FILTER MENU
function showFilterMenu() {

  // FILTER 1 APPEAR
  window.setTimeout(function() {
    let filter1 = document.getElementById("projects--menu-item1");

    filter1.classList.toggle('projects--menu-item---loaded');
  }, 200);

  // FILTER 2 APPEAR
  window.setTimeout(function() {
    let filter2 = document.getElementById("projects--menu-item2");

    filter2.classList.toggle("projects--menu-item---loaded");
  }, 400);

  // FILTER 3 APPEAR
  window.setTimeout(function() {
    let filter3 = document.getElementById("projects--menu-item3");

    filter3.classList.toggle("projects--menu-item---loaded");
  }, 600);

  // FILTER 4 APPEAR
  window.setTimeout(function() {
    let filter4 = document.getElementById("projects--menu-item4");

    filter4.classList.toggle("projects--menu-item---loaded");
  }, 800);

  // FILTER 5 APPEAR
  window.setTimeout(function() {
    let filter5 = document.getElementById("projects--menu-item5");

    filter5.classList.toggle("projects--menu-item---loaded");
  }, 1000);

}

//MEMBERIAMS EXPANDINT REIKETU LOOPO!!! (KITIEMS IRGI FOR QUALITY AR JEI PRIDETU NAUJA ITEMA I TA LISTA)