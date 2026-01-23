<?php get_header(); ?>
<h1><?php _e('Page not found', 'realestate-advanced'); ?></h1>
<p><?php _e('Sorry, the page you are looking for does not exist. Try searching:', 'realestate-advanced'); ?></p>
<?php get_search_form(); ?>
<p><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Return to home', 'realestate-advanced'); ?></a></p>
<?php get_footer(); ?>
