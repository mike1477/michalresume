(function($){

  function setGoodAt(){
    if($(window).width() <= 783){
      $(".box").addClass('small');
    }
    if($(window).width() >= 768){
      $(".header-nav").css('display', 'inline-block');
    }
    if($(window).width() >= 783){
      $(".box").removeClass('small');
    }
  }

  function toggleMenuButton(){
    if($(".header-nav").css('display') == "none"){
      $(".header-nav").css('display', 'inline-block');
      $("#cellbutton").html("<i class='fas fa-chevron-up'></i>");
    }else{
      $(".header-nav").css('display', 'none');
      $("#cellbutton").html("<i class='fas fa-chevron-down'></i>");
    }
  }

 $(window).scroll(function(){
   setGoodAt();
 });

 $(".cellToggleButton").click(function(){
    toggleMenuButton();
});
$(".menu-item").click(function(){
  if($(window).width() <= 768){
    $(".header-nav").css('display', 'none');
  }
});

 setGoodAt();

}(jQuery));
