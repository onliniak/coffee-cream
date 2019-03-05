<?php
function ocean_cream_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
  $wp_customize->add_setting( 'accent_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'accent_background', 
	array(
		'label'      => esc_html__( 'Accent background', 'ocean-cream' ),
		'description' => esc_html__( 'Change background color of buttons', 'ocean-cream' ),
		'settings'   => 'accent_background',
		'section' => 'colors',
	)
));

 $wp_customize->add_setting( 'accent_text', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'accent_text', 
	array(
		'label'      => esc_html__( 'Accent text', 'ocean-cream' ),
		'description' => esc_html__( 'Change text color of buttons', 'ocean-cream' ),
		'settings'   => 'accent_text',
		'section' => 'colors',
	)
));
	
	 $wp_customize->add_setting( 'accent_hover', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'accent_hover', 
	array(
		'label'      => esc_html__( 'Accent hover', 'ocean-cream' ),
		'description' => esc_html__( 'Change background color of buttons, when mouse hover', 'ocean-cream' ),
		'settings'   => 'accent_hover',
		'section' => 'colors',
	)
));
	
	 $wp_customize->add_setting( 'navigation_background', array(
  'type' => 'theme_mod',
  'capability' => 'edit_theme_options',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( 
	$wp_customize, 
	'navigation_background', 
	array(
		'label'      => esc_html__( 'Pagination background', 'ocean-cream' ),
		'description' => esc_html__( 'Change background color of navigation', 'ocean-cream' ),
		'settings'   => 'navigation_background',
		'section' => 'colors',
	)
));
	
	}
add_action( 'customize_register', 'ocean_cream_customize_register' );
include 'customizer_output.php';
?>