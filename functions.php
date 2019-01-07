<?php
// Add menu in header
function ocean_cream_menu() {
    $locations = array(
        'header-menu' => __('Header menu', 'ocean-cream') ,
    );
    register_nav_menus($locations);
}
add_action('init', 'ocean_cream_menu');
// Add sidebar support
add_action('widgets_init', 'ocean_cream_widgets');
function ocean_cream_widgets() {
    register_sidebar(array(
        'name' => __('Widget Area', 'ocean-cream') ,
        'id' => 'sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'ocean-cream') ,
    ));
}
// Register Theme Features
function ocean_cream_features() {

    // Add theme support for Custom Background
    $background_args = array(
        'default-color' => '442d21', //Morocco Brown
        
    );
    add_editor_style('/css/editor-style.css');
    add_theme_support('custom-background', $background_args);
    set_post_thumbnail_size(600, 600, true);
    // HTML5 and RSS
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ));
    // Title tag and translations
    load_theme_textdomain('ocean-cream', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' ); 
}
add_action('after_setup_theme', 'ocean_cream_features');
if (!isset($content_width)) $content_width = 596;
//add more link to excerpt
function ocean_cream_excerpt($more) {
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'ocean-cream') . '</a>';
}
add_filter('excerpt_more', 'ocean_cream_excerpt');

// I have 2 styles → critical css and main css. I load critical (inline) in header and main in footer. This way I repair "blocking rendering css" in Google.
// https://developers.google.com/web/tools/lighthouse/audits/unused-css
// Load in header
// https://wordpress.stackexchange.com/questions/168867/using-wp-add-inline-style-without-a-stylesheet
add_action('wp_head', 'ocean_cream_header', 1);

function ocean_cream_header() {
    wp_enqueue_style('criticalcss', get_template_directory_uri() . '/css/critical.min.css', array() , '20190103', 'screen');
    }
// Load in footer
// https://wordpress.stackexchange.com/questions/186065/how-to-load-css-in-the-footer
function ocean_cream_footer_styles() {
    wp_enqueue_style('maincss', get_stylesheet_uri() , array() , '20181206', 'screen');
    wp_enqueue_script('button', get_template_directory_uri() . '/js/buttons.min.js');
    wp_enqueue_style('printcss', get_template_directory_uri() . '/css/print.css', array() , '20181206', 'print');
}
add_action('wp_footer', 'ocean_cream_footer_styles');
// https://stackoverflow.com/questions/4221870/how-to-put-my-javascript-in-the-footer
// https://developers.google.com/web/tools/lighthouse/audits/blocking-resources
function ocean_cream_footer_scripts() { ?>
<script>document.onkeydown=function(e){var t=(e=e||event).which||e.keyCode;100==t&&(location="<?php echo esc_html( get_permalink(get_adjacent_post(false,'',true))) ?>"),102==t&&(location="<?php echo esc_html( get_permalink(get_adjacent_post(false,'',false))); ?>")};</script>
<?php
									  }
add_action( 'wp_footer', 'ocean_cream_footer_scripts' );
?>
