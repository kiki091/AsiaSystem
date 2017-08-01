jQuery("document").ready(function($){
  
  var nav = $('#nav_bar');
  var pageintro = $('#main-top');
  
  $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
          pageintro.addClass("bg-grad");
      } else {
          pageintro.removeClass("bg-grad");
      }
  });

  $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
          nav.addClass("navigation-fixed");
      } else {
          nav.removeClass("navigation-fixed");
      }
  });
 
});