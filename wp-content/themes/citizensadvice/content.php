<?php 
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'index-page__box' ); ?>>

<?php
	if ( is_single() || is_page() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	endif;
?>


<?php if ( is_single() || is_home() ) : ?>
	<ul class="entry-meta">
		<li><i class="icon-user"></i>Author: <?php the_author_posts_link(); ?><br>
			<small class="content-meta"><i class="icon-calendar"></i>Published: <?php the_time( 'j F Y' ); ?></small>
		</li>
	</ul><hr>
<?php endif; ?>


<?php
	if ( is_single() || is_page() ) :
		the_content();
	else :
		the_excerpt();
	endif;
?>


<?php if ( is_single() ) : ?>
	<?php if ( has_category() || has_tag() ) : ?>
	<ul class="entry-meta">
		<?php if ( has_category() ) : ?><li><i class="icon-bookmark"></i>Category: <?php the_category( ', ' ); ?></li><?php endif; ?>
		<?php if ( has_tag() ) : ?><li><i class="icon-tag"></i>Tagged: <?php the_tags( '', ', ', '' ); ?></li><?php endif; ?>
	</ul><hr>
	<?php endif; ?>
	
	<div class="prev-next-links flex-row js-equal-height">
		<?php next_post_link('<div class="col-md-6"><span>Next post</span><br> %link</div>'); ?>
		<?php previous_post_link('<div class="col-md-6"><span>Previous post</span><br> %link</div>'); ?>
	</div>
<?php endif; ?>
	
</article>



