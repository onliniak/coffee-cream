<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <!-- Create menu
    Show on mobile only when click on button -->
    <header>
        <div id="mobinu">
    <?php wp_nav_menu(array( 'theme_location' => 'header-menu','container_class' => 'menu'  )); ?>
        </div>
        <!-- Icons from Freepic -->
               <span id="hamburger-cream">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 124 124" style="enable-background:new 0 0 124 124;" xml:space="preserve">
<g>
    <path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"/>
    <path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z" fill="#FFFFFF"/>
    <path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z" fill="#FFFFFF"/>
    </g>
</svg>
        </span>
    </header>

<main>
<!-- Widgets, default hide -->
    <div id="sidiBer">
    <aside class="sidebar">
    <?php dynamic_sidebar('sidebar');?>
    </aside>
    </div>
    <span id="ShoSid" class="button"><?php esc_html_e('Show Sidebar', 'ocean-cream'); ?></span>
  <!-- Your post. Based on Codex example-->
 <article <?php post_class();?>>
	 <h2><?php esc_html_e('About:', 'ocean-cream'); ?><?php the_author_meta('user_nicename'); ?></h2>
    <dl>
		<!-- https://codex.wordpress.org/Template_Tags/the_author_meta -->
		<dt> <?php esc_html_e('From', 'ocean-cream'); ?></dt>
		<dd> <?php the_author_meta('user_registered'); ?></dd>
		<dt> <?php esc_html_e('Website', 'ocean-cream'); ?></dt>
		<dd> <?php the_author_meta('user_url'); ?></dd>
		<dt> <?php esc_html_e('Biography', 'ocean-cream'); ?></dt>
		<dd> <?php the_author_meta('description'); ?></dd>
	 </dl>
	 <br>
    <h2><?php esc_html_e('My posts:', 'ocean-cream'); ?></h2>

    <ul>
<!-- The Loop -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
            <a href="<?php esc_url(the_permalink()) ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php echo get_the_date(); ?> <?php esc_html_e('in', 'ocean-cream'); ?> <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php esc_html_e('No posts by this author.', 'ocean-cream'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
<?php the_posts_pagination(array( 'mid_size' => 2 )); ?>
 </article>
</main>
    <?php wp_footer(); ?>
</body>
</html>
