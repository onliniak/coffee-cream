<?php
function ocean_cream_customize_register($wp_customize)
{
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_setting('ocean_cream_accent_background', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_accent_background',
        array(
        'label'      => esc_html__('Accent background', 'ocean-cream'),
        'description' => esc_html__('Change background color of buttons', 'ocean-cream'),
        'settings'   => 'ocean_cream_accent_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_accent_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_accent_text',
        array(
        'label'      => esc_html__('Accent text', 'ocean-cream'),
        'description' => esc_html__('Change text color of buttons', 'ocean-cream'),
        'settings'   => 'ocean_cream_accent_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_accent_hover', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_accent_hover',
        array(
        'label'      => esc_html__('Accent hover', 'ocean-cream'),
        'description' => esc_html__('Change background color of buttons, when mouse hover', 'ocean-cream'),
        'settings'   => 'ocean_cream_accent_hover',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_navigation_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_navigation_background',
        array(
        'label'      => esc_html__('Pagination background', 'ocean-cream'),
        'description' => esc_html__('Change background color of navigation', 'ocean-cream'),
        'settings'   => 'ocean_cream_navigation_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_article_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_article_background',
        array(
        'label'      => esc_html__('Post background', 'ocean-cream'),
        'description' => esc_html__('Change background color of posts (article)', 'ocean-cream'),
        'settings'   => 'ocean_cream_article_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_article_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
         'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_article_text',
        array(
        'label'      => esc_html__('Post text', 'ocean-cream'),
        'description' => esc_html__('Change text color of posts (article)', 'ocean-cream'),
        'settings'   => 'ocean_cream_article_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_article_link', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
         'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_article_link',
        array(
        'label'      => esc_html__('Post link', 'ocean-cream'),
        'description' => esc_html__('Change link color of posts (article)', 'ocean-cream'),
        'settings'   => 'ocean_cream_article_link',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_menu_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_menu_background',
        array(
        'label'      => esc_html__('Menu background', 'ocean-cream'),
        'description' => esc_html__('Change background color of menu', 'ocean-cream'),
        'settings'   => 'ocean_cream_menu_background',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_menu_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_menu_text',
        array(
        'label'      => esc_html__('Menu text', 'ocean-cream'),
        'description' => esc_html__('Change text color of menu', 'ocean-cream'),
        'settings'   => 'ocean_cream_menu_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_menu_item_hover', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_menu_item_hover',
        array(
        'label'      => esc_html__('Menu item hover', 'ocean-cream'),
        'description' => esc_html__('Change background color of menu, when hover.', 'ocean-cream'),
        'settings'   => 'ocean_cream_menu_item_hover',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_sidebar_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_sidebar_text',
        array(
        'label'      => esc_html__('Sidebar text', 'ocean-cream'),
        'description' => esc_html__('Change text color of sidebar and "Hamburger" icon color.', 'ocean-cream'),
        'settings'   => 'ocean_cream_sidebar_text',
        'section' => 'colors',
    )
));

    $wp_customize->add_setting('ocean_cream_sidebar_text_link', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ocean_cream_sidebar_text_link',
        array(
        'label'      => esc_html__('Sidebar text links', 'ocean-cream'),
        'description' => esc_html__('Change color of sidebar links.', 'ocean-cream'),
        'settings'   => 'ocean_cream_sidebar_text_link',
        'section' => 'colors',
    )
));
    $wp_customize->add_setting('ocean_cream_customizer_enable', array(
  'capability' => 'edit_theme_options',
  'default' => 'disable',
  'sanitize_callback' => 'ocean_cream_sanitize_select',
));

    $wp_customize->add_control('ocean_cream_customizer_enable', array(
  'type' => 'radio',
  'section' => 'colors', // Add a default or your own section
  'label' => esc_html__('Enable/Disable WP Customizer', 'ocean-cream'),
  'description' => esc_html__('If disabled, changes will not be made', 'ocean-cream'),
  'priority' => 1,
  'choices' => array(
    'enable' => esc_html__('Enable', 'ocean-cream'),
    'disable' => esc_html__('Disable', 'ocean-cream'),
  ),
));
    // https://divpusher.com/blog/wordpress-customizer-sanitization-examples#select
    function ocean_cream_sanitize_select($input, $setting)
    {

  // Ensure input is a slug.
        $input = sanitize_key($input);

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
    $wp_customize->add_setting('ocean_cream_google_fonts', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'wp_filter_nohtml_kses', //Remove html
));
    $wp_customize->add_setting('ocean_cream_google_fonts_header', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'wp_filter_nohtml_kses', //Remove html
));

    $wp_customize->add_control('ocean_cream_google_fonts', array(
  'type' => 'text',
  'section' => 'ocean_cream_customizer_fonts',
  'label' => esc_html__('Google Fonts', 'ocean-cream'),
  'description' => esc_html__('Enter the name of your favorite Google font and I will download it and prepare it for you', 'ocean-cream'),
));
    $wp_customize->add_control('ocean_cream_google_fonts_header', array(
  'type' => 'text',
  'section' => 'ocean_cream_customizer_fonts',
  'label' => esc_html__('Google Fonts header', 'ocean-cream'),
  'description' => esc_html__('Similar to Google Fonts, but change only headers.', 'ocean-cream'),
));
};
add_action('customize_register', 'ocean_cream_customize_register');
function ocean_cream_customizer_fonts($wp_customize)
{
    $wp_customize->add_section('ocean_cream_customizer_fonts', array(
    'title'             => __('Google Fonts', 'ocean-cream'),
    'description'       => __('Please, enable me in colors section', 'ocean-cream'),
));
}
add_action('customize_register', 'ocean_cream_customizer_fonts');
