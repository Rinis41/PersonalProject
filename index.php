<?php get_header(); ?>

<h1><?php echo ( is_home() ? __( 'Latest posts', 'realestate-advanced' ) : single_post_title( '', false ) ); ?></h1>

<?php if ( have_posts() ) : ?>
  <div class="grid">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
  <?php endwhile; ?>
  </div>

  <?php rea_pagination(); ?>
<?php else : ?>
  <p><?php _e( 'No posts found.', 'realestate-advanced' ); ?></p>
<?php endif; ?>

<!-- Example WP_Query: latest properties -->
<?php
  $props = new WP_Query([ 'post_type' => 'property', 'posts_per_page' => 3 ]);
  if ( $props->have_posts() ) : ?>
    <section class="latest-properties">
      <h2><?php _e('Latest properties', 'realestate-advanced'); ?></h2>
      <div class="grid">
        <?php while ( $props->have_posts() ) : $props->the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'article' ); ?>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </section>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
