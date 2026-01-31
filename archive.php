<?php get_header(); ?>

<header class="archive-header">
  <h1><?php the_archive_title(); ?></h1>
  <?php the_archive_description('<div class="meta">','</div>'); ?>
</header>

<?php if ( is_post_type_archive( 'property' ) ) :
  $terms = get_terms( [ 'taxonomy' => 'property_type', 'hide_empty' => true ] );
  if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) : ?>
    <nav class="property-filters">
      <strong><?php _e( 'Filter by type:', 'realestate-advanced' ); ?></strong>
      <?php foreach ( $terms as $term ) : ?>
        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="filter-link"><?php echo esc_html( $term->name ); ?></a>
      <?php endforeach; ?>
    </nav>
  <?php endif; endif; ?>

<?php if (have_posts()) : ?>
  <div class="grid posts-grid">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('template-parts/content', get_post_format()); ?>
    <?php endwhile; ?>
  </div>
  <?php rea_pagination(); ?>
<?php else : ?>
  <p><?php _e('Nothing here yet.', 'realestate-advanced'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
