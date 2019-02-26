<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * PHP version 7
 *
 * LICENSE: This theme, like WordPress, is licensed under the GPL.
 
 *
 * @category  Blog
 * @package   OceanCream
 * @author    WordPress team <author@example.com>
 * @copyright 2012-2017 WordPress team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html  GNU General Public License v3 or later
 * @link      https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
 /*First published under https://wordpress.com/theme/twentythirteen*/
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required() ) {
    return;
}
?>
 
<div id="comments" class="comments-area">
 
    <?php if (have_comments() ) : ?>
        <h2 class="comments-title">
            
           <?php
            // https://gist.github.com/cristianstan/ff22d64655e322bac1bd737ea35927b4
            $comments_number = get_comments_number();
            printf(
                /* translators: 1: number of comments, 2: post title */
                esc_html(
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'ocean-cream'
                    )
                ),
                esc_html(number_format_i18n($comments_number)),
                esc_html(get_the_title())
            );
            ?>
        </h2>
 
        <ol class="comment-list">
            <?php
                wp_list_comments(
                    array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    ) 
                );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments') ) :
            ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php esc_html_e('Comment navigation', 'ocean-cream'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'ocean-cream')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'ocean-cream')); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if (! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'ocean-cream'); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php comment_form(); ?>
 
</div><!-- #comments -->
