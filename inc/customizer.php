<?php
function ocean_cream_customize_register($wp_customize)
{
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_setting('accent_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'accent_background',
        array(
        'label'      => esc_html__('Accent background', 'ocean-cream'),
        'description' => esc_html__('Change background color of buttons', 'ocean-cream'),
        'settings'   => 'accent_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('accent_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'accent_text',
        array(
        'label'      => esc_html__('Accent text', 'ocean-cream'),
        'description' => esc_html__('Change text color of buttons', 'ocean-cream'),
        'settings'   => 'accent_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('accent_hover', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'accent_hover',
        array(
        'label'      => esc_html__('Accent hover', 'ocean-cream'),
        'description' => esc_html__('Change background color of buttons, when mouse hover', 'ocean-cream'),
        'settings'   => 'accent_hover',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('navigation_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'navigation_background',
        array(
        'label'      => esc_html__('Pagination background', 'ocean-cream'),
        'description' => esc_html__('Change background color of navigation', 'ocean-cream'),
        'settings'   => 'navigation_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('article_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'article_background',
        array(
        'label'      => esc_html__('Post background', 'ocean-cream'),
        'description' => esc_html__('Change background color of posts (article)', 'ocean-cream'),
        'settings'   => 'article_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('article_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
         'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'article_text',
        array(
        'label'      => esc_html__('Post text', 'ocean-cream'),
        'description' => esc_html__('Change text color of posts (article)', 'ocean-cream'),
        'settings'   => 'article_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('article_link', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
         'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'article_link',
        array(
        'label'      => esc_html__('Post link', 'ocean-cream'),
        'description' => esc_html__('Change link color of posts (article)', 'ocean-cream'),
        'settings'   => 'article_link',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('menu_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'menu_background',
        array(
        'label'      => esc_html__('Menu background', 'ocean-cream'),
        'description' => esc_html__('Change background color of menu', 'ocean-cream'),
        'settings'   => 'menu_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('menu_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'menu_text',
        array(
        'label'      => esc_html__('Menu text', 'ocean-cream'),
        'description' => esc_html__('Change text color of menu', 'ocean-cream'),
        'settings'   => 'menu_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('menu_item_hover', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'menu_item_hover',
        array(
        'label'      => esc_html__('Menu item hover', 'ocean-cream'),
        'description' => esc_html__('Change background color of menu, when hover.', 'ocean-cream'),
        'settings'   => 'menu_item_hover',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('sidebar_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'sidebar_text',
        array(
        'label'      => esc_html__('Sidebar text', 'ocean-cream'),
        'description' => esc_html__('Change text color of sidebar and "Hamburger" icon color.', 'ocean-cream'),
        'settings'   => 'sidebar_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('sidebar_text_link', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'sidebar_text_link',
        array(
        'label'      => esc_html__('Sidebar text links', 'ocean-cream'),
        'description' => esc_html__('Change color of sidebar links.', 'ocean-cream'),
        'settings'   => 'sidebar_text_link',
        'section' => 'colors',
    )
));
}
add_action('customize_register', 'ocean_cream_customize_register');
include 'customizer_output.php';
