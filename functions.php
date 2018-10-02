<?php
// Add menu in header
function menu() {
	$locations = array(
		'header-menu' => __( 'Header menu', 'ocean-cream' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'menu' );
// Add sidebar support
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
register_sidebar( array(
    'name'          => __( 'Widget Area', 'ocean-cream' ),
    'id'            => 'sidebar',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'ocean-cream' ),
  ) );
}
// auto update plugins and themes
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
set_post_thumbnail_size( 600, 600, true );
// HTML5 and RSS
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
// Title tag and translations
load_theme_textdomain('ocean-cream', get_template_directory() . '/languages');
 add_theme_support( 'title-tag' );
//add more link to excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'coffee-cream') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>
