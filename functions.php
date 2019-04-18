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
    wp_enqueue_style('criticalcss', 'https://cdn.jsdelivr.net/gh/onliniak/ocean-cream/css/critical.min.css', '20181206', 'screen');
}
// Load other scripts and styles (after load site).
function ocean_cream_github_footer_styles()
{
    wp_enqueue_style('maincss', 'https://cdn.jsdelivr.net/gh/onliniak/ocean-cream/style.min.css', '20181206', 'screen');
    wp_enqueue_script('bundle', 'https://cdn.jsdelivr.net/gh/onliniak/ocean-cream@github-flavoured/js/bundle.min.js');
    wp_enqueue_style('printcss', 'https://cdn.jsdelivr.net/gh/onliniak/ocean-cream/css/print.css', array(), '20181206', 'print');
}
add_action('wp_footer', 'ocean_cream_github_footer_styles');

 // Run function (load custom changes) only when customizer is enable.
    if (get_theme_mod('ocean_cream_customizer_enable') == 'enable') {
        add_theme_support('custom-background');
    };
?>
