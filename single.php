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
			the_post_navigation() );
		} elseif ( is_singular( 'post' ) ) {
			the_post_navigation();
		}

		// End of the loop.
	endwhile;
	?>

<?php get_sidebar( 'content-bottom' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>