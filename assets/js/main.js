(function($){
// Set the Sections to User window height
var screenHeight = $(window).height() - 80;
$("section").css("height" , screenHeight);

//Navigation  site-title h2

$(".down").click(function() {
     $('html, body').animate({
         scrollTop: $(".about-me").offset().top
     }, 500);
});

$("#menu-item-7").click(function() {
   $('html, body').animate({
      scrollTop: $(".about-me").offset().top
    }, 500);
});

$("#menu-item-8").click(function() {
   $('html, body').animate({
       scrollTop: $(".good-at").offset().top
   }, 500);
});

$("#menu-item-9").click(function() {
  $('html, body').animate({
      scrollTop: $(".recent-works").offset().top
  }, 600);
});

$("#menu-item-10").click(function() {
  $('html, body').animate({
      scrollTop: $(".contact").offset().top
  }, 600);
});

}(jQuery));
