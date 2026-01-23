<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
  <?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('large'); ?>
  <?php endif; ?>
  <div class="card-body">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta"><?php the_time(get_option('date_format')); ?> • <?php the_author(); ?></div>
    <div><?php the_excerpt(); ?></div>
    <div class="badges">
      <?php the_tags('<span class="badge">', '</span><span class="badge">', '</span>'); ?>
    </div>
    <div class="meta">
      <?php edit_post_link(__('Edit', 'realestate-advanced'), '<span class="edit-link">', '</span>'); ?>
    </div>
  </div>
</article>
