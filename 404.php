<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

			<div class="left-quote">
			<i class="fa fa-quote-left" aria-hidden="true"></i>
			</div><!-- left-quote -->

			 <div class="404-wrapper">
			
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops!' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>


          <div class="searching">
						<?php get_search_form(); ?>
						<a id="search-button" href="<?php echo esc_html('Search'); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
         </div>
				</div><!-- .page-content -->

				</div> <!-- 404 wrapper -->

				<div class="right-quote">
				  <i class="fa fa-quote-right" aria-hidden="true"></i>
		    </div><!-- right-quote -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
