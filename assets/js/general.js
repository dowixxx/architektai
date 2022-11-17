$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });



// EXPAND HEADER MENU
function showHeaderMenu() {
  let element = document.getElementById("header--menu");
  element.classList.toggle("header--menu---expanded");

  // LINK 1 APPEAR
  window.setTimeout(function() {
    let link1 = document.getElementById("header--menu-link1");

    link1.classList.toggle('header--menu-link---loaded');
  }, 200);

  // LINK 2 APPEAR
  window.setTimeout(function() {
    let link2 = document.getElementById("header--menu-link2");

    link2.classList.toggle("header--menu-link---loaded");
  }, 400);

  // LINK 3 APPEAR
  window.setTimeout(function() {
    let link3 = document.getElementById("header--menu-link3");

    link3.classList.toggle("header--menu-link---loaded");
  }, 600);

  // LINK 4 APPEAR
  window.setTimeout(function() {
    let link4 = document.getElementById("header--menu-link4");

    link4.classList.toggle("header--menu-link---loaded");
  }, 800);

  // SOCIALS APPEAR
  window.setTimeout(function() {
    let socials = document.getElementById("header--socials");

    socials.classList.toggle("header--socials---loaded");
  }, 1000);
}



// HEADER MENU PLUS BURGER ICON CHANGE
$('.header--burger-menu').click(function(){
  $('.menu-stripe--wrapper--header-animation').toggleClass('state-end');
});
// HOMEPAGE FILTER MENU EXPAND BURGER ICON CHANGE
$('.projects--menu-item').click(function(){
  $('.menu-stripe--wrapper--projects-animation').toggleClass('state-end');
});
// SOLO PROJECT FILTER MENU EXPAND BURGER ICON CHANGE
$('.solo-project--title').click(function(){
  $('.menu-stripe--wrapper--solo-project-animation').toggleClass('state-end');
});
// ABOUT PAGE TEAM FILTER MENU EXPAND BURGER ICON CHANGE
$('.about--team-title').click(function(){
  $('.menu-stripe--wrapper--team-animation').toggleClass('state-end');
});
// ABOUT PAGE PUBLICITY FILTER MENU EXPAND BURGER ICON CHANGE
$('.about--publicity-title').click(function(){
  $('.menu-stripe--wrapper--publicity-animation').toggleClass('state-end');
});


//MEMBERIAMS EXPANDINT REIKETU LOOPO!!! (KITIEMS IRGI FOR QUALITY AR JEI PRIDETU NAUJA ITEMA I TA LISTA)