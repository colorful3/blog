<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blog_Lite
 */

get_header(); ?>

	<div id="primary" class="content-area col col-2-of-3">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : 

				while ( have_posts() ) : the_post();
					
					get_template_part( 'template-parts/content', 'search' );				

				endwhile; // End of the loop.

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
