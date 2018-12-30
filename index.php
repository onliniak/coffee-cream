<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">
	
	 <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<!-- Create menu
	Show on mobile only when click on button -->
	<header>
		<div id="mobinu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu'  ) ); ?>
		</div>
		<!-- Icons from Freepic -->
		<a href="javascript:void(0);" onclick="mobinu()" class="mobinu">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 124 124" style="enable-background:new 0 0 124 124;" xml:space="preserve">
<g>
	<path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"/>
	<path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z" fill="#FFFFFF"/>
	<path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z" fill="#FFFFFF"/>
	</g>
</svg>
		</a>
	</header>

<main>
<!-- Widgets, default hide -->
	<div id="sidiBer">
	<aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar');?> 
	</aside>
	</div>
	<a href="javascript:void(0);" onclick="sidiBer()" class="button" id="mobinu"><?php esc_html_e('Show Sidebar','ocean-cream'); ?></a>
  <!-- Your post -->
 <article <?php post_class();?>>     
 	<?php if(have_posts()):while(have_posts()):the_post();?>
	 <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
 <!-- Header info like date, author, category, tags etc. -->

 <?php esc_html_e('Written by','ocean-cream'); ?>
                <?php the_author_posts_link(); ?>
 <?php esc_html_e('on','ocean-cream'); ?> <?php echo get_the_date(); ?>
            <?php esc_html_e('in','ocean-cream'); ?>
            <?php the_category( ', ');?>
            <br>
              <?php the_tags();?>
  
            <?php if(has_post_thumbnail()){the_post_thumbnail( 'post-thumbnails');}?>
	 <!-- Use full content for single post and excerpt for archive/latest posts -->
<?php	 if ( is_archive() ) {
   the_excerpt();
}
	 elseif ( is_home() ) {
   the_excerpt();
}
	 else {
    the_content();
} ?>
	<?php wp_link_pages(); ?>

<?php wp_list_comments(); ?>
      
	 <?php comments_template();?> <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" );  previous_post_link(); echo '<div class="rinav">',  next_post_link(); echo '</div>' ?>          <?php endwhile;else:?>
            <p>
              <?php esc_html_e('Sorry, no posts matched your criteria.','ocean-cream'); ?>
            </p>
<?php endif;?>
	 <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
 </article>
</main>
	 <?php wp_footer(); ?>
</body>
</html>
