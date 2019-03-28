=== Ocean Cream ===
Contributors: onliniak
Donate link: https://onliniak.github.io/ocean-cream/donation.htm
Tags: featured-images, left-sidebar, custom-background, translation-ready, blog
Requires at least: 4.0
Tested up to: 5.1.1
Requires PHP: 5.2
Stable tag: 0.96.2
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Description ==
Never waste space on your blog again! Choose hidden comments and sidebar, choose Ocean Cream. In addition, thanks to its lightness, it will speed up your website.

== Frequently Asked Questions ==

= Supported browsers =

Firefox 6+, Opera "Classic" 11.64-12.18 (ugly fonts), Chromium 30+, IE 10+, WebKit( Midori 0.5, Luakit 1.8.0, Arora 0.11, Safari 9.1.3+ etc.), tested on latest Firefox (Linux).

= Tested screen resolutions =

1366x768 (mainly, laptop), 1920x1080, 1440x900, 600x831 (Samsung Galaxy Tab 4 7.0, mainly), Motorola Moto G (falcon).

= Help, my plugins don't works (load in footer) =
 
Some plugins use get_footer to load scripts in footer.
But in this case we don't use footer.php, so you must change get_footer to wp_footer .

= I want to change XYZ =

For colors, look at https://github.com/onliniak/ocean-cream/tree/github-flavoured/inc. Copy inc directory and add this line https://github.com/onliniak/ocean-cream/blob/github-flavoured/functions.php#L2 or use custom CSS (look at customizer_output for example). 
For other changes use theme editor and favourite search engine (for example Google)
or write new support ticket.

= Why the_author_meta ? (author page) =

In the future it will be easier to change presented informations. 
 
= How exactly works "automatic screen" ? =

The size of the font and entry / sidebar is automatically determined based on the width of the window.

 = I have under 100 points in Google Page Insight =
 
 You must add Expire Headers and Gzip support to your .htaccess . Also plugins may decrease score. 
 
 = You repeat CSS code few times, for example 3 article background =
 
 This is for compatibility issues. It will be remove in future releases.
 
 = Wrong gramatic =
 
 Create new ticket or even better send new pull request on Github.
 
== Changelog ==

= 0.9 =  Upload to WordPress repository. Again, again, again …
= 0.94 = Ready for CSP. (rewrite js buttons from onload() to span).
= 0.95 = Rewrire author page (the_author function, instead of $curauth), new pagination CSS, smaller font, hsla colors (better VA/IPS support), hide comments by default, minify and merge keyboard.js + buttons.js to bundle.min.js
= 0.96 = remove no-GPL code, WP customizer support.
= 0.96.1 = remove unverified code (WP Customizer, hsla colors and custom background color support).
= 0.96.2 = new CSS selectors → for example sidiBer is now ocean_cream_sidebar, hamburger_cream is now ocean_cream_mobile_menu_icon etc, fix transparent background after upgrade to 0.96.1

== Inspirations ==

- Yarn (colors, mobile version) (https://wordpress.org/themes/yarn/)
- "Material" colors of buttons (https://materializecss.com/buttons.html)

== Resources ==
* "Hamburger" icon made by danklammer from https://github.com/danklammer/bytesize-icons. Licensed under MIT.
