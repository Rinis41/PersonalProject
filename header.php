<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <div class="logo">
      <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php } ?>
      <p class="meta"><?php bloginfo('description'); ?></p>
    </div>
    <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">
      <span class="menu-icon">☰</span>
      <span class="screen-reader-text"><?php _e('Menu', 'realestate-advanced'); ?></span>
    </button>
    <nav id="primary-menu" class="primary-nav" role="navigation">
      <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu']); ?>
    </nav>
    <div class="header-search">
      <?php get_search_form(); ?>
    </div>
  </div>
</header>
<main class="container">
