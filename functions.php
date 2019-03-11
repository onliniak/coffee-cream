<?php
include 'inc/customizer.php';
// Add menu in header
function ocean_cream_menu()
{
    $locations = array(
        'header-menu' => __('Header menu', 'ocean-cream') ,
    );
    register_nav_menus($locations);
}
add_action('init', 'ocean_cream_menu');
// Add sidebar support
add_action('widgets_init', 'ocean_cream_widgets');
function ocean_cream_widgets()
{
    register_sidebar(array(
        'name' => __('Widget Area', 'ocean-cream') ,
        'id' => 'sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'ocean-cream') ,
    ));
}
// Register Theme Features
function ocean_cream_features()
{

    // Add theme support for Custom Background
    $background_args = array(
        'default-color' => '3e2723', //brown darken-4 by Materialize

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
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ocean_cream_features');
if (!isset($content_width)) {
    $content_width = 596;
}
//add more link to excerpt
function ocean_cream_excerpt($more)
{
    return ' <a class="read-more" href="' . esc_url(get_permalink(get_the_ID())) . '">' . __('Read More', 'ocean-cream') . '</a>';
}
add_filter('excerpt_more', 'ocean_cream_excerpt');

// https://stackoverflow.com/questions/30303052/php-base-url-in-external-js-file
// https://developer.wordpress.org/reference/functions/get_adjacent_post/

function ocean_cream_js()
{
    ?>
<script type="text/javascript">
	var OCreamPPost = "<?php echo esc_url(get_permalink(get_adjacent_post(false, '', false))) ?>";
	var OCreamNTP = "<?php echo esc_url(get_permalink(get_adjacent_post(false, '', true))); ?>";
	var OCreamCPRight = "<p>   <?php esc_html_e('Created by', 'ocean-cream'); ?> <?php the_author(); ?>  <?php esc_html_e('from', 'ocean-cream'); ?> "
</script>
<?php
}
add_action('wp_footer', 'ocean_cream_js');

// Load basic CSS before other styles.
add_action('wp_head', 'ocean_cream_header', '1');
function ocean_cream_header()
{
    wp_enqueue_style('criticalcss', 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/master/css/critical.min.css', '20181206', 'screen');
}
// Load other scripts and styles (after load site).
function ocean_cream_footer_styles()
{
    wp_enqueue_style('maincss', 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/master/style.css', '20181206', 'screen');
    wp_enqueue_script('bundle', 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/master/js/bundle.min.js');
    wp_enqueue_style('printcss', get_template_directory_uri() . '/css/print.css', array(), '20181206', 'print');
}
add_action('wp_footer', 'ocean_cream_footer_styles');

// load emojis via CDN
// https://www.marsble.com/t/serving-wordpress-org-emojis-using-staticaly-cdn/94
function emoji_svg_cdn_url()
{
    return $default_url = "https://cdn.staticaly.com/gh/twitter/twemoji/v11.2.0/2/svg/";
}
add_filter('emoji_svg_url', 'emoji_svg_cdn_url');

function emoji_png_cdn_url()
{
    return $default_url = "https://cdn.staticaly.com/gh/twitter/twemoji/v11.2.0/2/72x72/";
}
add_filter('emoji_url', 'emoji_png_cdn_url');
/**
 * Do not load Merriweather Google fonts on AMP pages
 * Steal from https://isabelcastillo.com/wordpress-amp-plugin
 */
add_action('amp_post_template_head', 'isa_remove_amp_google_fonts', 2);
function isa_remove_amp_google_fonts()
{
    remove_action('amp_post_template_head', 'amp_post_template_add_fonts');
}
add_action('amp_post_template_css', 'isa_amp_css_styles_fonts');
function isa_amp_css_styles_fonts($amp_template)
{
    ?>
    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
        background-color: beige;
        margin: auto;
        }
    <?php
}
?>
