<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
            </header><!-- .page-header -->

            <h3>Quote Authors</h3>

            <div class="entry-content-archives">

            <?php

            // Fetch all the posts
           
            // Loop through the posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );
        
            $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>

                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                   
                   
                    <?php
                }
            }
            // Echo out the post title as a link to the post

            ?>
            </div>

            <h3>Categories</h3>
            <div class="entry-content-archives">

            <?php

            // fetch all the categories (is there a wordpress function to do this?)
            $categories = get_categories();
    foreach($categories as $category) {
            echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        }

            //LOOP
            $args = array(
                'post_type' => 'page'
            );
        
            $post_query = new WP_Query($args);
         if($post_query->get_categories() ) {
      while($post_query->get_categories() ) {
            $post_query->get_categories();
            ?>
            <h2><?php the_category(); ?></h2>
            <?php
          }
        }
            // echo out all the categories (perhaps the wordpress funciton can do this?)

            ?>
            </div>
            <h3>Tags</h3>
            <div class="entry-content-archives">
            

            <?php
            //fetching
            $tags = get_tags();
            foreach($tags as $tag) {
                    echo '<div class="col-md-4"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div>';
                }
            // As above, but tags...
            //loop
            $args = array(
                'post_type' => 'page'
            );
        
            $post_query = new WP_Query($args);
         if($post_query->get_tags() ) {
      while($post_query->get_tags() ) {
            $post_query->get_tags();
            ?>
            <h2><?php the_tags(); ?></h2>
            <?php
          }
        }
            ?>
            </div>


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<!-- TUE 10:00AM -->
<!-- THIS PAGE WAS CREATED AND COPIED ARCHIVE.PHP INSIDE -->
