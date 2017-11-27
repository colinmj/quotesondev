<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<div class="archive-flex-wrapper">

	<div class="left-quote">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
    </div> <!-- closes left quote -->

   <div class="archive-wrapper">



		<h1> Archives </h1>

		<?php $all_posts = new WP_Query(array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1) );

		 if ($all_posts->have_posts() ) :

		 ?>
			<h2> Quote Authors </h2>
			
			<div class="author-container">

			<?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>

			
     
	      <a href="<?php the_permalink();?>"><?php the_title(); ?> </a>
		  
			
			
			<?php endwhile; // End of the loop. ?>
		 </div>

		   <?php endif; ?>

			 <?php wp_reset_postdata() ?>


			<div class="cat-container">
			 <?php $cats = get_categories(); ?>

			  <h2> Categories </h2>
			 <?php foreach ( $cats as $category ) {
				 	echo '<a href=" ' . get_category_link($category->term_id) . '" rel="tag">' . $category->name . '' . '</a>';
			 } ?>
			 </div>


			 <div class="tag-container">
			 <?php $tags = get_tags(); ?>


		
			  <h2> Tags </h2>
			 <?php foreach ( $tags as $tag ) {
				 	echo '<a href=" ' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '' . '</a>';
			 } ?>
			 </div>

			</div> <!-- closes archive wrapper -->
		 
		 <div class="right-quote">
			  <i class="fa fa-quote-right" aria-hidden="true"></i>
		</div><!-- closes right-->
		
	</div> <!-- closese archive flex wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>