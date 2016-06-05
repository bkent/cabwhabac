<?php 
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?>

<div class="no-results not-found">
	<h1 class="page-title">Nothing Found</h1>
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p>Ready to publish your first post? <a href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>">Get started here</a></p>
<?php elseif ( is_search() ) : ?>
	<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
	<p>Suggestions:</p>
	<ul>
		<li>make sure all words are spelled correctly</li>
		<li>try different keywords</li>
		<li>try more general keywords</li>
	</ul>
	<?php get_search_form(); ?>
<?php else : ?>
	<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
	<?php get_search_form(); ?>
<?php endif; ?>
</div>