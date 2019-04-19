<?php
// Add menu in header
function ocean_cream_menu()
{
    $locations = array(
        'header-menu' => esc_html(__('Header menu', 'ocean-cream'))
    );
    register_nav_menus($locations);
}
add_action('init', 'ocean_cream_menu');
// Add sidebar support
add_action('widgets_init', 'ocean_cream_widgets');
function ocean_cream_widgets()
{
    register_sidebar(
        array(
        'name' => esc_html(__('Widget Area', 'ocean-cream')),
        'id' => 'sidebar',
        'description' => esc_html(__('Add widgets here to appear in your sidebar.', 'ocean-cream'))
        )
    );
}
// Register Theme Features
function ocean_cream_features()
{
    add_editor_style('/css/editor-style.css');
    set_post_thumbnail_size(600, 600, true);

    // HTML5 and RSS
    add_theme_support('automatic-feed-links');
    add_theme_support(
        'html5',
        array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
        )
    );
    // Title tag and translations
    load_theme_textdomain('ocean-cream', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ocean_cream_features');
if (!isset($content_width)) {
    $content_width = 600;
}
//add more link to excerpt
function ocean_cream_excerpt($more)
{
    return ' <a class="read-more" href="' . esc_url(get_permalink(get_the_ID())) . '">' . esc_html(__('Read More', 'ocean-cream')) . '</a>';
}
add_filter('excerpt_more', 'ocean_cream_excerpt');

// Load basic CSS before other styles.
add_action('wp_head', 'ocean_cream_header', 1);
function ocean_cream_header()
{
    wp_enqueue_style('ocean_cream_criticalcss', get_template_directory_uri() . '/css/critical.min.css', array(), '20190103', 'screen');
}
// Load other scripts and styles (after load site).
function ocean_cream_footer()
{
    wp_enqueue_style('ocean_cream_maincss', get_template_directory_uri() . '/css/style.min.css', array(), '20190417', 'screen');
    wp_enqueue_script('ocean_cream_buttons', get_template_directory_uri() . '/js/buttons.min.js');
    wp_enqueue_style('ocean_cream_printcss', get_template_directory_uri() . '/css/print.css', array(), '20181206', 'print');
}
add_action('wp_footer', 'ocean_cream_footer');
