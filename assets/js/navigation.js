(function($){
  /////////////////////////////////////////////////////////////
  //Properties
  /////////////////////////////////////////////////////////////
  //Menu Class name , This should be array of all menu items
  var allMenuLinks   = ".menu-item"

  //Menu Item class/id names
  var homeLink       = ".gohome";
  var downButton     = ".down";
  var firstMenuLink  = "#menu-item-7";
  var secondMenuLink = "#menu-item-8";
  var thirdMenuLink  = "#menu-item-9";
  var fourthMenuLink = "#menu-item-10";

  //Section Class name , This should be array of all sections
  var allSections   = ".navigation"

  //Section to send user to when link is clicked
  var homeSection   = ".home";
  var firstSection  = ".about-me";
  var secondSection = ".good-at";
  var thirdSection  = ".recent-works";
  var fourthSection = ".contact";

  // Set the Sections to User window height
  //var screenHeight = $(window).height();
  var screenHeight = 700;
  $(allSections).css("height" , screenHeight);

  /////////////////////////////////////////////////////////////
  // Helper functions
  /////////////////////////////////////////////////////////////

  var defaultHeader = function(){
      if($(window).scrollTop() >= screenHeight){
        return;
      }else if($( ".nav-header" ).hasClass( "nav-header-bottom" )){
        return;
      }else{
        $(".nav-header").removeClass("nav-header-top");
        $(".nav-header").addClass("nav-header-bottom");
      }
  }
  var topHeader = function(){
      if($(window).scrollTop() <= screenHeight){
        return;
      }else if($( ".nav-header" ).hasClass( "nav-header-top" )){
        return;
      }else{
      $(".nav-header").removeClass("nav-header-bottom");
      $(".nav-header").addClass("nav-header-top");
    }
  }
  var toggleColors = function(element){
    $('.menu-item').css("color", "#fff");
    if(element){
      $(element).css("color", "#6b9898");
    }
  }

   /////////////////////////////////////////////////////////////
  // Click events, Animate to section when menu link is clicked
   /////////////////////////////////////////////////////////////

  $(homeLink).click(function() {
       $('html, body').animate({
           scrollTop: $(homeSection).offset().top
       }, 500);
  });
  $(downButton).click(function() {
       $('html, body').animate({
           scrollTop: $(firstSection).offset().top
       }, 500);
  });
  $(firstMenuLink).click(function() {
     $('html, body').animate({
        scrollTop: $(firstSection).offset().top
      }, 500);
  });
  $(secondMenuLink).click(function() {
     $('html, body').animate({
         scrollTop: $(secondSection).offset().top
     }, 500);
  });
  $(thirdMenuLink).click(function() {
    $('html, body').animate({
        scrollTop: $(thirdSection).offset().top
    }, 600);
  });
  $(fourthMenuLink).click(function() {
    $('html, body').animate({
        scrollTop: $(fourthSection).offset().top
    }, 600);
  });

   ///////////////////////////////////////////////////////////
  //Scroll Events , When user scrolls to sections do this
   //////////////////////////////////////////////////////////

  $(window).scroll(function(){
    switch (true) {
      case $(window).scrollTop() >= 300 &&  $(window).scrollTop() <= screenHeight - 100:
                 defaultHeader();
                $(allMenuLinks).css("color", "#fff");
      break;
      case $(window).scrollTop() >= screenHeight && $(window).scrollTop() <= screenHeight * 2 -300:
                 topHeader();
                 toggleColors(firstMenuLink);
      break;
      case $(window).scrollTop() >= screenHeight * 2 + 100 && $(window).scrollTop() <= screenHeight * 3 - 100:
                 toggleColors(secondMenuLink);
      break;
      case $(window).scrollTop() >= screenHeight * 3 + 100 && $(window).scrollTop() <= screenHeight * 4 - 100:
                toggleColors(thirdMenuLink);
      break;
      case $(window).scrollTop() >= screenHeight * 4:
                toggleColors(fourthMenuLink);
      }
  });
}(jQuery));
