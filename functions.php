<?php
// Enqueue CSS and JS
function rea_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('rea-style', get_stylesheet_uri(), [], $theme_version);
    $main_css = get_template_directory() . '/assets/css/style.css';
    wp_enqueue_style('rea-main', get_template_directory_uri() . '/assets/css/style.css', [], file_exists($main_css) ? filemtime($main_css) : $theme_version);
    $main_js = get_template_directory() . '/assets/js/main.js';
    wp_enqueue_script('rea-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], file_exists($main_js) ? filemtime($main_js) : $theme_version, true);
}
add_action('wp_enqueue_scripts', 'rea_enqueue_assets');

// Theme support
function rea_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', ['height' => 60, 'width' => 180, 'flex-height' => true, 'flex-width' => true]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('post-formats', ['image', 'gallery', 'video', 'quote']);
    add_theme_support('responsive-embeds');
    add_theme_support('customize-selective-refresh-widgets');
    register_nav_menus([
        'primary' => __('Primary Menu', 'realestate-advanced'),
        'footer'  => __('Footer Menu', 'realestate-advanced'),
    ]);
}
add_action('after_setup_theme', 'rea_theme_setup');

// Add custom body classes
function rea_body_classes($classes) {
    if (!is_active_sidebar('main-sidebar')) {
        $classes[] = 'no-sidebar';
    }
    if (is_singular('property')) {
        $classes[] = 'single-property';
    }
    return $classes;
}
add_filter('body_class', 'rea_body_classes');

// Sidebar and Widgets
function rea_register_sidebars() {
    register_sidebar([
        'name' => __('Main Sidebar', 'realestate-advanced'),
        'id' => 'main-sidebar',
        'description' => __('Widgets in the blog and pages.', 'realestate-advanced'),
        'before_widget' => '<section class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'rea_register_sidebars');

// Custom Post Type: Property
function rea_register_property_cpt() {
    $labels = [
        'name' => __('Properties', 'realestate-advanced'),
        'singular_name' => __('Property', 'realestate-advanced'),
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'properties'],
        'show_in_rest' => true,
    ];
    register_post_type('property', $args);
}
add_action('init', 'rea_register_property_cpt');

// Custom Taxonomies
function rea_register_property_taxonomies() {
    register_taxonomy('property_type', 'property', [
        'label' => __('Property Types', 'realestate-advanced'),
        'public' => true,
        'hierarchical' => true,
        'rewrite' => ['slug' => 'property-type'],
        'show_in_rest' => true,
    ]);

    register_taxonomy('location', 'property', [
        'label' => __('Locations', 'realestate-advanced'),
        'public' => true,
        'hierarchical' => true,
        'rewrite' => ['slug' => 'location'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'rea_register_property_taxonomies');

// Utility: Pagination
function rea_pagination() {
    the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('« Prev', 'realestate-advanced'),
        'next_text' => __('Next »', 'realestate-advanced'),
    ]);
}
