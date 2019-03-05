<?php
function ocean_cream_customize_css()
{
    ?>
         <style>
             .button{ background-color: <?php echo get_theme_mod('accent_background','#00b0ff'); ?>; }
			 .button{ color: <?php echo get_theme_mod('accent_text','#3e2723'); ?>; }
			 .button:hover{ color: <?php echo get_theme_mod('accent_hover','#2a91d1'); ?>; }
			 .page-numbers, .OCnextpage a{ background-color <?php echo get_theme_mod('navigation_background','#00b0ff'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'ocean_cream_customize_css');
?>