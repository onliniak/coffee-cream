<?php
// Run function (load custom changes) only when customizer is enable.
if (get_theme_mod('ocean_cream_customizer_enable') == 'enable') {
    function ocean_cream_customize_css()
    {
        $ocean_cream_google_fonts_enable = get_theme_mod('ocean_cream_google_fonts');
        $ocean_cream_google_fonts_header_enable = get_theme_mod('ocean_cream_google_fonts_header');

        if (!empty($ocean_cream_google_fonts_enable)) {
            echo '<link href="https://fonts.googleapis.com/css?family=';
            echo $ocean_cream_google_fonts_enable;
            echo '" rel="stylesheet">';
        }

        if (!empty($ocean_cream_google_fonts_header_enable)) {
            echo '<link href="https://fonts.googleapis.com/css?family=';
            echo $ocean_cream_google_fonts_header_enable;
            echo '" rel="stylesheet">';
        }

        echo '<style>';
        if (!empty($ocean_cream_google_fonts_enable)) {
            echo 'article p, .ocean_cream_info, aside li, aside p { font-family:';
            echo $ocean_cream_google_fonts_enable;
            echo ',';
            echo '"Nimbus Sans",Helvetica,Arial,sans}';
        }

        if (!empty($ocean_cream_google_fonts_header_enable)) {
            echo 'h1, h2, h3, h4, h5, h6 { font-family:';
            echo $ocean_cream_google_fonts_header_enable;
            echo ',';
            echo '"Nimbus Sans",Helvetica,Arial,sans}';
        } ?>
       .ocean_cream_button{ background-color: <?php echo get_theme_mod('ocean_cream_accent_background', '#00b0ff'); ?>!important; }
			 .ocean_cream_button{ color: <?php echo get_theme_mod('ocean_cream_accent_text', '#3e2723'); ?>; }
			 .ocean_cream_button:hover{ background-color: <?php echo get_theme_mod('ocean_cream_accent_hover', '#2a91d1'); ?>; }
			 .page-numbers, .OCnextpage a{ background-color: <?php echo get_theme_mod('ocean_cream_navigation_background', '#00b0ff'); ?>;}
			 article{ background-color: <?php echo get_theme_mod('ocean_cream_article_background', '#f5eed6'); ?>!important;}
			 article a{ color: <?php echo get_theme_mod('ocean_cream_article_link'); ?>;}
			 article p, .ocean_cream_info{ color: <?php echo get_theme_mod('ocean_cream_article_text'); ?>;}
			 nav.menu, nav ul ul{ background-color: <?php echo get_theme_mod('ocean_cream_menu_background', '#d2bc83'); ?>!important; }
			 nav.menu li a{ color: <?php echo get_theme_mod('ocean_cream_menu_text', '#000'); ?>; }
			 nav.menu li a:hover{ background-color: <?php echo get_theme_mod('ocean_cream_menu_item_hover', '#2a91d1'); ?>; }
			 aside li, aside p, svg.i-menu {color: <?php echo get_theme_mod('ocean_cream_sidebar_text', '#ffffff'); ?>!important;}
			 aside a {color: <?php echo get_theme_mod('ocean_cream_sidebar_text_link', '#ffffff'); ?>!important;}
         </style>
    <?php
    }
    add_action('wp_head', 'ocean_cream_customize_css');
}
