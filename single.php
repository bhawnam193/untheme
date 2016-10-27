<?php
/**
 * The template for displaying all single posts and attachments
 *
 * untheme - a simple, concise WordPress theme for developers
 * by Tania Rascia
 *
 */

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'single' );

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			) );
		} elseif ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		}

		// End of the loop.
	endwhile;
	?>

<?php get_sidebar( 'content-bottom' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>