(function($){
  // Smooth scroll for anchor links
  $('a[href^="#"]').on('click', function(e){
    e.preventDefault();
    var target = $(this.getAttribute('href'));
    if(target.length){
      $('html, body').stop().animate({
        scrollTop: target.offset().top - 80
      }, 800);
    }
  });

  // Header shadow on scroll
  $(window).on('scroll', function(){
    if($(this).scrollTop() > 10){
      $('.aura-header').css({
        'box-shadow': '0 4px 12px rgba(0, 0, 0, 0.08)'
      });
    } else {
      $('.aura-header').css({
        'box-shadow': '0 2px 8px rgba(0, 0, 0, 0.04)'
      });
    }
  });

  // CTA button clicks
  $('.aura-btn-cta, .aura-btn-primary').on('click', function(){
    console.log('CTA clicked - Ready for integration with signup flow');
  });
})(jQuery);
