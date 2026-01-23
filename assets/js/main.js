(function($){
  // Basic interactivity: sticky header on scroll
  $(window).on('scroll', function(){
    if($(this).scrollTop() > 60){
      $('.site-header').css({position:'sticky', top:0});
    } else {
      $('.site-header').css({position:'static'});
    }
  });
})(jQuery);
