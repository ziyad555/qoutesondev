<?php
/**
 * The template for displaying all pages. THIS IS THE PAGE YOU WILL USE FOR ABOUT PAGE.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
				

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<!--SUBMISSION FORM HAS BEED CREATED USING A PLUGING (NINJA FORM) AND ITS FUNCTIONAL YOU CAN ADD SUBMISSION ONLY WHEN YOU LOGIN--->
