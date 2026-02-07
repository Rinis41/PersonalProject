<?php
/**
 * Template part for displaying posts
 *
 * @package RealEstate_Advanced
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card post-card'); ?>>
	<header class="card-header">
		<?php if (has_post_thumbnail()): ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium_large'); ?>
			</a>
		<?php
endif; ?>
	</header>

	<div class="card-body">
		<?php
the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
?>
        <div class="meta" style="margin-bottom: 0.5rem;">
            <?php echo get_the_date(); ?>
        </div>
		<div class="entry-content">
			<?php
the_excerpt();
?>
		</div>
        <a href="<?php the_permalink(); ?>" class="aura-btn aura-btn-cta" style="margin-top: 1rem; padding: 0.4rem 1rem; font-size: 0.8rem;">Read More</a>
	</div>
</article>
