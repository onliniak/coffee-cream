<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=UTF-8>
    
    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    
	<meta name="description" content="<?php echo category_description(); ?> "> 
	
	<!-- Asynchronous CSS, inspired by https://www.filamentgroup.com/lab/async-css.html -->
	<script>
	// make a stylesheet link
var myCSS = document.createElement( "link" );
myCSS.rel = "stylesheet";
myCSS.href = "<?php echo get_stylesheet_uri(); ?>";
// insert it at the end of the head in a legacy-friendly manner
document.head.insertBefore( myCSS, document.head.childNodes[ document.head.childNodes.length - 1 ].nextSibling );</script>
<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"></noscript>

	 <?php wp_head(); ?>
</head>
<body>
	<!-- Create menu
	Show on mobile only when click on button
	http://jsfiddle.net/6W7XD/ (not mine) -->
	<header>
		   <a class="guzik" href="#show"class="show"><?php _e('Menu','ocean-cream'); ?></a>
            <a href="#hide"class="hide"><?php _e('Hide','ocean-cream'); ?></a>
            <div id="cont">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu'  ) ); ?></div>
	</header>
<main <?php body_class();?>>
	<aside class="sidebar">
<?php dynamic_sidebar( 'sidebar');?> 
</aside>
  <!-- Your post -->
 <article <?php post_class();?>>     
 	<?php if(have_posts()):while(have_posts()):the_post();?>
	 <h1><?php the_title();?></h1>
 <!-- Header info like date, author, category, tags etc. -->
 <section>
 <?php _e('Written by','ocean-cream'); ?>
                <?php the_author_posts_link(); ?>
 <?php _e('on','ocean-cream'); ?> <?php echo get_the_date(); ?>
            <?php _e('in','ocean-cream'); ?>
            <?php the_category( ', ');?>
            <br>
              <?php the_tags();?>
     </section>    
            <?php if(has_post_thumbnail()){the_post_thumbnail( 'post-thumbnails');}?>
<?php the_excerpt() ?><a href="<?php echo get_permalink(); ?>"> <?php _e('Read more…','ocean-cream'); ?></a> <p>
	 
	 </p>
            <?php endwhile;else:?>
            <p>
              <?php _e('Nie znaleziono postow spełniających podane kryteria.','ocean-cream'); ?>
            </p>
<?php endif;?>
	 <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
 </article>
</main>
	 <?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Raleway']
    }
  });
</script>
</body>
</html>