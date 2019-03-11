<?php
function ocean_cream_customize_css()
{
    ?>
         <style>
       .button{ background-color: <?php echo get_theme_mod('accent_background', '#00b0ff'); ?>; }
			 .button{ color: <?php echo get_theme_mod('accent_text', '#3e2723'); ?>; }
			 .button:hover{ background-color: <?php echo get_theme_mod('accent_hover', '#2a91d1'); ?>; }
			 .page-numbers, .OCnextpage a{ background-color: <?php echo get_theme_mod('navigation_background', '#00b0ff'); ?>;}
			 article{ background-color: <?php echo get_theme_mod('article_background', '#f5eed6'); ?>;}
			 div.menu{ background-color: <?php echo get_theme_mod('menu_background', '#d2bc83'); ?>; }
			 div.menu li a{ color: <?php echo get_theme_mod('menu_text', '#000'); ?>; }
			 div.menu li a:hover{ background-color: <?php echo get_theme_mod('menu_item_hover', '#2a91d1'); ?>; }
         </style>
    <?php
}
add_action('wp_head', 'ocean_cream_customize_css');
?>
