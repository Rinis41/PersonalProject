<?php
$price = get_post_meta(get_the_ID(), 'price', true);
$beds  = get_post_meta(get_the_ID(), 'beds', true);
$baths = get_post_meta(get_the_ID(), 'baths', true);
$area  = get_post_meta(get_the_ID(), 'area', true);
$addr  = get_post_meta(get_the_ID(), 'address', true);
?>
<article id="property-<?php the_ID(); ?>" <?php post_class('card property-card'); ?>>
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } else { ?><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/placeholder.png'); ?>" alt="" /><?php } ?>
  </a>
  <div class="card-body">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if ($addr): ?><div class="meta"><?php echo esc_html($addr); ?></div><?php endif; ?>
    <div class="badges">
      <span class="badge featured-price"><?php echo $price ? esc_html($price) : __('Price on request','realestate-advanced'); ?></span>
      <?php if ($beds) : ?><span class="badge"><?php echo esc_html($beds); ?> beds</span><?php endif; ?>
      <?php if ($baths) : ?><span class="badge"><?php echo esc_html($baths); ?> baths</span><?php endif; ?>
      <?php if ($area) : ?><span class="badge"><?php echo esc_html($area); ?> m²</span><?php endif; ?>
    </div>
    <div class="meta">
      <?php echo get_the_term_list(get_the_ID(), 'property_type', 'Type: ', ', '); ?>
      <?php if (get_the_term_list(get_the_ID(), 'location')) : ?> • <?php echo get_the_term_list(get_the_ID(), 'location', '', ', '); ?><?php endif; ?>
    </div>
  </div>
</article>
