<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <div class="meta"><?php edit_post_link(__('Edit page','realestate-advanced')); ?></div>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
