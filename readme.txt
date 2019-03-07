=== Ocean Cream ===
Contributors: onliniak
Tags: featured-images, left-sidebar, custom-background, translation-ready, blog
Requires at least: 4.0
Tested up to: 5.0
Stable tag: 0.9
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Description ==
One-file starter theme with lightweight in mind. Include hiden sidebar and numeric keyboard navigation. Optimalization for Google.

== Frequently Asked Questions ==

= Help, my plugins don't works (load in footer) =

Some plugins use get_footer to load scripts in footer.
But in this case we don't use footer.php, so you must change get_footer to wp_footer .

= I want to change XYZ (for example colours) =

Use WP Customize (/wp-admin/customize.php).

= How exactly works "keyboard navigation" ? =

Press 4 on the numeric keypad to go to the previous entry or 6 numeric keys to go to the next one.

= How exactly works "automatic screen" ? =

The size of the font and entry / sidebar is automatically determined based on the width of the window.
 
 = I need automatic meta description =
 
 Use "seo" plugin or  https://gist.github.com/palimadra/3023928
 
 = The file size is too big =
 
 Use "minify" plugin. It will delete comments and spaces → size will decrease more than 50%.
 
 = I have under 100 points in Google Page Insight =
 
 You must add Expire Headers and Gzip support to your .htaccess . Also plugins may decrease score. 
 
 = Why you paste inline js and css ? =
 https://www.keycdn.com/support/inline-small-css-and-javascript
 
"In the event that you have one or multiple files which don’t contain much CSS or JS, including them within your HTML document can result in a more efficient loading time." … "In most cases, using an external file to call your CSS and JavaScript is considered best practice. However, page speed improvements can be achieved by including small CSS and JavaScript snippets within your HTML file in order to avoid additional round trips.

Inline small CSS and inline small JavaScript are both recommendations provided by certain site speed test tools. This recommendation is quite straightforward to implement, however being careful in not going overboard by inlining too much CSS and JS is important."

In this case I use really very small files like 415B, 563B, 1.8kB and first 1kB in footer. Also I need critical CSS very first after page load. On the other hand I sacrify 2kB of cache for better score in test. 

== Changelog ==

= 0.9 = Upload to WordPress repository.
= 0.91 = Remove Google Fonts, hardcoded css and js ; repair minor errors, add escaping functions, rename functions, add print.css, repair all php/js errors.
= 0.92 = Remove "hard coded date" in author.php, add other escaping functions, minor update in polish language, WordPress 5.0 compatible. 
== Inspirations ==

- Yarn (https://wordpress.org/themes/yarn/)
- 2015 (https://pl.wordpress.org/themes/twentyfifteen/)
- W3Schools
- Stackoverflow

== Resources ==
* Buttons, pagination (and colours) from  Materialize (https://github.com/Dogfalo/materialize)
* "Hamburger" icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
* Keyboard next/previous page, copy from deprecated WordPress plugin (forget name)
