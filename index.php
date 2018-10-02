<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <!-- Mobile zoom -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    
	<!-- Automatic meta description 
         https://gist.github.com/palimadra/3023928
         update to Gutenberg support by me -->
<? if ( is_singular() ) {
        $meta = strip_tags( $post->post_content );
        $meta = strip_shortcodes( $post->post_content );
        $meta = str_replace( array("\n", "\r", "\t", "<!-- wp:paragraph -->", "<p>", "<!--nextpage-->"), ' ', $meta );
        $meta = mb_substr( $meta, 0, 125, 'utf8' );
        echo '<meta name="description" content="' . $meta . '" />' . "\n";
    }
	elseif ( is_archive() ) {
$archi = get_the_archive_description();
echo '<meta name="description" content="'.$archi.'">';
		} 
	elseif ( is_home() ) { $blogdes = get_bloginfo('description');
echo '<meta name="description" content="'.$blogdes.'">';
		}
	?>
	<!-- Critical CSS -->
	<style>
	html {
    background-color: #00040A /* Deep Ocean (Dark Ink)*/
}

article {
    background-color: beige;
    margin: auto;
	margin-top:1%;
	max-width: 75%;
	border-radius:25px;
    padding: 2em 4em 2em}
.attachment-post-thumbnails{
	width:80%;height:40% }

aside.sidebar{
	float:left;
	max-width: 25%;
	margin-top:1%;
	color:whitesmoke
}

aside.sidebar a {
	color:whitesmoke
}

p {
	font-size: calc(14px + 0.4vw);
    line-height: calc(22px + 0.8vw);
    font-family: Raleway, arial, sans;
     color:#333 /* Dark grey */
}
/* https://stackoverflow.com/questions/23984629/how-to-set-min-font-size-in-css */

a{color:#333}

/* Menu */
 div.menu{
        margin:auto;
        padding:0;
        overflow:auto;
        background-color:#cfb77b /* Sand */
    }
	div.menu li {
		float:left;
			 list-style-type:none
	}
    div.menu li a:hover{
		background-color:cadetblue
    }
    div.menu li a{
        display:block;
        padding:14px 16px;
        text-decoration:none;
		color:black
    }
/* Submenu */
div.menu ul ul {display:none}
div.menu ul li:hover > ul {display:block}

/* MOBIle meNU */
a.mobinu {display:none}

@media screen and (max-width:999px){
	div.menu li {width:100%;float:none;padding:0}
	#mobinu {display:none}
	a.mobinu {display:block}
	aside.sidebar {display:none}
	article {max-width:100%;margin:auto;border-radius:0}
}
		/* Sidebar hide */
		#sidiBer {display:none}
		/* https://www.w3schools.com/css/css3_buttons.asp */
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
/* Change left margin when sidebar is enable */
#sidiBer[style*='display: block'] ~ article {
  margin-left:25%;
}
	</style>
	<!-- Load other CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	
	 <?php wp_head(); ?>
</head>
<body>
	<!-- Create menu
	Show on mobile only when click on button -->
	<header>
		<div id="mobinu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu'  ) ); ?>
		</div>
		<!-- Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a> -->
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

<main <?php body_class();?>>
<!-- Widgets, default hide -->
	<div id="sidiBer">
	<aside class="sidebar">
		<?php dynamic_sidebar( 'sidebar');?> 
	</aside>
	</div>
	<a href="javascript:void(0);" onclick="sidiBer()" class="button">Show sidebar</a>
  <!-- Your post -->
 <article <?php post_class();?>>     
 	<?php if(have_posts()):while(have_posts()):the_post();?>
	 <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
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
	 <!-- Use full content for single post and excerpt for archive/latest posts -->
<?	 if ( is_archive() ) {
   the_excerpt();
}
	 elseif ( is_home() ) {
   the_excerpt();
}
	 else {
    the_content();
} ?>
	 <?php wp_link_pages(); ?>
           <?php comments_template();?>            <?php endwhile;else:?>
            <p>
              <?php _e('Nie znaleziono postow spełniających podane kryteria.','ocean-cream'); ?>
            </p>
<?php endif;?>
	  <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
 </article>
</main>
	 <?php wp_footer(); ?>
<!-- Mobile menu via javascript -->
<script>
function mobinu() {
  var x = document.getElementById("mobinu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
	<script>
		function sidiBer() {
  var x = document.getElementById("sidiBer");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
	</script>
	<!-- Load Raleway font from Google (async) 
	  https://github.com/typekit/webfontloader -->
 <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Raleway:500']
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
