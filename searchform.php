<?php
/**
 * Custom search form
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _e( 'Search for:', 'realestate-advanced' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'realestate-advanced' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><?php _e( 'Search', 'realestate-advanced' ); ?></button>
</form>
