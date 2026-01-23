<?php get_header(); the_post(); ?>

<article <?php post_class(); ?>>
  <h1><?php the_title(); ?></h1>
  <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
  <div class="meta">
    <?php echo get_the_term_list(get_the_ID(), 'property_type', 'Type: ', ', '); ?> •
    <?php echo get_the_term_list(get_the_ID(), 'location', 'Location: ', ', '); ?>
  </div>

  <ul class="badges">
    <?php
      $price = get_post_meta(get_the_ID(), 'price', true);
      $beds  = get_post_meta(get_the_ID(), 'beds', true);
      $baths = get_post_meta(get_the_ID(), 'baths', true);
      $area  = get_post_meta(get_the_ID(), 'area', true);
      $addr  = get_post_meta(get_the_ID(), 'address', true);
    ?>
    <?php if ($addr): ?><li class="badge"><?php echo esc_html($addr); ?></li><?php endif; ?>
    <?php if ($price): ?><li class="badge"><?php echo esc_html($price); ?></li><?php endif; ?>
    <?php if ($beds): ?><li class="badge"><?php echo esc_html($beds); ?> beds</li><?php endif; ?>
    <?php if ($baths): ?><li class="badge"><?php echo esc_html($baths); ?> baths</li><?php endif; ?>
    <?php if ($area): ?><li class="badge"><?php echo esc_html($area); ?> m²</li><?php endif; ?>
  </ul>

  <div class="content"><?php the_content(); ?></div>
  <div class="badges"><?php the_tags('<span class="badge">', '</span><span class="badge">', '</span>'); ?></div>
  <div class="meta"><?php edit_post_link(__('Edit property', 'realestate-advanced')); ?></div>
</article>

<?php get_footer(); ?>
