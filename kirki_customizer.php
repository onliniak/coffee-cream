<?php
# I use kirki plugin as customizer framework, so if you want to change colors via customizer → please,
# install https://pl.wordpress.org/plugins/kirki/ or help me with rewrite my code to WordPress customizer API.
# After installation, please delete first # (uncomment include include 'kirki_customizer.php';)
# No, I've tried native WP Customizer API, but it not work. 
Kirki::add_config( 'accent_background', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );Kirki::add_field( 'accent_background', [
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_1',
	'label'       => esc_html__( 'Accent background', 'ocean-cream' ),
	'description' => esc_html__( 'Change background color of buttons', 'ocean-cream' ),
	'section'     => 'section_id',
	'default'     => '#00b0ff',
	'choices'     => [
		'colors' => Kirki_Helper::get_material_design_colors( 'primary' ),
		'size'   => 25,
	],
	'output' => array(
    array(
        'element'  => '.button',
        'property' => 'background-color',
    ),
),
] );
Kirki::add_panel( 'panel_id', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Ocean Cream', 'ocean-cream' ),
    'description' => esc_html__( 'Customize more options', 'ocean-cream' ),
) );
Kirki::add_section( 'section_id', array(
    'title'          => esc_html__( 'Colors', 'ocean-cream' ),
    'description'    => esc_html__( 'Color me', 'ocean-cream' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_config( 'accent_text', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );Kirki::add_field( 'accent_text', [
	'type'        => 'color',
	'settings'    => 'color_palette_setting_0',
	'label'       => __( 'Accent text', 'ocean-cream' ),
	'description' => esc_html__( 'Change text color of buttons', 'ocean-cream' ),
	'section'     => 'section_id',
	'default'     => '#3e2723',
	'output' => array(
    array(
        'element'  => '.button',
        'property' => 'color',
    ),
),
] );

Kirki::add_config( 'accent_hover', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );Kirki::add_field( 'accent_hover', [
	'type'        => 'color',
	'settings'    => 'color_palette_setting',
	'label'       => __( 'Accent hover', 'ocean-cream' ),
	'description' => esc_html__( 'Change background color of buttons, when mouse hover', 'ocean-cream' ),
	'section'     => 'section_id',
	'default'     => '#2a91d1',
	'output' => array(
    array(
        'element'  => '.button:hover',
        'property' => 'background-color',
    ),
),
] );

Kirki::add_config( 'navigation_background', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );Kirki::add_field( 'navigation_background', [
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_2',
	'label'       => __( 'Pagination background', 'ocean-cream' ),
	'description' => esc_html__( 'Change background color of navigation', 'ocean-cream' ),
	'section'     => 'section_id',
	'default'     => '#00b0ff',
	'output' => array(
    array(
        'element'  => '.page-numbers, .OCnextpage a',
        'property' => 'background-color',
    ),
),
] );

?>