<?php
/*
Template Name: Blog
Description: Displays latest blog posts (assign this template to a Page).
*/
get_header();

$paged = ( get_query_var('paged') ) ? absint( get_query_var('paged') ) : 1;
$args = array(
  'post_type' => 'post',
  'paged'     => $paged,
);
$query = new WP_Query( $args );

?>
<main class="site-main container">
  <header class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header>

  <?php if ( $query->have_posts() ) : ?>
    <div class="grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <a class="card-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
          <?php endif; ?>
          <div class="card-body">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="meta"><?php the_time( get_option('date_format') ); ?> • <?php the_author_posts_link(); ?></div>
            <div class="entry-excerpt"><?php the_excerpt(); ?></div>
            <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more', 'realestate-advanced'); ?></a>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <?php if ( function_exists('rea_pagination') ) { rea_pagination(); } else { ?>
      <nav class="pagination">
        <?php echo get_next_posts_link( '&larr; Older posts', $query->max_num_pages ); ?>
        <?php echo get_previous_posts_link( 'Newer posts &rarr;' ); ?>
      </nav>
    <?php } ?>

  <?php else : ?>
    <p><?php _e('No posts found.', 'realestate-advanced'); ?></p>
  <?php endif; ?>

  <?php wp_reset_postdata(); ?>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
