<?php get_header(); ?>
<h1><?php _e('Properties', 'realestate-advanced'); ?></h1>

<?php if (have_posts()) : ?>
  <div class="grid">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/content', 'property-card'); ?>
    <?php endwhile; ?>
  </div>
  <?php rea_pagination(); ?>
<?php else : ?>
  <p><?php _e('No properties found.', 'realestate-advanced'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
