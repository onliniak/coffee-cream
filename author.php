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
<svg class="i-menu" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24"></path>
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
