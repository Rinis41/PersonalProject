<?php
/*
Template Name: Contact Page
*/
get_header(); the_post(); ?>
<article <?php post_class(); ?>>
  <h1><?php the_title(); ?></h1>
  <form method="post" class="contact-form">
    <p><label><?php _e('Your Name','realestate-advanced'); ?><br><input type="text" name="rea_name" required></label></p>
    <p><label><?php _e('Email','realestate-advanced'); ?><br><input type="email" name="rea_email" required></label></p>
    <p><label><?php _e('Message','realestate-advanced'); ?><br><textarea name="rea_message" rows="6" required></textarea></label></p>
    <p><button type="submit"><?php _e('Send','realestate-advanced'); ?></button></p>
  </form>
  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
    <div class="notice"><?php _e('Thanks! Your message has been received (demo form).','realestate-advanced'); ?></div>
  <?php endif; ?>
</article>
<?php get_footer(); ?>
