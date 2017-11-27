<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <div class="form-quote-wrapper"> 

    <div class="left-quote">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
      </div> <!-- closes left quote -->

      <div class="form-wrapper">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

      <?php  if( is_user_logged_in() && current_user_can( 'edit_posts' ) ): ?>

     

    <!-- <div class="form-wrapper"> -->
   

      <form name="submit-form" class="submit-form">
      

       <div class="form-author" >
          <label> Author of Quote</label>
          <input class="name" type="text">
      </div>

        <div class="form-quote">
          <label> Quote </label>
          <textarea rows="3" cols="20" class="content-form" type="text"></textarea>
        </div>

        <div class="form-where" >
          <label>Where did you find thid quote </label>
          <input class="source-form" type="text">
        </div>

        <div class="form-url">
          <label> Provide a URL of the source of the quote</label>
          <input class="source-url" type="url">
        </div>

        <button type="button" class="post-submit">Submit Quote</button>
      </form>
    </div>
    <div class="right-quote">
			  <i class="fa fa-quote-right" aria-hidden="true"></i>
    </div><!-- closes right-->
</div> <!-- closes for quote wrapper-->

<?php else: ?>

<p> you shall not post! </p>

<p> <?php echo sprintf( '<a href="%1s">%2s</a>', esc_url( wp_login_url()), 'Click here to login' ); ?> </p>

<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>