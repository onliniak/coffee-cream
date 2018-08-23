<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=UTF-8>
    
    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    
    <!-- Use first 150 letters as search engine description, borrow from  https://wordpress.stackexchange.com/questions/151309/dynamic-meta-description/151311-->
<meta name="description" content="<?php $post = get_post(get_the_ID()); echo strip_tags(substr($post->post_content,0 , 150)); ?>">
	
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
<!-- Widgets, default hide -->
	<aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar');?> 
	</aside>
  <!-- Your post -->
 <article <?php post_class();?>>     
 	<?php if(have_posts()):while(have_posts()):the_post();?>
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
            <h1><?php the_title();?></h1>
            <?php if(has_post_thumbnail()){the_post_thumbnail( 'post-thumbnails');}?>
<?php the_content(); ?>
	  <?php    //check if the meta field has a value
    $meta_values = get_post_meta($post->ID, 'licencja', true);

    if(empty($meta_values)){
    //add a default value
    add_post_meta($post->ID, 'licencja', '<a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.pl">CC BY-NC-ND 4.0</a> Wszelkie prawa należą do autora.');
    }?>
   <?php
     echo 'Licencja :';
  echo get_post_meta( get_the_ID(), 'licencja', true ); 
?>
	 <?php wp_link_pages(); ?>
           <?php comments_template();?>            <?php endwhile;else:?>
            <p>
              <?php _e('Nie znaleziono postow spełniających podane kryteria.','ocean-cream'); ?>
            </p>
<?php endif;?>
 </article>
</main>
	 <?php wp_footer(); ?>
	<!-- Load Raleway font from Google (async) 
	  https://github.com/typekit/webfontloader -->
 <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Raleway']
    }
  });
</script>
	<!-- Keyboard next/previous page, copy from deprecated WordPress plugin (forget name) -->
	<script async>document.onkeydown = function (e) {
    var e = e || event, 
    keycode = e.which || e.keyCode; 
			//left
			//numpad 4
			//previous post
    if (keycode == 100)
        location = "<?php echo get_permalink(get_adjacent_post(false,'',false)) ?>";
			//right
			//numpad 6
			//next post
    if (keycode == 102)
        location = "<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>";
}</script>
	
</body>
</html>