<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stolar
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php kama_breadcrumbs() ?>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'stolar'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
