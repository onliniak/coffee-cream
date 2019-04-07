<?php
include 'inc/customizer.php';
include 'inc/customizer_output.php';
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

remove_action('wp_head', 'ocean_cream_header', '1');

// Load basic CSS before other styles.
add_action('wp_head', 'ocean_cream_github_header', '1');
function ocean_cream_github_header()
{
    wp_enqueue_style('criticalcss', 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/WordPress-repo/css/critical.min.css', '20181206', 'screen');
}
// Load other scripts and styles (after load site).
function ocean_cream_github_footer_styles()
{
    wp_enqueue_style('maincss', 'https://cdn.staticaly.com/gh/onliniak/ocean-cream/WordPress-repo/style.css', '20181206', 'screen');
    wp_enqueue_script('bundle', 'https://gitcdn.xyz/repo/onliniak/ocean-cream/github-flavoured/js/bundle.min.js');
    wp_enqueue_style('printcss', get_template_directory_uri() . '/css/print.css', array(), '20181206', 'print');
}
add_action('wp_footer', 'ocean_cream_github_footer_styles');

 // Run function (load custom changes) only when customizer is enable.
    if (get_theme_mod('ocean_cream_customizer_enable') == 'enable') {
        add_theme_support('custom-background');
    };

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
