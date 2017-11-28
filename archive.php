<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="archive-page-flex-wrapper">

		<div class="left-quote-archive">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
      </div> <!-- closes left quote -->

		<div class="archive-column-wrapper">

		<?php if ( have_posts() ) : ?>

		

		

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


			<div class="cats-and-tags">
				<?php
					get_template_part( 'template-parts/content' );
				?>
			</div>
     
			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>
	 
   </div> <!-- archive column wrapper -->
	 
	 <div class="right-quote-archive">
			  <i class="fa fa-quote-right" aria-hidden="true"></i>
    </div><!-- closes right-->
</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>




