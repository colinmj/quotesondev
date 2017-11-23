<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $all_posts = new WP_Query(array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1) );

		 if ($all_posts->have_posts() ) :

     ?>

			<?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
  
	    <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
		
			
			
			<?php endwhile; // End of the loop. ?>
		   <?php endif; ?>

			 <?php wp_reset_postdata() ?>

			 <p> <?php wp_list_categories() ?> </p>


			 
			 <?php $tags = get_tags(); ?>

			 <?php foreach ( $tags as $tag ) {
				 	echo '<a href=" ' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '' . '</a>';
			 } ?>
				 
			 		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>