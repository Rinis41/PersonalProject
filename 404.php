<?php get_header(); ?>
<main class="container">
	<h1><?php _e('Page not found', 'realestate-advanced'); ?></h1>
	<p><?php _e('Sorry, the page you are looking for does not exist. Try searching:', 'realestate-advanced'); ?></p>
	<?php get_search_form(); ?>

	<section class="recent-posts">
		<h2><?php _e('Recent posts', 'realestate-advanced'); ?></h2>
		<ul>
			<?php
				$recent = wp_get_recent_posts([ 'numberposts' => 6, 'post_status' => 'publish' ]);
				foreach ( $recent as $post ) : ?>
					<li><a href="<?php echo esc_url( get_permalink( $post['ID'] ) ); ?>"><?php echo esc_html( $post['post_title'] ); ?></a></li>
			<?php endforeach; wp_reset_query(); ?>
		</ul>
	</section>

	<p><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Return to home', 'realestate-advanced'); ?></a></p>
</main>

<?php get_footer(); ?>
