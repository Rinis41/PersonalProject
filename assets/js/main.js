(function($){
  // Sticky header on scroll
  $(window).on('scroll', function(){
    if($(this).scrollTop() > 60){
      $('.site-header').addClass('is-sticky');
    } else {
      $('.site-header').removeClass('is-sticky');
    }
  });

  // Mobile menu toggle
  $('.menu-toggle').on('click', function(){
    var expanded = $(this).attr('aria-expanded') === 'true';
    $(this).attr('aria-expanded', !expanded);
    $('#primary-menu').toggleClass('open');
    $('body').toggleClass('menu-open');
  });

  // Close menu when clicking outside
  $(document).on('click', function(e){
    if(!$(e.target).closest('.primary-nav, .menu-toggle').length && $('#primary-menu').hasClass('open')){
      $('.menu-toggle').attr('aria-expanded', 'false');
      $('#primary-menu').removeClass('open');
      $('body').removeClass('menu-open');
    }
  });
})(jQuery);
