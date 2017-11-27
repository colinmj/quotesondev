<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */
$source = get_post_meta(  get_the_ID(), '_qod_quote_source', true);
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
<div class="content-wrapper hide">

			<div class="left-quote hide">
				<i class="fa fa-quote-left" aria-hidden="true"></i>
		  </div> <!-- closes left quote -->
	 
   <div class="ultra-container hide">
			
		<div class="quote-container"></div>

		<div class="title-link-container hide ">
			<div class="entry-title"></div>
			<div class="entry-source-link"></div>
			<div class="entry-source"></div>
		</div>

</div> <!-- closes ultra container -->

    <div class="right-quote hide">
			  <i class="fa fa-quote-right" aria-hidden="true"></i>
    </div><!-- closes right-->


</div> <!-- closes content wrapper -->

<div class="entry-meta">

   <div class="left-quote">
			<i class="fa fa-quote-left" aria-hidden="true"></i>
	 </div><!-- left-quote -->

	<div class="meta-content">
	
		<?php the_content();?>
   
	
	<div class="meta-container">	

	 <?php  the_title( '<p class="initial-title">&mdash; ', '</p' ); ?>

		<?php if( $source && $source_url ): ?>

			<span class="source"> <a href="<?php echo $source_url;  ?>">
			<?php echo $source; ?></a></span>

		<?php elseif( $source ):   ?>

		<span class="source"> <p class="meta-source-para"><?php echo $source; ?></p></span> 

    <?php else: ?>
		<span class="source"></span>

	<?php endif; ?>

	</div><!-- meta-container -->

	</div><!-- meta content -->

		<div class="right-quote">
				<i class="fa fa-quote-right" aria-hidden="true"></i>
		</div><!-- right-quote -->

	</div><!-- entry-meta -->


</article><!-- #post-## -->


<?php if( is_home() || is_single() ):  ?>
   <div class="show-button-container">
		 <button type="button" id="new-quote-button">Show Me Another!</button>
   </div>
<?php endif; ?>