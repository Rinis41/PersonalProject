<?php get_header(); the_post(); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-meta">
      <?php if ( function_exists( 'get_the_term_list' ) ) : ?>
        <?php echo get_the_term_list( get_the_ID(), 'property_type', __('Type: ', 'realestate-advanced'), ', ' ); ?>
        <?php echo get_the_term_list( get_the_ID(), 'location', __('Location: ', 'realestate-advanced'), ', ' ); ?>
      <?php endif; ?>
    </div>
  </header>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-thumbnail"><?php the_post_thumbnail('large'); ?></div>
  <?php endif; ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <footer class="entry-footer">
    <div class="entry-tags"><?php the_tags( '<span class="tag-list">', '</span><span class="tag-list">', '</span>' ); ?></div>
    <div class="entry-edit"><?php edit_post_link( __( 'Edit', 'realestate-advanced' ) ); ?></div>
  </footer>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
