<?php get_header(); ?>

<h1><?php single_post_title('', true) ?: _e('Latest posts', 'realestate-advanced'); ?></h1>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content', get_post_format()); ?>
  <?php endwhile; ?>

  <?php rea_pagination(); ?>
<?php else : ?>
  <p><?php _e('No posts found.', 'realestate-advanced'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
