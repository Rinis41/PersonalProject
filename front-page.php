<?php get_header(); ?>
<section class="hero">
  <div>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <?php get_search_form(); ?>
  </div>
  <div>
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero.jpg'); ?>" alt="">
  </div>
</section>

<h2><?php _e('Latest properties', 'realestate-advanced'); ?></h2>
<?php
$latest = new WP_Query([
  'post_type' => 'property',
  'posts_per_page' => 9,
]);
if ($latest->have_posts()) : ?>
  <div class="grid">
    <?php while ($latest->have_posts()) : $latest->the_post(); ?>
      <?php get_template_part('template-parts/content', 'property-card'); ?>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php else : ?>
  <p><?php _e('No properties yet.', 'realestate-advanced'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
