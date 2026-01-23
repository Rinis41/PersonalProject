<?php get_header(); ?>
<h1><?php the_archive_title(); ?></h1>
<?php the_archive_description('<div class="meta">','</div>'); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content', get_post_format()); ?>
  <?php endwhile; ?>
  <?php rea_pagination(); ?>
<?php else : ?>
  <p><?php _e('Nothing here yet.', 'realestate-advanced'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
