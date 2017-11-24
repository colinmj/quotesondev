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
 
<div class="content-wrapper">

		<div class="quote-container"></div>

		<div class="title-link-container hide">
			<div class="entry-title"></div>
			<div class="entry-source-link"></div>
			<div class="entry-source"></div>
		</div>

</div>

	<div class="entry-meta">

	<?php the_content();?>

	<div class="meta-container">	
	 <?php  the_title( '<p class="initial-title">&mdash; ', '</p' ); ?>

		<?php if( $source && $source_url ): ?>

			<span class="source"> <a href="<?php echo $source_url;  ?>">
			<?php echo $source; ?></a></span>

		<?php elseif( $source ):   ?>

		<span class="source"> <?php echo $source; ?></span> 

    <?php else: ?>
		<span class="source"></span>
  </div>
		<?php endif; ?>
	</div>

 

	  
</article><!-- #post-## -->


<?php if( is_home() || is_single() ):  ?>
   <div class="show-button-container">
		 <button type="button" id="new-quote-button">Show Me Another!</button>
   </div>
<?php endif; ?>
