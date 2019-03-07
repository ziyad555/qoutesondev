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

				<form  action="/action_page.php">
				author of the quote<br><br> 
				<input type="text" name="fname"><br><br>
				Quote<br><br>
  <textarea rows="4" cols="50" name="lname"></textarea><br><br>
				Where did you find this quote ?(e.g. book name) <br><br>
				<input type="text" name="lname"><br><br>
				Provide a URL of the source (if availabel)<br><br>
				<input type="text" name="fname"><br><br>
 				 <input type="button" onclick="myFunction()" value="Submit form">
                </form>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<!--SUBMISSION FORM HAS BEED CREATED USING A PLUGING (NINJA FORM) AND ITS FUNCTIONAL YOU CAN ADD SUBMISSION ONLY WHEN YOU LOGIN--->
