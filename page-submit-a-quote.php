<?php
/**
* The template for displaying all submit page.
*
* @package QOD_Starter_Theme
*/
get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">

           <section>

               <div>
                   <h1><?php the_title(); ?>
               </div>


                   <!-- display form html -->
               <?php if ( is_user_logged_in() && current_user_can( 'edit_post' ) ) : ?>  <!-- If user is logged in & can edit posts -->
                       <form id="submitQuote">
                       <h2>Author of Quote</h2>
                       <input type="text" id="update-title" />
                       <h2>Quote</h2>
                       <textarea id="quote"></textarea>
                       <h2>Where did you find this quote? (e.g. book name)</h2>
                       <input type="text" id="quote-where" />
                       <h2>Provide the URL of the quote source, if available.</h2>
                       <input type="text" id="quote-url" />
                       <input type="submit" id="submit" value="Submit Quote" />
                   </form>
				   <p class='submit-success' style="display:none"></p>


                   <?php  else : ?>
                   <p>Sorry, you must be logged in to submit a quote!</p>
                   <a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Click here to login.</a>
                   <?php  endif; ?>


               </section>

       </main><!-- #main -->
   </div><!-- #primary -->

<?php get_footer(); ?>