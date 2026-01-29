<?php get_header(); ?>

<main id="main-content">
  <h1><?php printf( __( 'Search Results for: %s', 'realestate-advanced' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
    <?php endwhile; ?>

    <?php rea_pagination(); ?>

  <?php else : ?>
    <p><?php _e( 'No results found. Try different keywords.', 'realestate-advanced' ); ?></p>
    <?php get_search_form(); ?>
  <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
