<?php
/**
 * Single template for Property CPT
 */
get_header(); the_post();
?>
<main class="container">
  <?php get_template_part( 'template-parts/content', 'article' ); ?>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
