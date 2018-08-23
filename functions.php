<?php
// Add menu in header
function menu() {
	$locations = array(
		'header-menu' => __( 'Header menu', 'ocean-cream' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'menu' );
add_action( 'after_setup_theme', 'wpse_theme_setup' );
function wpse_theme_setup() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}
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
add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );
 
function guest_author_name( $name ) {
global $post;
 
$author = get_post_meta( $post->ID, 'pseudonim', true );
 
if ( $author )
$name = $author;
 
return $name;
}
?>