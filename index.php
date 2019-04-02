<!DOCTYPE html>
<html <?php
language_attributes(); ?>>
<head>
   <meta charset="<?php
    bloginfo('charset'); ?>">

    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">

    <?php
    wp_head(); ?>
</head>
<body <?php
body_class(); ?>>
    <!-- Create menu
    Show on mobile only when click on button -->
        <div id="ocean_cream_mobile_menu">
    <?php
    wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container_class' => 'menu',
        'container' => 'nav'
        )
    ); ?>
        </div>
		<span id="ocean_cream_mobile_menu_icon">
<svg class="i-menu" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24"></path>
        </svg>
			</span>

<main>
<!-- Widgets, default hide -->
    <div id="ocean_cream_sidebar">
    <aside class="ocean_cream_sidebar">
    <?php
    dynamic_sidebar('sidebar'); ?>
    </aside>
    </div>
   <span id="ocean_cream_sidebar_open" class="ocean_cream_button"><?php esc_html_e('Show Sidebar', 'ocean-cream'); ?></span>
  <!-- Your post
	   http://microformats.org/wiki/h-entry-->
 <article <?php
    post_class('h-entry'); ?>>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <h1 class="p-name"><a href="<?php
        the_permalink(); ?>"><?php
        the_title(); ?></a></h1>
 <!-- Header info like date, author, category, tags etc. -->
<section class="ocean_cream_info">
        <?php
        esc_html_e('Written by', 'ocean-cream'); ?>
               <a class="p-author h-card" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
        <?php
        esc_html_e('on', 'ocean-cream'); ?>
	<?php the_date('c', '<time class="dt-published" datetime="', '">'); ?><?php
        echo esc_html(get_the_date()); ?></time>
	 <?php the_tags(); ?>
  </section>
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnails');
            } ?>
     <!-- Use full content for single post and excerpt for archive/latest posts -->
        <?php
        if (is_archive()) {
			echo '<p class="p-summary">';
			echo  get_the_excerpt();
			echo '</p>'; 
        } elseif (is_home()) {
            echo '<p class="p-summary">';
			echo  get_the_excerpt();
			echo '</p>'; 
        } else {
			echo '<div class="e-content">';
            the_content();
			echo '</div>';
            echo '<p class="p-category">';
			echo  the_category(', ');
			echo '</p>';
        } ?>
        <?php
        wp_link_pages(); ?>

	 <div class="OCnextpage">
        <?php
        wp_list_comments(); ?>
	 </div>

         <?php
        comments_template(); ?>
	 <a href="#comments" class="ocean_cream_button"><?php esc_html_e('Comments', 'ocean-cream'); ?></a>
	 <?php
if (is_singular()) {
            wp_enqueue_script("comment-reply");
            esc_url(previous_post_link());
            echo '<div class="rinav">', esc_url(next_post_link());
            echo '</div>';
        } elseif (is_tax()) {
            ;
        }?>
	 <?php endwhile; else : ?>
            <p>
              <?php
                esc_html_e('Sorry, no posts matched your criteria.', 'ocean-cream'); ?>
            </p>
    <?php
endif; ?>
        <?php
        the_posts_pagination(
            array(
            'mid_size' => 2
            )
        ); ?>
 </article>
</main>
        <?php
        wp_footer(); ?>
</body>
</html>
